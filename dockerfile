# Dockerfile final para Laravel + Nginx + PHP-FPM + Node (Vite/Tailwind)
FROM php:8.2-fpm

# ---- Dependencias del sistema ----
RUN apt-get update && DEBIAN_FRONTEND=noninteractive apt-get install -y \
    git zip unzip curl nginx ca-certificates gnupg2 \
    libzip-dev libpng-dev libonig-dev libxml2-dev \
    && docker-php-ext-install pdo pdo_mysql zip

# ---- Instalar Node.js 20 (en la misma etapa) ----
RUN curl -fsSL https://deb.nodesource.com/setup_20.x | bash - \
    && apt-get install -y nodejs

# ---- Composer ----
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# ---- Directorio de trabajo ----
WORKDIR /var/www/html

# ---- Copiar proyecto al contenedor ----
COPY . .

# ---- Eliminar config nginx default (evita conflictos) ----
RUN rm -f /etc/nginx/sites-enabled/default /etc/nginx/sites-available/default || true

# ---- Instalar dependencias PHP ----
RUN composer install --no-dev --optimize-autoloader --no-interaction --no-ansi

# ---- Instalar dependencias JS y compilar assets ----
RUN npm install --legacy-peer-deps
RUN npm run build

# ---- Crear /run/php para seguridad (si hace falta) ----
RUN mkdir -p /run/php

# ---- Permisos ----
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache
RUN chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# ---- Copiar configuración Nginx (se sobreescribirá en /etc/nginx/conf.d/default.conf) ----
COPY deploy/nginx.conf /etc/nginx/conf.d/default.conf

# ---- Exponer puerto ----
EXPOSE 80

# ---- Comando final: ejecutar php-fpm en foreground y nginx ----
# php-fpm en foreground garantiza que cree el listener TCP en 9000.
CMD ["sh", "-lc", "php-fpm -F & nginx -g 'daemon off;'"]

