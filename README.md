# Github Meta Data Repo Extractor

[![Latest Version](https://img.shields.io/github/tag/PiedWeb/Github.svg?style=flat&label=release)](https://github.com/PiedWeb/Github/tags)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat)](https://github.com/PiedWeb/Github/LICENSE.md)
[![Build Status](https://img.shields.io/travis/PiedWeb/Github/master.svg?style=flat)](https://travis-ci.org/PiedWeb/Github)
[![Quality Score](https://img.shields.io/scrutinizer/g/PiedWeb/Github.svg?style=flat)](https://scrutinizer-ci.com/g/PiedWeb/Github)
[![Code Coverage](https://img.shields.io/scrutinizer/coverage/g/PiedWeb/Github.svg?style=flat)](https://scrutinizer-ci.com/g/PiedWeb/Github/code-structure)
[![Total Downloads](https://img.shields.io/packagist/dt/piedweb/github.svg?style=flat)](https://packagist.org/packages/piedweb/github)

## Install

Via [Packagist](https://img.shields.io/packagist/dt/piedweb/github.svg?style=flat)

``` bash
$ composer require piedweb/github
```

## Usage

``` php
use PiedWeb\Github\ExtractRepoMetaData;

$github = new ExtractRepoMetaData('https://github.com/PiedWeb/CMS');

$github->getName()        // @return string
$github->getDescription() // @return string
$github->getStars()       // @return string
```

## Testing

``` bash
$ composer test
```

## Contributing

Please see [contributing](https://dev.piedweb.com/contributing)

## Credits

- [PiedWeb](https://piedweb.com)
- [All Contributors](https://github.com/PiedWeb/:package_skake/graphs/contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.

[![Latest Version](https://img.shields.io/github/tag/PiedWeb/Github.svg?style=flat&label=release)](https://github.com/PiedWeb/Github/tags)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat)](https://github.com/PiedWeb/Github/LICENSE.md)
[![Build Status](https://img.shields.io/travis/PiedWeb/Github/master.svg?style=flat)](https://travis-ci.org/PiedWeb/Github)
[![Quality Score](https://img.shields.io/scrutinizer/g/PiedWeb/Github.svg?style=flat)](https://scrutinizer-ci.com/g/PiedWeb/Github)
[![Code Coverage](https://img.shields.io/scrutinizer/coverage/g/PiedWeb/Github.svg?style=flat)](https://scrutinizer-ci.com/g/PiedWeb/Github/code-structure)
[![Total Downloads](https://img.shields.io/packagist/dt/piedweb/github.svg?style=flat)](https://packagist.org/packages/piedweb/github)
