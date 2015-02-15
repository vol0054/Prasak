<?php

namespace App\components\registration;
use App\components\BaseControl;
use App\components\forms\RegisterFormFactory;

class registrationControl extends BaseControl{
    
    public function render(){
        $this->template->setFile(__DIR__.'/registration.latte');        
        $this->template->render();
    }
    
    public function createComponentRegisterForm() {
        
        $f = (new RegisterFormFactory())->create();
        
        $f->onSuccess[] = [$this,'RegisterFormOk'];
        
        return $f;
        
    }
    
    public function RegisterFormOk($form){
        
    }
    
}
