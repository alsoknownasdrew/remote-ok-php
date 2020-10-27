# remote-ok-php

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
