# remote-ok-php
<!-- ALL-CONTRIBUTORS-BADGE:START - Do not remove or modify this section -->
[![All Contributors](https://img.shields.io/badge/all_contributors-1-orange.svg?style=flat-square)](#contributors-)
<!-- ALL-CONTRIBUTORS-BADGE:END -->

Remoteok.io API PHP Client 

## Installation
Install the package through [Composer](http://getcomposer.org/).

Run the Composer require command from the Terminal:

    composer require alsoknownasdrew/remote-ok-php

## Getting Started
```php
require __DIR__ . '/vendor/autoload.php';

use Alsoknownasdrew\RemoteOK\ClientFactory;
use Alsoknownasdrew\RemoteOK\Client;

$clientFactory = new ClientFactory();
$client = $clientFactory->create();
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
    <td align="center"><a href="https://github.com/raphaelz"><img src="https://avatars0.githubusercontent.com/u/330184?v=4" width="100px;" alt=""/><br /><sub><b>Raphael</b></sub></a><br /><a href="https://github.com/alsoknownasdrew/remote-ok-php/commits?author=raphaelz" title="Documentation">📖</a></td>
  </tr>
</table>

<!-- markdownlint-enable -->
<!-- prettier-ignore-end -->
<!-- ALL-CONTRIBUTORS-LIST:END -->

This project follows the [all-contributors](https://github.com/all-contributors/all-contributors) specification. Contributions of any kind welcome!