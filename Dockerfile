FROM ubuntu:20.04 as builder

FROM php:8.1.0

WORKDIR /app

COPY ./src .

RUN apt-get update -y && apt-get install -y openssl zip unzip git
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN composer install && php artisan key:generate
CMD php artisan serve --host=0.0.0.0 --port=8080

EXPOSE 8080
