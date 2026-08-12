#!/bin/sh
set -e

echo "Iniciando aplicação Laravel..."

# Gera a APP_KEY se não existir (opcional, geralmente já vem via env do Render)
if [ -z "$APP_KEY" ]; then
    php artisan key:generate --force
fi

# Cacheia configs, rotas e views para produção
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Ajusta permissões (garante que www-data pode escrever em storage/cache)
chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

echo "Aplicação pronta. Subindo processos..."

# Executa o comando principal do container (passado como CMD/args)
exec "$@"