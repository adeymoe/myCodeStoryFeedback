# Use an official PHP image with Apache
FROM php:8.2-apache

# Install required PHP extensions
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Set the working directory inside the container
WORKDIR /var/www/html

# Copy your project files into the container
COPY . /var/www/html

# Grant write permissions to the necessary directories (optional)
RUN chmod -R 755 /var/www/html

# Expose port 80 for the web server
EXPOSE 80
