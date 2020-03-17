# A laravel package wrapper of '1on1-questions' by 'VGraupera'

[![Latest Version on Packagist](https://img.shields.io/packagist/v/codeat3/laravel-1on1-questions.svg?style=flat-square)](https://packagist.org/packages/codeat3/laravel-1on1-questions)
[![Build Status](https://img.shields.io/travis/codeat3/laravel-1on1-questions/master.svg?style=flat-square)](https://travis-ci.org/codeat3/laravel-1on1-questions)
[![Quality Score](https://img.shields.io/scrutinizer/g/codeat3/laravel-1on1-questions.svg?style=flat-square)](https://scrutinizer-ci.com/g/codeat3/laravel-1on1-questions)
[![Total Downloads](https://img.shields.io/packagist/dt/codeat3/laravel-1on1-questions.svg?style=flat-square)](https://packagist.org/packages/codeat3/laravel-1on1-questions)

A laravel wrapper package to access the questions and categories from '1on1-questions' repositories by 'VGraupera'.

## Installation

You can install the package via composer:

```bash
composer require codeat3/laravel-1on1-questions
```

## Usage

``` php
    // to get the list of categories
    \Laravel1on1Questions::categories();

    // to get the random question
    \Laravel1on1Questions::random();

    // to get ths list of questions
    \Laravel1on1Questions::get();

    // to get ths list of questions from particular category
    $category = 'Job satisfaction';
    \Laravel1on1Questions::get($category);

    // to get the random question from particular category
    $category = 'About Manager';
    \Laravel1on1Questions::random($category);
```

### Testing

``` bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email swapnilsarwe@gmail.com instead of using the issue tracker.

## Credits

- [Swapnil Sarwe](https://github.com/codeat3)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Laravel Package Boilerplate

This package was generated using the [Laravel Package Boilerplate](https://laravelpackageboilerplate.com).