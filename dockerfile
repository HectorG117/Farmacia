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

WORKDIR /var/www/html

# Copiar proyecto
COPY . .

# Instalar dependencias PHP
RUN composer install --no-dev --optimize-autoloader

# Construir el frontend de producción
RUN npm ci
RUN npm run build

# Dar permisos
RUN chown -R www-data:www-data storage bootstrap/cache

# Copiar configuración Nginx
COPY deploy/nginx.conf /etc/nginx/conf.d/default.conf

# Render necesita que PHP-FPM escuche en 9000
RUN sed -i 's|listen = /run/php/php8.2-fpm.sock|listen = 9000|' /usr/local/etc/php-fpm.d/zz-docker.conf

EXPOSE 80

CMD service php-fpm start && nginx -g "daemon off;"

