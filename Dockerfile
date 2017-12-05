FROM php:latest
RUN mkdir /var/www
COPY ./ /var/www/
WORKDIR /var/www

