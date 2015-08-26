<?php
namespace App\components\pravidla;
use App\components\BaseControl;

class PravidlaControl extends BaseControl{
    
    public function render()
    {
	$this->template->setFile(__DIR__.'/pravidla.latte');
	$this->template->render();
    }
}
