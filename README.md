# In2it Promo Coffee Cups

This repo was build to generate the code we used on the cups for [PHPBenelux Conference 2020](https://conference.phpbenelux.eu/) as a way to promote the work we do.

[![Build Status](https://travis-ci.org/in2it/promo-coffee-cup.svg?branch=master)](https://travis-ci.org/in2it/promo-coffee-cup)

**INFO:** This promotion requires PHP 7.3 or higher.

## Components used in this repository

- [Squizlabs PHP CodeSniffer](https://github.com/squizlabs/PHP_CodeSniffer): We want to ensure our code adheres to the [PSR-2](https://www.php-fig.org/psr/psr-2/) Coding Standards as recommended by the [PHP-FIG](https://www.php-fig.org/).
- [PHPUnit](https://www.phpunit.de/): Everything is test-driven developed to ensure we have the correct use cases.
- [Infection](https://infection.github.io/): A mutation testing framework for PHP to improve our tests and code
- [Vimeo Psalm](https://psalm.dev/): A static analysis tool that’s designed to improve large PHP codebases by identifying both obvious and hard-to-spot bugs.
- [PHPStan](https://github.com/phpstan/phpstan): Another static analysis tool to discover bugs in the code.

## Installation

### 1. Clone the repository

```bash
cd /path/to/workspace/
git clone https://github.com/in2it/promo-coffee-cup.git
cd promo-coffee-cup/
```

### 2. Install all quality tools with composer

If you haven't installed [composer](https://getcomposer.org), please look at the [installation instructions](https://getcomposer.org/doc/00-intro.md) first.

**WARNING: DO NOT INSTALL THESE DEVELOPER TOOLS ON A PRODUCTION SYSTEM!!!** 

```bash
composer install
```

### 3. Run the quality tools

You can run all of them at once using composer:

```bash
composer test
```

You can run each quality tool individual:

```bash
./vendor/bin/phpcs
./vendor/bin/phpunit
./vendor/bin/infection --configuration=infection.json --min-covered-msi=85
./vendor/bin/psalm 
./vendor/bin/phpstan analyse src --level 3
```

**INFO:** We have pretty high settings for quality which might break some changes on your end.

## License

We provide this code as-is under a MIT license. Please see [LICENCE](LICENSE.md) for details.

## Contributions and improvements

Before you participate in this project, please read our [Code of Conduct](CODE_OF_CONDUCT.md). In this document we explain how we want to build an inclusive and safe environment for everyone where we treat failures as a learning moment and applaud the input from everyone.

Also read our [Contributors Manifest](CONTRIBUTING.md) as it contains advice how to ensure we have all details regarding the isuse you're facting or the improvement you recommend.

## Enjoy

We had fun creating this little piece of code as a way to advertise what we do and maybe you also find it useful. If you're also using this code, please let us know at [hello@in2it.be](mailto:hello@in2it.be).

