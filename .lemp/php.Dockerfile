FROM php:fpm-alpine3.12

WORKDIR /var/www/html

COPY php.ini /usr/local/etc/php/conf.d/php.ini

RUN echo Local Server boot up with && php -v && php -m && echo Stay Hungry and Stay Foolish