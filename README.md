Transifex client written in PHP.
================================

This uses `php-http` base interfaces.

Installation
------------

```bash
$ php composer.phar require cyberspectrum/php-transifex php-http/guzzle6-adapter
```

Why `php-http/guzzle6-adapter`?
We are decoupled form any HTTP messaging client with help by [HTTPlug](http://httplug.io/).

You may also install any other adapter instead.
