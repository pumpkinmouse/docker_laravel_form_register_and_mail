FROM php:7.4.1-fpm
COPY ./docker/app/php.ini /usr/local/etc/app/php.ini

COPY --from=composer:2.0 /usr/bin/composer /usr/bin/composer

COPY ./docker/app/msmtprc /etc/msmtprc

ENV DEBIAN_FRONTEND noninteractive

RUN apt-get update \
    && apt-get install -y \
    msmtp \
    msmtp-mta \
    && apt-get install -y \
    git \
    zip \
    unzip \
    vim \
    && docker-php-ext-install pdo_mysql bcmath

WORKDIR /var/www/html