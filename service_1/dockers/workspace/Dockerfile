FROM php:7.4-fpm

RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"

RUN usermod -u 1001 www-data && groupmod -g 1003 www-data
