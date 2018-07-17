# Vanilla PHP Command Line Project
[![FOSSA Status](https://app.fossa.io/api/projects/git%2Bgithub.com%2Felliotjreed%2Fphp-cli-boilerplate.svg?type=shield)](https://app.fossa.io/projects/git%2Bgithub.com%2Felliotjreed%2Fphp-cli-boilerplate?ref=badge_shield)


This repository shows a basic setup for a command line application in PHP.


## Getting Started

PHP 7 or above and Composer is expected to be installed on our system.

### Installing Composer

For instructions on how to install Composer visit https://getcomposer.org/download/

### Installing

After cloning this repository, change into the newly created directory and run

```
composer install
```

This will install all dependencies needed for the project.


## Running the Tests

All tests can be run by executing

```
vendor/phpunit/phpunit/phpunit
```

`phpunit` will automatically find all tests inside the `tests` directory and run them based on the configuration in the `phpunit.xml` file.


### Testing Approach

The test for class `Greeting` is only verifying the return value of one method.


## Running the Application

To run the application execute `bin/hello.php` or `php bin/hello.php`.
You should see the text "Hello" being printed.

```
$: bin/hello.php
Hello
```


## Built With

- [PHP](https://secure.php.net/)
- [Composer](https://getcomposer.org/)
- [PHPUnit](https://phpunit.de/)


## License

This project is licensed under the MIT License - see the [LICENCE.md](LICENCE.md) file for details.


[![FOSSA Status](https://app.fossa.io/api/projects/git%2Bgithub.com%2Felliotjreed%2Fphp-cli-boilerplate.svg?type=large)](https://app.fossa.io/projects/git%2Bgithub.com%2Felliotjreed%2Fphp-cli-boilerplate?ref=badge_large)