#!/bin/bash
set -e

echo "⚙️ Setup Laravel Starter Core"

cp .env.example .env || true

composer install --prefer-dist --no-progress --no-interaction

php artisan key:generate

php artisan migrate --seed

if [ ! -d "node_modules" ]; then
  echo "📦 Installing Node dependencies..."
  npm install
fi

npm run build

echo "✅ Installazione completata"
echo "Login admin:"
echo "email: admin@example.com"
echo "password: 12345678"