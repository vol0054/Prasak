<?php

namespace App\AdminModule\presenters;
use App\Model;

/**
 * Description of HospodaPresenter
 *
 * @author KytaVeprova
 */
class HospodaPresenter extends SecuredPresenter
{
	/** @var \App\Model\HospodaModel @inject */
	public $HospodaModel;
	
	public function renderDefault()
	{
		$this->template->hospody = $this->HospodaModel->getAllPub();
	}
}
