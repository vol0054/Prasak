<?php

namespace App\components\forms;
use Nette\Application\UI\Form;
use Nette;

class EditFormFactory 
{
	public function create()
	{
		$form = new Form;
        $form->addText('text','popis: ')
                ->setRequired()
				->setAttribute('class','');
		
        $form->addSubmit('submit','Uložit');
	
        return $form;
	}
}
