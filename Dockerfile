FROM php:8.2-fpm

WORKDIR /var/www

RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libjpeg-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    curl \
    git \
    libzip-dev \
    php-mysql \
    php-zip \
    php-mbstring \
    php-xml \
    php-curl \
    && docker-php-ext-install pdo_mysql mbstring zip exif pcntl bcmath

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

COPY . /var/www

RUN composer install --no-dev --optimize-autoloader

RUN php artisan storage:link || true

RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache

EXPOSE 8000

CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
