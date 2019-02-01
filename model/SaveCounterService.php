<?php

namespace oat\awesomeExtension\model;

use oat\oatbox\service\ConfigurableService;

class SaveCounterService extends ConfigurableService {
  const SERVICE_ID = 'awesomeExtension/saveCounter';

  public function onItemUpdate($event) {
    $this->logDebug('Item has been update');
  }
}
