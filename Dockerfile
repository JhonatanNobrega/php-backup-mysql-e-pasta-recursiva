FROM php:7.4.24-apache

RUN apt-get update && \
  apt-get install -y \
  libzip-dev \
  && docker-php-ext-install zip \
  && docker-php-ext-install mysqli \ 
  && docker-php-ext-install pdo \ 
  && docker-php-ext-install pdo_mysql

COPY www/ /var/www/html