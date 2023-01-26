<?php

/**
 * Product Catalog Url Improvement Module
 *
 * @author    Peter McWilliams <pmcwilliams@augustash.com>
 * @copyright 2023 August Ash, Inc. (https://www.augustash.com)
 */

declare(strict_types=1);

namespace Augustash\BetterCatalogUrl\Model;

use Magento\Catalog\Model\Product;
use Magento\CatalogUrlRewrite\Model\ProductUrlPathGenerator as ParentClass;

class ProductUrlPathGenerator extends ParentClass
{
    /**
     * Prepare url key for product.
     *
     * @param \Magento\Catalog\Model\Product $product
     * @return string
     */
    protected function prepareProductUrlKey(Product $product): string
    {
        $urlKey = (string) $product->getUrlKey();
        $urlKey = \trim(\strtolower($urlKey));

        return $product->formatUrlKey($urlKey ?: \sprintf('%s-%s', $product->getName(), $product->getSku()));
    }
}
