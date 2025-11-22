FROM php:8.2-fpm

# Instalar dependencias del sistema
RUN apt-get update && apt-get install -y \
    git zip unzip curl nginx \
    && docker-php-ext-install pdo pdo_mysql

# Instalar Node.js 20 y NPM
RUN curl -fsSL https://deb.nodesource.com/setup_20.x | bash - \
    && apt-get install -y nodejs

# Copiar Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Setear directorio
WORKDIR /var/www/html

# Copiar proyecto
COPY . .

# Instalar dependencias PHP
RUN composer install --no-dev --optimize-autoloader

# Instalar dependencias JS y construir frontend
RUN npm install
RUN npm run build

# Permisos para Laravel
RUN chown -R www-data:www-data storage bootstrap/cache

# Copiar configuración de Nginx
COPY deploy/nginx.conf /etc/nginx/conf.d/default.conf

EXPOSE 80

# Iniciar PHP-FPM y Nginx
CMD php-fpm & nginx -g "daemon off;"
