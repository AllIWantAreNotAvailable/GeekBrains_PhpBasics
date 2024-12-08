FROM php:8.2-fpm

RUN pecl install -o -f xdebug \
    && docker-php-ext-enable xdebug
