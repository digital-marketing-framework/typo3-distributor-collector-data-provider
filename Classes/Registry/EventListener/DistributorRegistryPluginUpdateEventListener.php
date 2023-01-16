<?php

namespace DigitalMarketingFramework\Typo3\Distributor\CollectorDataProvider\Registry\EventListener;

use DigitalMarketingFramework\Distributor\CollectorDataProvider\DistributorPluginInitialization;
use DigitalMarketingFramework\Typo3\Distributor\Core\Registry\Event\DistributorRegistryPluginUpdateEvent;
use DigitalMarketingFramework\Typo3\Collector\Core\Registry\Registry as CollectorRegistry;

class DistributorRegistryPluginUpdateEventListener
{
    public function __construct(
        protected CollectorRegistry $collectorRegistry,
    ) {
    }

    public function __invoke(DistributorRegistryPluginUpdateEvent $event): void
    {
        DistributorPluginInitialization::initialize($event->getRegistry(), $this->collectorRegistry->getCollector());
    }
}
