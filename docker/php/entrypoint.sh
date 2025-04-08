#!/bin/bash

cd /var/www/html

if [ ! -f artisan ]; then
    composer create-project laravel/laravel .
fi

composer install
php artisan key:generate
php artisan migrate

npm install
nohup npm run dev --prefix /var/www/html > /dev/null 2>&1 &

php-fpm
