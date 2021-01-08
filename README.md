# Remote OK PHP Client

Remoteok.io API PHP Client

[![Build Status](https://travis-ci.org/alsoknownasdrew/remote-ok-php.svg?branch=main)](https://travis-ci.org/alsoknownasdrew/remote-ok-php)

![Packagist PHP Version Support](https://img.shields.io/packagist/php-v/alsoknownasdrew/remote-ok-php)

[![Maintainability](https://api.codeclimate.com/v1/badges/cfa5360b2aefb9a0c4b8/maintainability)](https://codeclimate.com/github/alsoknownasdrew/remote-ok-php/maintainability)

[![Test Coverage](https://api.codeclimate.com/v1/badges/cfa5360b2aefb9a0c4b8/test_coverage)](https://codeclimate.com/github/alsoknownasdrew/remote-ok-php/test_coverage)

<!-- ALL-CONTRIBUTORS-BADGE:START - Do not remove or modify this section -->
[![All Contributors](https://img.shields.io/badge/all_contributors-4-orange.svg?style=flat)](#contributors-)
<!-- ALL-CONTRIBUTORS-BADGE:END -->

## Installation

## Requirements

- [PHP >= 7.3](https://getcomposer.org/)
- [Composer Dependency Manager](https://getcomposer.org/)

Install the package through Composer: run the `composer require` command from the Terminal:

```shell script
composer require alsoknownasdrew/remote-ok-php
```

## Getting Started

```php
require __DIR__ . '/vendor/autoload.php';

use Alsoknownasdrew\RemoteOK\Client\Factory\ClientFactory;

$client = ClientFactory::create();
```

## Usage

Legal notice from the Remote OK API

> By using Remote OK's API feed you legally agree to mention Remote OK as a source and link back to the job listing URL on Remote OK with a DIRECT link, no redirects please. Please don't use our Remote OK and r|OK logo without written permission as they're registered trademarks. And thanks for using Remote OK! ^__^

### Fetch positions

Retrieve available positions from Remoteok.io.

```php
$positions = $client->positions();
```

`$client->positions()` will return an array of `Position` objects.
By default Remoteok.io API responds with a list of job positions from the last 30 days, but you can pass an optional limit argument to `Client::positions()` method

```php
$positions = $client->positions(5); // will return an array with the 5 most recent positions
```

Lets take a look on what's inside the client response by taking the first position from the array:

```phph
$position = $positions[0];
```

### Get position properties

You can get the following properties from a `Position` object: company name, company logo URL, company location, creation date, description, position ID, is position original (boolean), slug, tags, title, URL.

#### Company Name

Get the name of the company.

```php
$position->getCompany()->getName();
```

#### Company Logo URL

Get the full URL of the company's logo.

```php
$position->getCompany()->getLogoUrl();
```

#### Company Location

Get the location of the company.

```php
$position->getCompany()->getLocation();
```

#### Creation Date

Get the creation date of the position position posting.

```php
$position->getCreatedAt();
```

#### Description

Get the description of the position posting.

```php
$position->getDescription();
```

#### Position ID

Get the internal ID of the position on Remoteok.io.

```php
$position->getId();
```

#### Position Originality

Check whether the position posting is original, return as a boolean.

```php
$position->isOriginal();
```

#### Slug

Get the slug of the position posting on Remoteok.io.

```php
$position->getSlug();
```

#### Tags

Get the tags associated with the position posting.

```php
$position->getTags();
```

#### Title

Get the title of the position posting.

```php
$position->getTitle();
```

#### Position URL

Get the full URL of the position posting on Remoteok.io.

```php
$position->getUrl();
```

## Contributors ✨

Thanks goes to these wonderful people ([emoji key](https://allcontributors.org/docs/en/emoji-key)):

<!-- ALL-CONTRIBUTORS-LIST:START - Do not remove or modify this section -->
<!-- prettier-ignore-start -->
<!-- markdownlint-disable -->
<table>
  <tr>
    <td align="center"><a href="https://github.com/alsoknownasdrew"><img src="https://avatars0.githubusercontent.com/u/19336615?v=4" width="100px;" alt=""/><br /><sub><b>Andriy</b></sub></a><br /><a href="https://github.com/alsoknownasdrew/remote-ok-php/commits?author=alsoknownasdrew" title="Code">💻</a> <a href="#maintenance-alsoknownasdrew" title="Maintenance">🚧</a></td>
    <td align="center"><a href="https://github.com/raphaelz"><img src="https://avatars0.githubusercontent.com/u/330184?v=4" width="100px;" alt=""/><br /><sub><b>Raphael</b></sub></a><br /><a href="https://github.com/alsoknownasdrew/remote-ok-php/commits?author=raphaelz" title="Documentation">📖</a> <a href="https://github.com/alsoknownasdrew/remote-ok-php/commits?author=raphaelz" title="Code">💻</a></td>
    <td align="center"><a href="https://github.com/akshaythakare7"><img src="https://avatars3.githubusercontent.com/u/32819562?v=4" width="100px;" alt=""/><br /><sub><b>akshaythakare7</b></sub></a><br /><a href="https://github.com/alsoknownasdrew/remote-ok-php/commits?author=akshaythakare7" title="Documentation">📖</a></td>
    <td align="center"><a href="https://emulator000.github.io/"><img src="https://avatars1.githubusercontent.com/u/15048541?v=4" width="100px;" alt=""/><br /><sub><b>Dario</b></sub></a><br /><a href="https://github.com/alsoknownasdrew/remote-ok-php/commits?author=Emulator000" title="Code">💻</a></td>
  </tr>
</table>

<!-- markdownlint-enable -->
<!-- prettier-ignore-end -->
<!-- ALL-CONTRIBUTORS-LIST:END -->

This project follows the [all-contributors](https://github.com/all-contributors/all-contributors) specification. Contributions of any kind welcome!

### Contributing

Contributions are welcome. Before proceeding, please read the [Code of Conduct](CODE_OF_CONDUCT.md) AND [CONTRIBUTING](CONTRIBUTING.md) guides, which contains information about contribution process.

## Code of Conduct

This project adheres to a Contributor [Code of Conduct](CODE_OF_CONDUCT.md). By participating in this project and its community, you are expected to uphold this code.
