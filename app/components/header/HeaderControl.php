<?php

namespace App\components\header;
use App\components;
class HeaderControl extends components\BaseControl{
    
    public function render(){
	$this->template->setFile(__DIR__.'/Header.latte');
	$this->template->render();
    }
}
