<?php

namespace oat\awesomeExtension\model;

use oat\oatbox\service\ConfigurableService;

class SaveCounterService extends ConfigurableService {
  const SERVICE_ID = 'awesomeExtension/saveCounter';

  pubic function onItemUpdate(ItemUpdateEvent $event) {
    $this->logDebug('Item has been update');
  }
}
