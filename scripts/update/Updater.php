<?php

namespace oat\awesomeExtension\scripts\update;

use oat\tao\scripts\update\OntologyUpdater;


class Updater extends \common_ext_ExtensionUpdater {
    public function update($initialVerision) {
        if($this->isVersion('0.0.1')) {
            OntologyUpdater::syncModels();

            $this->setVersion('0.0.2');
        }
     }
}
