FROM php:8.3-fpm-alpine3.19
RUN docker-php-ext-install pdo_mysql