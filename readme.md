-<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>
## Laravel Example Application

This is a sample laravel application which gives an idea on how to write services separate from the controller


## Prerequisites
* XAMPP
* Composer
* Laravel

## Setting up Project

- Create `.env` file and fill the details using `.env.example`. Make sure to provide your Database credentials in the `.env` file including the DB name
- Open terminal and run the following commands

```
    $   composer install
    $   php artisan key:generate
    $   php artisan migrate   
    $   php artisan serve
```