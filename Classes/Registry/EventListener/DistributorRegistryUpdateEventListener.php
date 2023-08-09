<?php

namespace DigitalMarketingFramework\Typo3\Distributor\CollectorDataProvider\Registry\EventListener;

use DigitalMarketingFramework\Distributor\CollectorDataProvider\DistributorCollectorDataProviderInitialization;
use DigitalMarketingFramework\Typo3\Collector\Core\Registry\Registry as CollectorRegistry;
use DigitalMarketingFramework\Typo3\Distributor\Core\Registry\EventListener\AbstractDistributorRegistryUpdateEventListener;

class DistributorRegistryUpdateEventListener extends AbstractDistributorRegistryUpdateEventListener
{
    public function __construct(CollectorRegistry $collectorRegistry)
    {
        parent::__construct(new DistributorCollectorDataProviderInitialization($collectorRegistry));
    }
}
