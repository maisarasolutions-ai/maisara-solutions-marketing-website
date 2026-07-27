FROM php:8.3-fpm-alpine

RUN apk add --no-cache \
    postgresql-dev \
    libpng-dev \
    libjpeg-turbo-dev \
    libwebp-dev \
    freetype-dev \
    zip \
    unzip \
    git \
    curl \
    nodejs \
    npm \
    rsync \
    fcgi

RUN docker-php-ext-configure gd --with-freetype --with-jpeg --with-webp \
    && docker-php-ext-install pdo_pgsql gd opcache \
    && docker-php-ext-enable opcache

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

ENV COMPOSER_ALLOW_SUPERUSER=1
ENV COMPOSER_SECURITY_ADVISORIES_BLOCK=false

WORKDIR /var/www/html

COPY . .

RUN git config --global --add safe.directory /var/www/html \
    && mkdir -p /var/www/html/storage/framework/{views,cache,sessions} /var/www/html/bootstrap/cache \
    && chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache \
    && composer install --no-dev --optimize-autoloader --no-interaction --no-security-blocking

RUN npm install && npm run build

RUN mv public /tmp/public-assets && mkdir public

RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache /tmp/public-assets

COPY docker-entrypoint.sh /usr/local/bin/

RUN chmod +x /usr/local/bin/docker-entrypoint.sh

COPY docker/php/php.ini /usr/local/etc/php/conf.d/zz-custom.ini

EXPOSE 9000

ENTRYPOINT ["docker-entrypoint.sh"]

CMD ["php-fpm"]
