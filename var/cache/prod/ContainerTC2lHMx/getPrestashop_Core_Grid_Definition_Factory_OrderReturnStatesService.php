<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.grid.definition.factory.order_return_states' shared service.

$this->services['prestashop.core.grid.definition.factory.order_return_states'] = $instance = new \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\OrderReturnStatesGridDefinitionFactory(($this->services['prestashop.core.hook.dispatcher'] ?? $this->getPrestashop_Core_Hook_DispatcherService()), ($this->services['prestashop.core.grid.action.row.accessibility_checker.delete_order_return_states'] ?? ($this->services['prestashop.core.grid.action.row.accessibility_checker.delete_order_return_states'] = new \PrestaShop\PrestaShop\Core\Grid\Action\Row\AccessibilityChecker\DeleteOrderReturnStatesAccessibilityChecker())));

$instance->setTranslator(($this->services['translator'] ?? $this->getTranslatorService()));

return $instance;
