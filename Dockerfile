# Use PHP 8.2 with Apache
FROM php:8.2-apache

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Install PDO MySQL extension
RUN docker-php-ext-install pdo pdo_mysql

# Set working directory
WORKDIR /var/www/html

# Copy your project files
COPY ./CRUD/LavaLust/ /var/www/html/

# Copy composer files and install dependencies
COPY composer.json composer.lock /var/www/html/
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
    && php composer-setup.php --install-dir=/usr/local/bin --filename=composer \
    && php -r "unlink('composer-setup.php');" \
    && composer install

# Expose Apache port
EXPOSE 80
