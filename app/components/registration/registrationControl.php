<?php

namespace App\components\registration;
use App\components\BaseControl;
use App\components\forms\RegisterFormFactory;
use Nette\Application\UI\Form;

class registrationControl extends BaseControl{    
    
    /** @inject @var \App\Model\RegistrationModel */
    public $RegistrationModel;
    
    
    public function render(){
        $this->template->setFile(__DIR__.'/registration.latte');        
        $this->template->render();
    }
    
    public function createComponentRegisterForm() {
        
        $form = (new RegisterFormFactory())->create();
	
	$form->onSuccess[] = $this->registerFormSucceeded;
	
        return $form;     
        
    }
    
    public function registerFormSucceeded($form){
	
	$values = $form->getValues();
	
	$registeredTeam = $this->presenter->RegistrationModel->findName($values);
	
	if($registeredTeam == null){
	    $this->presenter->RegistrationModel->register($values);
	    //$this->presenter->RegistrationModel->sendMail($values);
	    $this->presenter->flashMessage('jede to dopice!', 'alert alert-success');
	    $this->redirect('this');
	}else{	   
	    
	    $this->presenter->flashMessage('tym '.$values->nazev.' je jiz registrovan. zvolte si jiny nazev','alert alert-danger');
	}
	
	
    }
    
}
