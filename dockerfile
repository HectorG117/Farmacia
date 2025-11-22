# --------------------------
# Etapa 1: Construir dependencias PHP + Composer
# --------------------------
FROM php:8.2-fpm AS php-build

RUN apt-get update && apt-get install -y \
    unzip zip git curl libzip-dev libpng-dev libonig-dev libxml2-dev \
    && docker-php-ext-install pdo pdo_mysql zip

# Instalar Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /app
COPY . .

# Instalar dependencias de Laravel
RUN composer install --no-dev --optimize-autoloader

# --------------------------
# Etapa 2: Construir frontend con Vite
# --------------------------
FROM node:20 AS node-build
WORKDIR /app

COPY . .
RUN npm install
RUN npm run build

# --------------------------
# Etapa 3: Servidor final (Nginx + PHP-FPM)
# --------------------------
FROM nginx:stable

# Copiar archivos frontend compilados
COPY --from=node-build /app/public /var/www/html/public
# Copiar Laravel + vendor
COPY --from=php-build /app /var/www/html

# Configurar Nginx
COPY ./deploy/nginx.conf /etc/nginx/conf.d/default.conf

EXPOSE 80
CMD ["nginx", "-g", "daemon off;"]
