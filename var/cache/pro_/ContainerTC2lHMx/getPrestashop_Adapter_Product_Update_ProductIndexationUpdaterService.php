<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.product.update.product_indexation_updater' shared service.

return $this->services['prestashop.adapter.product.update.product_indexation_updater'] = new \PrestaShop\PrestaShop\Adapter\Product\Update\ProductIndexationUpdater(($this->services['prestashop.adapter.legacy.configuration'] ?? ($this->services['prestashop.adapter.legacy.configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration()))->getBoolean("PS_SEARCH_INDEXATION"));
