[![Build Status](https://github.com/cyberspectrum/php-transifex/actions/workflows/diagnostics.yml/badge.svg)](https://github.com/cyberspectrum/php-transifex/actions)
[![Latest Version tagged](http://img.shields.io/github/tag/cyberspectrum/php-transifex.svg)](https://github.com/cyberspectrum/php-transifex/tags)
[![Latest Version on Packagist](http://img.shields.io/packagist/v/cyberspectrum/php-transifex.svg)](https://packagist.org/packages/cyberspectrum/php-transifex)
[![Installations via composer per month](http://img.shields.io/packagist/dm/cyberspectrum/php-transifex.svg)](https://packagist.org/packages/cyberspectrum/php-transifex)

# Transifex client written in PHP.

This uses `php-http` base interfaces.

## Installation

```bash
$ php composer.phar require cyberspectrum/php-transifex php-http/guzzle7-adapter
```

Why `php-http/guzzle7-adapter`?
We are decoupled form any HTTP messaging client with help by [HTTPlug](http://httplug.io/).

You may also install any other adapter instead of `php-http/guzzle7-adapter`, just make sure one is installed.

## Usage

We have two layers of API.

1. Low level API in the namespace `CyberSpectrum\PhpTransifex\ApiClient`
2. High level entity based API in the namespace `CyberSpectrum\PhpTransifex\Model`

### 1. Low level API.

Quick start - create an API client:
```php
$factory = new CyberSpectrum\PhpTransifex\ApiClient\ClientFactory(
    $logger,
    [new CyberSpectrum\PhpTransifex\ApiClient\Generated\Authentication\BearerAuthAuthentication($apiKey)]
);
$client = $factory->create($factory->createHttpClient());

// Fetch a project:
$project = $client->getProjectByProjectId('project-id');
```

### 2. High level API.

#### Create an API client:
```php
$factory = new CyberSpectrum\PhpTransifex\ApiClient\ClientFactory(
    $logger,
    [new CyberSpectrum\PhpTransifex\ApiClient\Generated\Authentication\BearerAuthAuthentication($apiKey)]
);
$client = $factory->create($factory->createHttpClient());
$transifex = new CyberSpectrum\PhpTransifex\PhpTransifex($client);
```

#### Fetch an organization:
```php
$organization = $transifex->organizations()->getBySlug('organization');
```

#### Create a project:
```php
$project = $organization->projects()->add(
    'project-slug',
    'My Project description',
    'en', // source language code.
    'https://example.org' // the repository URL for open source projects or false for private.
);
$project->save();
```

#### Fetch a project:
```php
$project = $transifex->organizations()->getBySlug('organization')->projects()->getBySlug('some-project');
```

#### Add a language
```php
$project->languages()->add('de')->coordinators()->add('transifex-username');
$project->save();

// Show all language codes for the project.
var_export($project->languages()->codes());

```
