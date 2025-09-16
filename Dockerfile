# Use PHP with Apache
FROM php:8.1-apache

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Copy project files into container
COPY CRUD/ /var/www/html/


# Set working directory
WORKDIR /var/www/html

# Install composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Install dependencies from composer.json
RUN composer install

# Expose port 80
EXPOSE 80

CMD ["apache2-foreground"]
