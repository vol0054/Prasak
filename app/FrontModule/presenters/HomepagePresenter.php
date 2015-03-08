<?php

namespace App\FrontModule\Presenters;
use Nette\Application\UI\Form;


class HomepagePresenter extends BasePresenter
{
    /* inject must be here, because in component - $this->presenter->database */
    
    /** @inject @var \App\Model\RegistrationModel */
    public $RegistrationModel;
    
    /** @inject @var \App\Model\HospodaModel */
    public $HospodaModel;
    
    public function renderDefault() {
	
    }
}
