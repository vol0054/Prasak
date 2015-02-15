<?php


namespace App\components\forms;
use Nette\Application\UI\Form;

class RegisterFormFactory {
    
    public function create(){
        
        $form = new Form;
        $form->addText('name')
                ->setRequired('vyplnte prosim vase jmeno');
        $form->addText('email')
                ->setRequired('');
        $form->addCheckbox('terms')
                ->setRequired();
        
        $form->addButton('send','Registrovat');
        
        return $form;
    
            
    }
}
