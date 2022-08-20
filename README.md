## Description

Create an application where the admin can create a task and assign it to any non-admin user. The Statistics
table should hold the number of tasks assigned to each user.

## Installation
To avoid compatibility issues please use php 8.1
- `git clone`
- `composer install`
- set database credentials in your application's .env
- set the QUEUE_CONNECTION=database in your application's .env
- `php artisan migrate`
- `php artisan db:seed`
