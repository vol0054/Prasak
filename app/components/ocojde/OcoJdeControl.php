<?php

namespace App\components\ocojde;
use App\components\BaseControl;

class OcoJdeControl extends BaseControl{
    
    public function render(){
        $this->template->setFile(__DIR__.'/ocojde.latte');
        $this->template->render();
    }
}
