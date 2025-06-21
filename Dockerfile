FROM php:8.2-fpm

RUN apt-get update && apt-get install -y \
    git unzip curl zip libpng-dev libonig-dev libxml2-dev libzip-dev sqlite3 libsqlite3-dev

RUN docker-php-ext-install pdo pdo_mysql zip mbstring exif pcntl bcmath

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

COPY . /var/www
WORKDIR /var/www

RUN composer install && php artisan config:clear
RUN mkdir -p /var/www/database && touch /var/www/database/database.sqlite

EXPOSE 8080
CMD php artisan serve --host=0.0.0.0 --port=8080

