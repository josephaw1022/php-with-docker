FROM php:8.2.7-apache
WORKDIR /var/www/html

COPY /src/ /var/www/html/
EXPOSE 80


