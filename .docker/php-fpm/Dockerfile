FROM php:8.0-fpm

RUN apt-get update \
    && apt-get upgrade -yq \
    && apt-get install -yq apt-utils \
    && apt-get install -yq librabbitmq4 librabbitmq-dev \
    && apt-get install -yq git \
    && apt-get install -yq supervisor vim \
    && pecl install -o -f redis \
    && pecl install amqp-1.11.0 \
    && docker-php-ext-enable amqp \
    && docker-php-ext-install pdo \
    && docker-php-ext-install pdo_mysql

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
