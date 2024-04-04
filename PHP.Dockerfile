FROM php:fpm


# Install PHP extensions
RUN docker-php-ext-install pdo pdo_mysql
RUN apt-get update -y && apt-get install -y zlib1g-dev libpng-dev libfreetype6-dev
RUN docker-php-ext-configure gd --enable-gd --with-freetype
RUN docker-php-ext-install gd

# Install system dependencies for Composer and zip extension
RUN apt-get update && \
    apt-get install -y git unzip libzip-dev && \
    docker-php-ext-install zip && \
    rm -rf /var/lib/apt/lists/*

# Copy Composer binary from the official Composer image
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# RUN pecl install xdebug && docker-php-ext-enable xdebug