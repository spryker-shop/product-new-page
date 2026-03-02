<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerShop\Yves\ProductNewPage;

use Spryker\Yves\Kernel\AbstractFactory;
use SprykerShop\Yves\ProductNewPage\Dependency\Client\ProductNewPageToCatalogClientInterface;
use SprykerShop\Yves\ProductNewPage\Dependency\Client\ProductNewPageToLocaleClientInterface;
use SprykerShop\Yves\ProductNewPage\Dependency\Client\ProductNewPageToProductNewClientInterface;
use SprykerShop\Yves\ProductNewPage\Dependency\Client\ProductNewPageToUrlStorageClientInterface;
use SprykerShop\Yves\ProductNewPage\Dependency\Service\ProductNewPageToUtilNumberServiceInterface;

class ProductNewPageFactory extends AbstractFactory
{
    /**
     * @return array<string>
     */
    public function getProductNewPageWidgetPlugins(): array
    {
        return $this->getProvidedDependency(ProductNewPageDependencyProvider::PLUGIN_PRODUCT_NEW_PAGE_WIDGETS);
    }

    public function getProductNewClient(): ProductNewPageToProductNewClientInterface
    {
        return $this->getProvidedDependency(ProductNewPageDependencyProvider::CLIENT_PRODUCT_NEW);
    }

    public function getUrlStorageClient(): ProductNewPageToUrlStorageClientInterface
    {
        return $this->getProvidedDependency(ProductNewPageDependencyProvider::CLIENT_URL_STORAGE);
    }

    public function getCatalogClient(): ProductNewPageToCatalogClientInterface
    {
        return $this->getProvidedDependency(ProductNewPageDependencyProvider::CLIENT_CATALOG);
    }

    public function getLocaleClient(): ProductNewPageToLocaleClientInterface
    {
        return $this->getProvidedDependency(ProductNewPageDependencyProvider::CLIENT_LOCALE);
    }

    public function getUtilNumberService(): ProductNewPageToUtilNumberServiceInterface
    {
        return $this->getProvidedDependency(ProductNewPageDependencyProvider::SERVICE_UTIL_NUMBER);
    }
}
