# PHP Command Line Boilerplate / Example Project

This repository shows a basic setup for a PHP package or application in PHP.

## Getting Started

PHP 8.1 or above and Composer is expected to be installed on our system.

### Installing Composer

For instructions on how to install Composer visit [getcomposer.org](https://getcomposer.org/download/).

### Installing

After cloning this repository, change into the newly created directory and run

```bash
composer install
```

or if you have installed Composer locally in your current directory

```bash
php composer.phar install
```

This will install all dependencies needed for the project.

## Running the Tests

All tests can be run by executing

```bash
vendor/bin/phpunit
```

`phpunit` will automatically find all tests inside the `test` directory and run them based on the configuration in the `phpunit.xml` file.

### Testing Approach

The test for the class `Greeting` verifies that the return value of the `sayHello` method returns the string "Hello {name}", where {name} is the value passed through to the constructor.

## Running the Application

To run the application execute `bin/hello.php` or `php bin/hello.php`.

You should see the text "Hello" being printed.

```bash
bin/hello.php
```

## Built With

  - [PHP](https://secure.php.net/)
  - [Composer](https://getcomposer.org/)
  - [PHPUnit](https://phpunit.de/)

## License

This project is licensed under the MIT License - see the [LICENCE.md](LICENCE.md) file for details.

