FROM php:8.3-cli-alpine

RUN apk add --no-cache \
        autoconf \
        build-base \
        icu-dev \
        linux-headers \
        libzip-dev \
        git
RUN docker-php-ext-install \
      intl \
      zip
RUN pecl install xdebug-3.3.2
RUN docker-php-ext-enable \
    xdebug \
    zip
ADD .runtime/shared_files/usr/local/bin/composer /usr/local/bin/composer
ADD .runtime/shared_files/usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini
