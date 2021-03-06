<?php

class QuickstartButtonsSetCreateProcessor extends modObjectCreateProcessor {
    public $classKey = 'qsbSet';
	public $languageTopics = array('quickstartbuttons:default');
	public $objectType = 'quickstartbuttons.qsbset';

    public function afterSave() {
        $this->modx->cacheManager->refresh(array(
            'default' => array('qsb' => array()),
        ));
        return parent::afterSave();
    }
}

return 'QuickstartButtonsSetCreateProcessor';