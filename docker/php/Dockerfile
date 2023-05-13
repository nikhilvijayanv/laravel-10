FROM php:8.2.4-fpm

WORKDIR /var/www

COPY --from=composer:2.5.5 /usr/bin/composer /usr/local/bin/composer

RUN ln -s /var/www/artisan /usr/local/bin/artisan

# RUN apt-get update \
#     && apt-get install -y libzip-dev zip \
#     && docker-php-ext-install zip \
#     && docker-php-ext-install pdo_mysql mbstring iconv intl \
#     && rm -rf /var/lib/apt/lists/*