# PHP Web Article Extractor

Web Article Extractor is a PHP library that detects and extracts the primary 'article' content and title from a given web page.

## Features

* Extract clean article and headline text from a page quickly
* Identifies the language of the extracted article
* Identifies keywords of the extracted article
* Designed to easily integrate into pipeline or microservice project architectures

## Usage
There are two ways to use Web Article Extractor, the first way is to use the provided docker file (See 'Installation'), this will create you an instance that you can start using straight away and is ideal for pipeline architectures, the second way is to integrate the PHP library directly into your project.

PHP simple example:

```php
<?php

// This file is generated by Composer
require_once 'PHP-Web-Article-Extractor/src/web_article_extractor.php';

// Extract directly from article URL
$extractionResult = WebArticleExtractor::extractFromURL('http://uk.ign.com/articles/2015/03/19/gabe-newell-discusses-possibility-of-half-life-3');

// Display the extracted article in JSON form
echo json_encode($extractionResult);
```

## Installation
#### Docker
TODO:

#### Composer
The first step to use Web Article Extractor is to download Composer:

```bash
$ curl -s http://getcomposer.org/installer | php
```

Now add PHP Web Article Extractor to your app with Composer:

```bash
$ php composer.phar require project_full_name:stable_version
```

And that's it! Composer will automatically handle the rest.

Alternatively, you can manually add the dependency to `composer.json` file...

```json
{
    "require": {
        "zackslash/php-web-article-extractor": "*"
    }
}
```

... and then install our dependencies using:
```bash
$ php composer.phar install
```
## Requirements

* PHP >= 5.5.0

## Running the Tests

To run the unit tests, you'll need a set of dev dependencies you can install using Composer:

```
php composer.phar install --dev
```

Once installed, just launch the following command:

```
phpunit
```

## Acknowledgements

Parts of PHP Web Article Extractor are based on algorithms from the whitepaper ['Boilerplate detection using Shallow Text Features'](http://www.l3s.de/~kohlschuetter/publications/wsdm187-kohlschuetter.pdf) 
and 'Boilerpipe' by By Christian Kohlschuetter, Peter Fankhauser, Wolfgang Nejdl

PHP Web Article Extractor implements the Rapid Automatic Keyword Extraction (RAKE) algorithm as described in the book ['Text Mining: Theory and Applications'](http://www.amazon.com/Text-Mining-Applications-Michael-Berry/dp/0470749822) and the implementation was based on [aneesha's open source Python version](https://github.com/aneesha/RAKE)

The Stop Word dictionary used in this project was pulled from [Peter Graham's 'stopwords' repository](https://github.com/6/stopwords)


## License

PHP Web Article Extractor is released under the MIT License.
See the bundled [LICENSE](https://github.com/zackslash/PHP-Web-Article-Extractor/blob/master/LICENCE) file for details.
