<?php

namespace App\FrontModule\Presenters;
use Nette\Application\UI\Form;

use App\Model\Entities;
use Kdyby\Doctrine\EntityManager;
use Kdyby\Doctrine\EntityRepository;

class HomepagePresenter extends BasePresenter
{
    /* inject must be here, because in component - $this->presenter->database */
    
    /** @inject @var \App\Model\RegistrationModel */
    public $RegistrationModel;
    
    /** @inject @var \App\Model\HospodaModel */
    public $HospodaModel;
	
	/**
	 * @var EntityManager
	 * @inject
	 */
	public $em;
	
	/**
	 * @var EntityRepository
	 */
	public $pubs;
    
	public function startup() {
		parent::startup();
		
		$this->pubs = $this->em->getRepository(Entities\Pub::class);
	}
    public function renderDefault() {
		
		$this->template->pubs = $this->pubs->findAll();
	
    }
}
