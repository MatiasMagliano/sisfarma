# SISFARMA
Drugstore management system and medical supplies

## Motivations
Initially started as a final year field project for a Systems Analyst (available <a href="https://github.com/MatiasMagliano/sitio-dlc-laravel">here</a>) I decided to refine the project, maintaining the architecture, the bases of analysis and capture of requirements of this particular business.


<p align="center">
    <img alt="Static Badge" src="https://img.shields.io/badge/status%20-%20developing%20-%20status">
    <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
    <img alt="Static Badge" src="https://img.shields.io/badge/license%20-%20no%20license%20-%20red">
</p>
<p align="center">
    Laravel
</p>
<p align="center">
    <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Getting Started
Clone or download the project.

### Prerequisites
* PHP ^8.2 | ^8.1
* MariaDB ^15.1 or MySQL
* COMPOSER ^2.6.5

## Installation
* Go to the folder application using cd command on your cmd or terminal
* Run ```composer install``` on your cmd or terminal
* Copy and rename the .env.example file to .env on the root folder
* Open your .env file and change the database name (DB_DATABASE), username (DB_USERNAME) and password (DB_PASSWORD) field correspond to your configuration.
* Run ```php artisan key:generate```
* Run ```php artisan migrate --seed```

## Contributing

Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

# About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

Sisfarma has no yet a license of any kind.
