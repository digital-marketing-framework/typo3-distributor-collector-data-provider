<?php

namespace DigitalMarketingFramework\Typo3\Distributor\CollectorDataProvider\Registry\EventListener;

use DigitalMarketingFramework\Distributor\CollectorDataProvider\DistributorCollectorDataProviderInitialization;
use DigitalMarketingFramework\Typo3\Collector\Core\Registry\Registry as CollectorRegistry;
use DigitalMarketingFramework\Typo3\Core\Registry\EventListener\AbstractCoreRegistryUpdateEventListener;

class CoreRegistryUpdateEventListener extends AbstractCoreRegistryUpdateEventListener
{
    public function __construct(CollectorRegistry $collectorRegistry)
    {
        parent::__construct(new DistributorCollectorDataProviderInitialization($collectorRegistry, 'dmf_distributor_collector_data'));
    }
}
