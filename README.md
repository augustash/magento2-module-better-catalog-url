# Magento 2 Module - Better Catalog URL

![https://www.augustash.com](http://augustash.s3.amazonaws.com/logos/ash-inline-color-500.png)

**This is a private module and is not currently aimed at public consumption.**

## Overview

The `Augustash_BetterCatalogUrl` module adds the product SKU to the generated product URL. This ensures a unique URL for each product as well as additional SEO benefits.

## Installation

### Via Composer

Install the extension using Composer using our development package repository:

```bash
composer config repositories.augustash composer https://augustash.repo.repman.io
composer require augustash/module-better-catalog-url:~1.0.0
bin/magento module:enable --clear-static-content Augustash_BetterCatalogUrl
bin/magento setup:upgrade
bin/magento cache:flush
```

## Uninstall

After all dependent modules have also been disabled or uninstalled, you can finally remove this module:

```bash
bin/magento module:disable --clear-static-content Augustash_BetterCatalogUrl
rm -rf app/code/Augustash/BetterCatalogUrl/
composer remove augustash/module-better-catalog-url
bin/magento setup:upgrade
bin/magento cache:flush
```

## Structure

[Typical file structure for a Magento 2 module](http://devdocs.magento.com/guides/v2.4/extension-dev-guide/build/module-file-structure.html).
