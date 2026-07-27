FROM php:8.3-fpm-alpine

RUN apk add --no-cache \
    postgresql-dev \
    libpng-dev \
    libjpeg-turbo-dev \
    libwebp-dev \
    freetype-dev \
    libxml2-dev \
    zip \
    unzip \
    git \
    curl \
    nodejs \
    npm \
    rsync \
    fcgi

RUN docker-php-ext-configure gd --with-freetype --with-jpeg --with-webp \
    && docker-php-ext-install pdo pdo_pgsql gd opcache mbstring xml dom

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

COPY . .

RUN composer install --no-dev --optimize-autoloader --no-interaction

RUN npm install && npm run build

RUN mv public /tmp/public-assets && mkdir public

RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache /tmp/public-assets

COPY docker-entrypoint.sh /usr/local/bin/

RUN chmod +x /usr/local/bin/docker-entrypoint.sh

COPY docker/php/php.ini /usr/local/etc/php/conf.d/zz-custom.ini

EXPOSE 9000

ENTRYPOINT ["docker-entrypoint.sh"]

CMD ["php-fpm"]
