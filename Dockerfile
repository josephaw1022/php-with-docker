FROM php:8.2.7-apache
WORKDIR /var/www/html

COPY src .
EXPOSE 80


