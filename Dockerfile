# Use PHP with Apache
FROM php:8.1-apache

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Install git and unzip (needed by Composer)
RUN apt-get update && apt-get install -y git unzip

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www/html

# Copy project files into container (only the CRUD folder)
COPY CRUD/ /var/www/html/

# Copy composer.json and composer.lock into container
COPY composer.json composer.lock /var/www/html/

# Install dependencies
RUN composer install

# Expose port 80
EXPOSE 80

CMD ["apache2-foreground"]
