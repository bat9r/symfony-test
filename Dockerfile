FROM php:8.1.16-cli

COPY . /app

RUN apt update \
    && apt install -y zlib1g-dev g++ git libicu-dev libmcrypt-dev libonig-dev zip libzip-dev zip \
    && docker-php-ext-install intl opcache pdo pdo_mysql mbstring \
    && pecl install apcu \
    && docker-php-ext-enable apcu \
    && docker-php-ext-configure zip \
    && docker-php-ext-install zip

WORKDIR /app

CMD [ "php", "-S", "0.0.0.0:8000", "-t", "public/" ]
