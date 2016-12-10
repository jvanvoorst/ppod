FROM php:7.0-fpm

# COPY ./php.ini /usr/local/etc/php/php.ini

# RUN docker-php-source extract \
#	docker-php-ext-install pdo pdo_mysql \
#	&& docker-php-source delete

RUN docker-php-ext-install pdo_mysql

RUN pear install Mail