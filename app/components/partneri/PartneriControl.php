<?php
namespace App\components\partneri;
use components;

class PartneriControl extends \App\components\BaseControl{
    
    public function render(){
	
	$this->template->setFile(__DIR__.'/partneri.latte');
	$this->template->hospody = $this->presenter->HospodaModel->getAllPub();
	$this->template->render();
    }
    
}
