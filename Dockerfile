FROM php:7.2-apache

COPY /config/php.ini /usr/local/etc/php/

COPY . /var/www/html/

RUN a2enmod rewrite