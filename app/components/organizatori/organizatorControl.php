<?php
namespace App\components\organizatori;
use App\components\BaseControl;

class organizatorControl extends BaseControl{
    
    public function render(){
	$this->template->setFile(__DIR__.'/organizatori.latte');
	$this->template->render();
    }
}
