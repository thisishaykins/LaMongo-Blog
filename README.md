# LaMongo Blog

LaMongo Blog is basic CRUD Laravel and MongoDB Blog App to deploy a Laravel Application with MongoDB as Database

## Setup App.
- Clone or Pull the repo.
- <code>cd lamongo-blog</code> into the directory
- Run: <code>php artisan key:generate</code> to generate the app key.
- Run: <code>composer install</code> to install all the dependencies.
- Run: <code>php artisan migrate</code> to run migration of every collections(tables in sql).
- Start app with: <code>php artisan serve</code>. Confirm the mongodb parameters in the <code>.env</code> OR <code>.env.example</code> 
- Start mongodb with: <code>mongo</code> or <code>mongod</code>.
- Run the application with: <code>php artisan serve .</code>. In your browser, go to [http://localhost:8000/](http://localhost:8000/). and visit the [http://localhost:8000/blog](http://localhost:8000/blog)
- 


## About Laravel

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

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.


## Contributing

Thank you for considering contributing to the Basic Laravel + MongoDB App! There are no contribution guide at the moment.

## Security Vulnerabilities

If you discover a security vulnerability within the Laravel+MongoDB App, please send an e-mail to Akinshola Samuel via [thisishaykins@gmail.com](mailto:thisishaykins@gmail.com). All security vulnerabilities will be promptly addressed.

## License

The App is yet to be licensed under any body.