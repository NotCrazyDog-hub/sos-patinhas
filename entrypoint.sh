#!/bin/sh
set -e

PORT="${PORT:-80}"
sed -i "s/Listen 80/Listen ${PORT}/" /etc/apache2/ports.conf
sed -i "s/:80>/:${PORT}>/" /etc/apache2/sites-available/000-default.conf

# Garante que o sqlite existe, mesmo sem uso real
mkdir -p database
touch database/database.sqlite

composer dump-autoload --optimize
php artisan package:discover --ansi

php artisan config:clear
php artisan config:cache
php artisan route:cache
php artisan view:cache

exec apache2-foreground