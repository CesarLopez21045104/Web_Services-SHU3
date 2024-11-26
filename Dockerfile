FROM php:8.1-fpm

# Instalar extensiones necesarias para PHP
RUN docker-php-ext-install mysqli pdo pdo_mysql

WORKDIR /var/www/html

# Copiar el contenido del proyecto
COPY . /var/www/html
