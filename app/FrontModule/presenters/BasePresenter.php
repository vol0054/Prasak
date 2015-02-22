<?php

namespace App\FrontModule\Presenters;
use Nette,
	App\Model;
use Nette\Application\UI\Form;
use App\components;


class BasePresenter extends \App\Presenters\BasePresenter{
    
    public $database;
    
    public function __construct(\Nette\Database\Context $db) {
	parent::__construct();
	$this->database = $db;
    }

    public function createComponentNavigation(){
	return new components\navigation\Navigation();	
    }
    public function createComponentHeader(){
	return new components\header\HeaderControl();
    }
    public function createComponentOcoJde(){
	return new components\ocojde\OcoJdeControl();
    }
    
    public function createComponentFooter(){
	return new components\footer\footer();
    }
    public function createComponentOrganizatori() {
	return new components\organizatori\organizatorControl();
    }
    public function createComponentRegistration(){
	return new components\registration\registrationControl();
    }
}