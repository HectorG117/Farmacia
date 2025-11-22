# ------------------------------
# PHP-FPM + Composer
# ------------------------------
FROM php:8.2-fpm

# Extensiones necesarias
RUN apt-get update && apt-get install -y \
    git zip unzip nginx \
    && docker-php-ext-install pdo pdo_mysql

# Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Archivos de la app
WORKDIR /var/www/html
COPY . .

# Instalar dependencias Laravel
RUN composer install --no-dev --optimize-autoloader

# Construir assets
RUN npm install && npm run build

# Permisos para almacenamiento
RUN chown -R www-data:www-data storage bootstrap/cache

# Copiar configuración Nginx
COPY deploy/nginx.conf /etc/nginx/sites-enabled/default

# Exponer puerto
EXPOSE 80

CMD service nginx start && php-fpm
