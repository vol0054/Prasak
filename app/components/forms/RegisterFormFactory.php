<?php


namespace App\components\forms;
use Nette\Application\UI\Form;
use Nette;
class RegisterFormFactory {
    
    /**
     * @return Form
     */
    public function create(){
        
        $form = new Form;
        $form->addText('nazev','nazev tymu: ')
                ->setRequired('vyplnte prosim jmeno vaseho tymu');
        $form->addText('email','kontaktni email: ')
                ->setRequired('neplatny email');
        /*$form->addCheckbox('terms')
                ->setRequired();*/
        
        $form->addSubmit('submit','Registrovat');
	
        return $form;     
    }
    
}
