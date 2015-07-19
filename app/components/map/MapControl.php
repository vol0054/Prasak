<?php

namespace App\components\map;
use App\components\BaseControl;
class MapControl extends BaseControl{
    
    public function render(){
	$this->template->setFile(__DIR__.'/map.latte');
	$this->template->render();
    }
}
