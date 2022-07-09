FROM php:7.4.0-fpm

ARG APP_ENV
ARG UID=1000
ARG GID=1000
USER root

RUN apt-get update 2>/dev/null | grep packages | cut -d '.' -f 1 && apt-get install -y libmcrypt-dev vim libfreetype6-dev libjpeg62-turbo-dev libpng-dev postgresql-client && apt clean
RUN apt-get install -y libpq-dev \
    && docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql \
    && docker-php-ext-install pdo pdo_pgsql pgsql
RUN docker-php-ext-configure gd --with-jpeg=/usr/include/ --with-freetype=/usr/include/

WORKDIR /var/www

