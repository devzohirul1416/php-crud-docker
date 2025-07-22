# Use the official PHP image with FPM
FROM php:8.2-fpm

# Install necessary PHP extensions
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copy project files
WORKDIR /var/www/html
COPY src/ /var/www/html/
