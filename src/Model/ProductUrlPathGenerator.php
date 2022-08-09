<?php

/**
 * Catalog Url Improvements Module
 *
 * @author    Peter McWilliams <pmcwilliams@augustash.com>
 * @copyright Copyright (c) 2022 August Ash (https://www.augustash.com)
 */

declare(strict_types=1);

namespace Augustash\BetterCatalogUrl\Model;

use Magento\Catalog\Model\Product;
use Magento\CatalogUrlRewrite\Model\ProductUrlPathGenerator as ParentClass;

/**
 * Model product URL path generator.
 */
class ProductUrlPathGenerator extends ParentClass
{
    /**
     * Prepare URL key for product
     *
     * @param Product $product
     * @return string
     */
    protected function prepareProductUrlKey(Product $product): string
    {
        $urlKey = (string)$product->getUrlKey();
        $urlKey = \trim(\strtolower($urlKey));

        return $product->formatUrlKey($urlKey ?: \sprintf('%s-%s', $product->getName(), $product->getSku()));
    }
}
