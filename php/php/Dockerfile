FROM php:8.2-fpm

# Instala extensões do PHP
RUN docker-php-ext-install pdo_mysql mysqli

# Instala o Composer (opcional)
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Define o diretório de trabalho
WORKDIR /var/www/html