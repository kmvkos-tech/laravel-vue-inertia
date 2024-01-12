# A Full Stack SPA with Laravel 10 + Vue + Inertia

A nice scaffold project to start with!

## Features:
Authentication

Table with search and pagination

## Installation 

Clone the repo locally:

```sh
  git clone https://github.com/kmvkos-tech/laravel-vue-inertia.git myApp
  cd myApp  
```

Install PHP dependencies:

```sh
composer install
```

Install NPM dependencies:

```sh
npm ci
```
Setup configuration:

```sh
cp .env.example .env
```

Generate application key:

```sh
php artisan key:generate
```

Create an SQLite database. You can also use another database (MySQL, Postgres), simply update your configuration accordingly.

```sh
touch database/database.sqlite
```
Run database migrations:

```sh
  php artisan migrate:refresh --seed
``` 

Start the development server:

```sh
  npm run dev
 ``` 

 Browse to:

 ```sh
 http://127.0.0.1:8000/
 ```
