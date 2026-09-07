#!/bin/sh
# ============================================================
#  Brewly Coffee — Docker Entrypoint Script
#  Berjalan setiap kali container di-start
# ============================================================
set -e

echo "============================================"
echo "  🍵 Brewly Coffee — Starting Container"
echo "============================================"

# Tunggu database siap (jika menggunakan MySQL)
if [ "$DB_CONNECTION" = "mysql" ]; then
    echo "⏳ Menunggu database siap..."
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
        echo "   Database belum siap, coba lagi dalam 3 detik..."
        sleep 3
    done
    echo "✅ Database siap!"
fi

# Generate APP_KEY jika belum ada
if [ -z "$APP_KEY" ] || [ "$APP_KEY" = "" ]; then
    echo "🔑 Generating APP_KEY..."
    php artisan key:generate --force
fi

# Jalankan migrasi database
echo "🗄️ Menjalankan migrasi database..."
# Tambahkan || true di akhir perintah agar jika migrasi gagal, container tidak crash/exit
php artisan migrate --force || echo "⚠️ Migrasi gagal, tetapi container tetap berjalan."

# Clear & cache konfigurasi
echo "⚙️ Caching konfigurasi..."
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Set permission
echo "🔧 Setting permissions..."
chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache
chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

echo "============================================"
echo "  ✅ Container siap! Menjalankan PHP-FPM..."
echo "============================================"

# Jalankan PHP-FPM
exec php-fpm
