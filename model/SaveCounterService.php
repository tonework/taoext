<?php

namespace oat\awesomeExtension\model;

use oat\generis\model\OntologyAwareTrait;
use oat\oatbox\service\ConfigurableService;
use oat\taoItems\model\event\ItemUpdatedEvent;

class SaveCounterService extends ConfigurableService {
  use OntologyAwareTrait;

  const SERVICE_ID = 'awesomeExtension/saveCounter';
  const PROPERTY_COUNT = 'http://www.tao.lu/Ontologies/TAOItem.rdf#SomeCount';

  public function onItemUpdate(ItemUpdatedEvent $event) {
    $item = $this->getResource($event->getItemUri());
    $property = $this->getProperty(self::PROPERTY_COUNT);
    $value = (integer) $item->getOnePropertyValue($property);

    $this->logDebug('Item has been updated with following value:' . $value);

    $value++;

   $item->editPropertyValues($property, $value);
  }
}
