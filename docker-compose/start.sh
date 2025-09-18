#!/bin/bash

# Tunggu database siap
echo "Waiting for MySQL to start..."
while ! nc -z car-wash-booking-db 3306; do
  sleep 0.5
  echo "Still waiting..."
done
echo "MySQL started"

# Debug - cek koneksi database
echo "Testing database connection..."
mysql -h car-wash-booking-db -u${DB_USERNAME} -p${DB_PASSWORD} -e "SELECT 1" ${DB_DATABASE}

# Run migrations and seed the database
cd /var/www
php artisan config:clear
php artisan cache:clear
php artisan migrate:fresh --seed --force

# Debug output untuk troubleshooting
echo "Laravel application ready. Starting PHP-FPM..."

# Start PHP-FPM
exec php-fpm
