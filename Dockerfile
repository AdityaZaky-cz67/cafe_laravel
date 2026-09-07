# ============================================================
#  Brewly Coffee — Dockerfile
#  Base: PHP 8.2 FPM Alpine (ringan ~80MB)
# ============================================================

FROM php:8.2-fpm-alpine

# ---- Label metadata ----
LABEL maintainer="Brewly Coffee Dev Team"
LABEL description="Brewly Coffee Laravel App Container"

# ---- Install dependensi sistem & ekstensi PHP ----
RUN apk add --no-cache \
    bash \
    curl \
    git \
    unzip \
    libzip-dev \
    libpng-dev \
    libjpeg-turbo-dev \
    freetype-dev \
    oniguruma-dev \
    icu-dev \
    mysql-client \
    && docker-php-ext-configure gd \
        --with-freetype \
        --with-jpeg \
    && docker-php-ext-install \
        pdo \
        pdo_mysql \
        mbstring \
        zip \
        exif \
        pcntl \
        bcmath \
        gd \
        intl \
    && rm -rf /var/cache/apk/*

# ---- Install Composer ----
COPY --from=composer:2.7 /usr/bin/composer /usr/bin/composer

# ---- Set working directory ----
WORKDIR /var/www/html

# ---- Copy composer files dulu (untuk cache layer) ----
COPY composer.json composer.lock ./

# ---- Install PHP dependencies ----
ARG INSTALL_DEV=false
RUN if [ "$INSTALL_DEV" = "true" ]; then \
        composer install --no-interaction --no-scripts --prefer-dist; \
    else \
        composer install --no-dev --no-interaction --no-scripts --prefer-dist --optimize-autoloader; \
    fi

# ---- Copy semua source code ----
COPY . .

# ---- Default .env bila belum ada ----
RUN cp .env.example .env

# ---- Jalankan post-install scripts ----
RUN composer run-script post-autoload-dump

# ---- Set permission folder Laravel ----
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html/storage \
    && chmod -R 755 /var/www/html/bootstrap/cache

# ---- Copy custom PHP config ----
COPY docker/php/php.ini /usr/local/etc/php/conf.d/custom.ini

# ---- Expose port PHP-FPM ----
EXPOSE 9000

# ---- Entrypoint ----
COPY docker/entrypoint.sh /usr/local/bin/entrypoint.sh
RUN sed -i 's/\r$//' /usr/local/bin/entrypoint.sh && chmod +x /usr/local/bin/entrypoint.sh

CMD ["/usr/local/bin/entrypoint.sh"]
