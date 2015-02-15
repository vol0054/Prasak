<?php

namespace App\components\footer;
use App\components;
class footer extends components\BaseControl{
   
    public function render()
    {
	$this->template->setFile(__DIR__.'/footer.latte');
	$this->template->render();
    }
}
