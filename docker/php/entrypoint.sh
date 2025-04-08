#!/bin/bash

cd /var/www/html

if [ ! -f artisan ]; then
    composer create-project laravel/laravel .
fi

echo "Installing Composer..."
composer install
php artisan key:generate

echo "Running migrations..."
php artisan migrate --force

echo "Installing Node..."
npm install
nohup npm run dev --prefix /var/www/html > /dev/null 2>&1 &

php-fpm
