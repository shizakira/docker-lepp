FROM php:8.2-fpm

WORKDIR /var/www

ARG WWW_ROOT_DIR

COPY ${WWW_ROOT_DIR} /var/www

RUN apt-get update && apt-get install -y \
        libpq-dev \
        && docker-php-ext-install pdo pdo_pgsql

CMD ["php-fpm"]