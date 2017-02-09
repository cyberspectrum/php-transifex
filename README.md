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

1. Low level API in the namespace `CyberSpectrum\PhpTransifex\Api`

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
