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
        $form->addText('nazev','název tymu: ')
                ->setRequired('vyplňte prosím jméno vašeho týmu');
		$form->addText('pocetUcastniku', 'počet závodníků ve Vašem týmu:')
				->setRequired('Zadejte prosím počet členů Vašeho tým');
				/** @TODO add validator - number of runners must be lower than <5 */
        $form->addText('email','kontaktni email: ')
                ->setRequired('neplatny email');
        $form->addCheckbox('terms')
                ->setRequired()->setOmitted(TRUE);
        
        $form->addSubmit('submit','Registrovat');
	
        return $form;     
    }
    
}
