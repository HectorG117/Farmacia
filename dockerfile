FROM php:8.2-fpm

# Instalar extensiones necesarias
RUN apt-get update && apt-get install -y \
    nginx \
    unzip zip git curl libzip-dev libpng-dev libonig-dev libxml2-dev \
    && docker-php-ext-install pdo pdo_mysql zip

# Instalar Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# Copiar aplicación Laravel
COPY . .

# Instalar dependencias PHP
RUN composer install --no-dev --optimize-autoloader

# Construir frontend
RUN curl -fsSL https://deb.nodesource.com/setup_20.x | bash - \
    && apt-get install -y nodejs \
    && npm install \
    && npm run build

# Copiar config de Nginx
COPY deploy/nginx.conf /etc/nginx/conf.d/default.conf

# Permisos
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

EXPOSE 80

# Ejecutar PHP-FPM y Nginx juntos
CMD php-fpm -F & nginx -g "daemon off;"

