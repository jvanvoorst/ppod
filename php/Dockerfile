FROM php:7.0-fpm

COPY ./php.ini /usr/local/etc/php/php.ini

RUN docker-php-ext-install pdo_mysql

RUN docker-php-ext-onstall mysqli
