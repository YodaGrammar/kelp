# Multistage
FROM composer


# Image Base
FROM php:7.2-fpm-alpine

COPY --from=composer /usr/bin/composer /usr/local/bin/composer

RUN apk add --no-cache ca-certificates icu-libs git unzip make && \
    apk add --no-cache --virtual .build-deps $PHPIZE_DEPS icu-dev && \
    # Extension PHP
    pecl install apcu && \
    docker-php-ext-install intl pdo_mysql && \
    docker-php-ext-enable apcu opcache && \
    # php.ini
    echo "short_open_tag = off" >> /usr/local/etc/php/php.ini && \
    echo "date.timezone = Europe/Paris" >> /usr/local/etc/php/conf.d/symfony.ini && \
    echo "opcache.max_accelerated_files = 20000" >> /usr/local/etc/php/conf.d/symfony.ini && \
    echo "realpath_cache_size=4096K" >> /usr/local/etc/php/conf.d/symfony.ini && \
    echo "realpath_cache_ttl=600" >> /usr/local/etc/php/conf.d/symfony.ini && \
    # Clear
    apk del .build-deps && \
    # User
    addgroup -g 1000 php && \
    adduser -u 1000 -G php -s /bin/sh -D php
