#!/bin/bash
set -e

echo "⚙️ Setup Laravel Starter Core"

cp .env.example .env

composer install

php artisan key:generate

php artisan migrate --seed

npm install
npm run build

echo "✅ Installazione completata"
echo "Login admin:"
echo "email: admin@example.com"
echo "password: 12345678"