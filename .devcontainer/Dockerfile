# .devcontainer/Dockerfile
FROM mcr.microsoft.com/devcontainers/php:8.4

RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libzip-dev \
    zip \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) \
        gd \
        zip \
        pdo_mysql \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*
