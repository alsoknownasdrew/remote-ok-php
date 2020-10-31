# remote-ok-php

[![Build Status](https://travis-ci.org/alsoknownasdrew/remote-ok-php.svg?branch=main)](https://travis-ci.org/alsoknownasdrew/remote-ok-php)
<!-- ALL-CONTRIBUTORS-BADGE:START - Do not remove or modify this section -->
[![All Contributors](https://img.shields.io/badge/all_contributors-3-orange.svg?style=flat-square)](#contributors-)
<!-- ALL-CONTRIBUTORS-BADGE:END -->

Remoteok.io API PHP Client

## Installation

Install the package through [Composer](http://getcomposer.org/).

Run the Composer require command from the Terminal:

    composer require alsoknownasdrew/remote-ok-php

## Getting Started

```php
require __DIR__ . '/vendor/autoload.php';

use Alsoknownasdrew\RemoteOK\Client\Factory\ClientFactory;

$client = ClientFactory::create();
```

## Usage

### Fetch positions

Retrieve available positions from Remoteok.io.

```php
$positions = $client->positions();
```

### Get position properties

You can get the following properties from a Position object: company name, company logo URL, company location, creation date, description, position ID, is position original (boolean), slug, tags, title, URL.

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
