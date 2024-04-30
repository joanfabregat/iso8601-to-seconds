# ISO 8601 to seconds

[![Latest Stable Version](https://poser.pugx.org/joanfabregat/iso8601-to-seconds/v)](//packagist.org/packages/joanfabregat/iso8601-to-seconds)
[![Total Downloads](https://poser.pugx.org/joanfabregat/iso8601-to-seconds/downloads)](//packagist.org/packages/joanfabregat/iso8601-to-seconds)
[![Latest Unstable Version](https://poser.pugx.org/joanfabregat/iso8601-to-seconds/v/unstable)](//packagist.org/packages/joanfabregat/iso8601-to-seconds)
[![License](https://poser.pugx.org/joanfabregat/iso8601-to-seconds/license)](//packagist.org/packages/joanfabregat/iso8601-to-seconds)

A simple package to convert ISO 8601 duration to seconds

## Installation

The package is [available on Packagist](https://packagist.org/packages/joanfabregat/iso8601-to-seconds). The
recommended way to install the library is through [Composer](http://getcomposer.org):

```bash
composer require joanfabregat/iso8601-to-seconds
```

## Usage

```php
use JoanFabregat\Iso8601ToSeconds\Iso8601ToSeconds;

$seconds = Iso8601ToSeconds::convert('PT1H');
echo $token; // will echo 3600

$interval = new DateInterval('PT1H');
$seconds = Iso8601ToSeconds::convert($interval);
echo $token; // will echo 3600

$interval = DateInterval::createFromDateString('1 hour');
$seconds = Iso8601ToSeconds::convert($interval);
echo $token; // will echo 3600

// will throw an \InvalidArgumentException exception
$token = Iso8601ToSeconds::convert('a random string');
```

## License

The library is published under the MIT license (see [`LICENSE`](LICENSE) file).