## Dependencies
php
mysql
composer
laravel

## Running
Step 0: Create sample database
`mysql -uroot -p`
>>> CREATE DATABASE `covid19`;

Step 1: Migrate dummy database data
`php artisan migrate:fresh`

Step 2: Serve Application
`php artisan serve`
