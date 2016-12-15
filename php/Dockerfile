FROM php:7.0-fpm

# COPY ./php.ini /usr/local/etc/php/php.ini

RUN docker-php-ext-install pdo_mysql

RUN pear install Mail-1.3.0 Net_SMTP