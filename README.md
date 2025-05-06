# Web Shortcut Dashboard

## Local setup

- Needed tools:
    - PHP
    - Composer
    - Laravel
    - MySQL Server

### Running the application:
- Add your MySQL DB_PASSWORD to the [.env.example](.env.example)
- Install dependencies:
```bash
composer install
npm install
```
- Migrate and seed the database (only the first time!)
```bash
php artisan migrate
php artisan db:seed --class=PositionSeeder
```
- Run the application:
```bash
php -S 127.0.0.1:8000 -t public
```
