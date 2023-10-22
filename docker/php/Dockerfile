FROM php:8.2.6-fpm

COPY --from=composer:2.5.5 /usr/bin/composer /usr/local/bin/composer

RUN ln -s /var/www/html/artisan /usr/local/bin/artisan \
    && apt-get update \
    && apt-get install -y libexif-dev libjpeg-dev libpng-dev libfreetype6-dev \
    && apt-get install -y default-libmysqlclient-dev libxml2-dev libxslt-dev libssl-dev libzip-dev \
    && docker-php-ext-install bcmath exif gd pdo_mysql soap sockets zip \
    && rm -rf /var/lib/apt/lists/*