[![Build Status](https://travis-ci.org/cyberspectrum/php-transifex.png)](https://travis-ci.org/cyberspectrum/php-transifex)
[![Latest Version tagged](http://img.shields.io/github/tag/cyberspectrum/php-transifex.svg)](https://github.com/cyberspectrum/php-transifex/tags)
[![Latest Version on Packagist](http://img.shields.io/packagist/v/cyberspectrum/php-transifex.svg)](https://packagist.org/packages/cyberspectrum/php-transifex)
[![Installations via composer per month](http://img.shields.io/packagist/dm/cyberspectrum/php-transifex.svg)](https://packagist.org/packages/cyberspectrum/php-transifex)
[![Dependency Status](https://www.versioneye.com/php/cyberspectrum:php-transifex/badge.svg)](https://www.versioneye.com/php/cyberspectrum:php-transifex)

# Transifex client written in PHP.

This uses `php-http` base interfaces.

## Installation

```bash
$ php composer.phar require cyberspectrum/php-transifex php-http/guzzle6-adapter
```

Why `php-http/guzzle6-adapter`?
We are decoupled form any HTTP messaging client with help by [HTTPlug](http://httplug.io/).

You may also install any other adapter instead of `php-http/guzzle6-adapter`, just make sure one is installed.

## Usage

We have two layers of API.

1. Low level API in the namespace `CyberSpectrum\PhpTransifex\Api`
2. High level entity based API in the namespace `CyberSpectrum\PhpTransifex\Model`

### 1. Low level API.

Quick start - create an API client:
```php
$client = new CyberSpectrum\PhpTransifex\Client();
$client->authenticate($token);
// Or:
// $client->authenticate($user, $password);

// Fetch a project:
$project = $client->projects()->show('some-project');
```

For details of the endpoints, refer to the doc comments in the classes.

- [`$client->format()`](src/Api/Format.php) endpoint.
- [`$client->language()`](src/Api/Language.php) endpoint.
- [`$client->languageinfo()`](src/Api/Languageinfo.php) endpoint.
- [`$client->project()`](src/Api/Project.php) endpoint.
- [`$client->resource()`](src/Api/Resource.php) endpoint.
- [`$client->statistic()`](src/Api/Statistic.php) endpoint.
- [`$client->translation()`](src/Api/Translation.php) endpoint.
- [`$client->translationstring()`](src/Api/TranslationString.php) endpoint.

### 2. High level API.

#### Create an API client:
```php

$transifex = PhpTransifex::create($apiKey);
// Or:
// $transifex = PhpTransifex::create($user, $password);
```

#### Create a project:
```php
$project = $transifex->createProject(
    'project-slug',
    'My Project description',
    'en', // source language code.
    'https://example.org' // the repository URL for open source projects or false for private.
);
$project->save();
```

#### Fetch a project:
```php
$project = $transifex->project('some-project');
```

#### Add a language
```php
$project->languages()->add('de')->coordinators()->add('transifex-username');
$project->save();

// Show all language codes for the project.
var_export($project->languages()->codes());

```
