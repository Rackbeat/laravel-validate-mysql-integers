# Validation Rule to ensure a value is within valid Mysql Integer ranges.

Works for signed and unsigned integers of type: TinyInt, SmallInt, Int, BigInt.


<p align="center"> 
<a href="https://travis-ci.org/Rackbeat/laravel-validate-mysql-integers"><img src="https://img.shields.io/travis/Rackbeat/laravel-validate-mysql-integers.svg?style=flat-square" alt="Build Status"></a>
<a href="https://coveralls.io/github/Rackbeat/laravel-validate-mysql-integers"><img src="https://img.shields.io/coveralls/Rackbeat/laravel-validate-mysql-integers.svg?style=flat-square" alt="Coverage"></a>
<a href="https://packagist.org/packages/rackbeat/laravel-validate-mysql-integers"><img src="https://img.shields.io/packagist/dt/rackbeat/laravel-validate-mysql-integers.svg?style=flat-square" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/rackbeat/laravel-validate-mysql-integers"><img src="https://img.shields.io/packagist/v/rackbeat/laravel-validate-mysql-integers.svg?style=flat-square" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/rackbeat/laravel-validate-mysql-integers"><img src="https://img.shields.io/packagist/l/rackbeat/laravel-validate-mysql-integers.svg?style=flat-square" alt="License"></a>
</p>

## Installation

You just require using composer and you're good to go!

```bash
composer require rackbeat/laravel-validate-mysql-integers
```

## Usage

```php
'number' => [
    new Rackbeat\Rules\BigInteger($unsigned = true),
],
```

## Requirements
* PHP >= 7.1
