<?php
namespace App\components\navigation;
use App\components;
class Navigation extends components\BaseControl{
    
    public function render(){
	
	$this->template->setFile(__DIR__.'/Navigation.latte');
	$this->template->render();
	
    }
}
