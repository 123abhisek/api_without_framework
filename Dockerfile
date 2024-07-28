# Use an official PHP runtime as a parent image
FROM php:8.2-apache

# Install required PHP extensions
RUN docker-php-ext-install pdo pdo_mysql

# Set the working directory
WORKDIR /var/www/html

# Copy the current directory contents into the container at /var/www/html
COPY . /var/www/html

# Ensure Apache serves the application from the web directory
RUN chown -R www-data:www-data /var/www/html
RUN a2enmod rewrite

# Expose port 80 for the application
EXPOSE 80

# Cleanup
RUN apt-get clean && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*
