<?php
namespace App\components\partneri;
use components;

use App\Model\Entities;
use Kdyby\Doctrine\EntityManager;

class PartneriControl extends \App\components\BaseControl{
    
	
    public function render()
	{
		$this->template->setFile(__DIR__.'/partneri.latte');
		$this->template->hospody = $this->presenter->pubs->findAll();
		$this->template->render();
    }
    
}
