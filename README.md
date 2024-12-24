## composer install link than install

```
https://getcomposer.org/download/

```

## creat project command for composer

```
composer create-project laravel/laravel Example-app

```
## easy way
```
composer create-project laravel/laravel:^10.0 example-app

```
## project delete command

```
rm -fr exampl-app
```

## laravel installer command

```
composer global require laravel/installer
```

## creat project command for  global require laravel
```
laravel new example-app
cd exampl-app

```


## laravel run

```
php artisan serve

```
## new branch create

```
git checkout -b template
git push --set-upstream origin template
```
## All route show command

```
php artisan route:list
```
## blade file create command

```
php artisan make:view hello

```
## Folder with blade file command

```
php artisan make:view task.allTask
php artisan make:view site.index
```

# How to Install Laravel Breeze in Laravel 11

## Installation

```
composer create-project laravel/laravel middlewardemo

cd middlewardemo

composer require laravel/breeze --dev
-for Blade
php artisan breeze:install blade 
-for vue run
php artisan breeze:install vue

-For React run
php artisan breeze:install react

-For custom API run

php artisan breeze:install api

php artisan migrate
 -optional
npm install
 -optional
npm run dev

php artisan serve

``

