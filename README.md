# Shkolo Shortcut Dashboard

## Local setup

- Needed tools:
    - PHP
    - Composer
    - Laravel
    - MySQL Server

- Running the application:
```bash
php artisan migrate
php artisan db:seed --class=PositionSeeder
php -S 127.0.0.1:8000 -t public
```
