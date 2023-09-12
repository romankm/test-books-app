FROM php:8.2-fpm

RUN apt-get update -y && apt-get install -y \
    apt-utils \
    unzip \
    zip

RUN docker-php-ext-install pdo pdo_mysql

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/bin --filename=composer --quiet

# Permissions
RUN groupadd -g 1000 www
RUN useradd -u 1000 -ms /bin/bash -g www www

COPY --chown=www:www . /var/www

# Change current user to www
USER www

WORKDIR /var/www/books
