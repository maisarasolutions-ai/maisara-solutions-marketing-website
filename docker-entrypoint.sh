#!/bin/sh
set -e

rsync -a --delete /tmp/public-assets/ /var/www/html/public/

chown -R www-data:www-data /var/www/html/public

exec php-fpm
