FROM php:8-apache

RUN apt-get update && apt-get install -y \
        libicu-dev \
    && docker-php-ext-install \
        intl \
    && docker-php-ext-install \
        pdo_mysql \
    && docker-php-ext-enable \
        intl