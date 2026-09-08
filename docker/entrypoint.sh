#!/bin/sh
# ============================================================
#  Brewly Coffee — Docker Entrypoint Script (REVISED)
# ============================================================
set -e

trap 'echo "❌ Entrypoint gagal di baris $LINENO, exit code $?"' ERR

echo "============================================"
echo "  🍵 Brewly Coffee — Starting Container"
echo "============================================"

cd /var/www/html

# ---- 0. Pastikan file .env fisik ada ----
# env_file di compose cuma inject env var ke proses, TIDAK membuat file .env.
# Sebagian command artisan (key:generate) butuh file .env fisik untuk ditulis.
if [ ! -f .env ]; then
    if [ -f .env.docker ]; then
        echo "📄 .env tidak ditemukan, menyalin dari .env.docker..."
        cp .env.docker .env
    else
        echo "⚠️  .env.docker juga tidak ditemukan! Membuat .env kosong minimal..."
        touch .env
    fi
fi

# ---- 1. Tunggu database siap (jika menggunakan MySQL) ----
if [ "$DB_CONNECTION" = "mysql" ]; then
    echo "⏳ Menunggu database siap..."
    RETRIES=20
    until php -r "
        try {
            \$pdo = new PDO(
                'mysql:host=${DB_HOST:-db};port=${DB_PORT:-3306};dbname=${DB_DATABASE:-brewly_coffee}',
                '${DB_USERNAME:-brewly_user}',
                '${DB_PASSWORD:-brewly_password}'
            );
            echo 'Connected!';
        } catch (Exception \$e) {
            exit(1);
        }
    " 2>/dev/null; do
        RETRIES=$((RETRIES - 1))
        if [ "$RETRIES" -le 0 ]; then
            echo "❌ Database tidak siap setelah beberapa kali percobaan, menyerah."
            exit 1
        fi
        echo "   Database belum siap, coba lagi dalam 3 detik... ($RETRIES tersisa)"
        sleep 3
    done
    echo "✅ Database siap!"
fi

# ---- 2. Generate APP_KEY jika belum ada ----
if [ -z "$APP_KEY" ]; then
    echo "🔑 Generating APP_KEY..."
    php artisan key:generate --force || echo "⚠️  key:generate gagal, lanjut pakai APP_KEY dari environment (jika ada)."
fi

# ---- 3. Clear & cache konfigurasi Laravel (skip cache di local biar dev-friendly) ----
echo "⚙️ Clearing config lama..."
php artisan config:clear
php artisan route:clear
php artisan view:clear

if [ "$APP_ENV" != "local" ]; then
    echo "⚙️ Caching konfigurasi (non-local env)..."
    php artisan config:cache
    php artisan route:cache
    php artisan view:cache
else
    echo "🛠️  APP_ENV=local, skip caching supaya perubahan kode langsung kepakai."
fi

# ---- 4. Jalankan migrasi database ----
echo "🗄️ Menjalankan migrasi database..."
php artisan migrate --force || {
    echo "❌ Migrasi gagal! Cek log migration di atas untuk detail errornya."
    exit 1
}

# ---- 5. Set permission folder runtime ----
echo "🔧 Setting permissions..."
chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache
chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

echo "============================================"
echo "  ✅ Container siap! Menjalankan PHP-FPM..."
echo "============================================"

exec php-fpm