<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.search.builder.event' shared service.

return $this->services['prestashop.core.search.builder.event'] = new \PrestaShop\PrestaShop\Core\Search\Builder\EventFiltersBuilder(${($_ = isset($this->services['event_dispatcher']) ? $this->services['event_dispatcher'] : $this->getEventDispatcherService()) && false ?: '_'});
