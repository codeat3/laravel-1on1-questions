# Very short description of the package

[![Latest Version on Packagist](https://img.shields.io/packagist/v/codeat3/laravel-1on1-questions.svg?style=flat-square)](https://packagist.org/packages/codeat3/laravel-1on1-questions)
[![Build Status](https://img.shields.io/travis/codeat3/laravel-1on1-questions/master.svg?style=flat-square)](https://travis-ci.org/codeat3/laravel-1on1-questions)
[![Quality Score](https://img.shields.io/scrutinizer/g/codeat3/laravel-1on1-questions.svg?style=flat-square)](https://scrutinizer-ci.com/g/codeat3/laravel-1on1-questions)
[![Total Downloads](https://img.shields.io/packagist/dt/codeat3/laravel-1on1-questions.svg?style=flat-square)](https://packagist.org/packages/codeat3/laravel-1on1-questions)

This is where your description should go. Try and limit it to a paragraph or two, and maybe throw in a mention of what PSRs you support to avoid any confusion with users and contributors.

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