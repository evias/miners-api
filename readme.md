# Miners Dashboard

[![License](https://poser.pugx.org/laravel/lumen-framework/license.svg)](https://packagist.org/packages/laravel/lumen-framework)

The Miners Dashboard aims to provide an easy-to-use Mining Dashboard for people managing
a lot of Miners, potentially mining on multiple Blockchain Protocols.

The first implementation drafts will work with the [XZC - ZCoin](http://zcoin.finance) Blockchain Protocol
which I have used for mining for quite a time now. This project is nor as a contribution to the ZCoin Project
nor is it for means of Advertising the coin. I have decided to start this implementation with the XZC coin
simply because it's the Blockchain Protocol I have mostly used for mining.

The main idea behind this project is to provide a way to manage Multi Blockchain Mining Farms easily with
a User Friendly Dashboard Web Application.

The application is based on the Lumen Framework. Documentation for the framework can be found on
the [Lumen website](http://lumen.laravel.com/docs).

## Dependencies / Required Packages

The PHP 7.0 version has been used for development of this project. Most of the features of the package
should be backwards compatible down to PHP 5.3.

    - php7.0
    - php7.0-zip
    - php7.0-memcached

## Installation / Run Instructions

You can deploy this package directly to a Heroku dyno configured with heroku/php buildpack. (Or directly
linked to your github fork of this repository)

You can also serve the application locally using :

    $ php -S localhost:8888 -t public

And you can serve it publicly by replacing "localhost" with "0.0.0.0" and opening the port in your firewall.

## Security Vulnerabilities

If you discover a security vulnerability within this package, please report an Issue to the Github Repository.
All security vulnerabilities will be promptly addressed.

## License

The Miners Dashboard package is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
