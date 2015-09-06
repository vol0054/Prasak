<?php
namespace App\AdminModule\presenters;
use App\Model;
use App\components\forms\EditFormFactory;

/**
 * Description of OcoJdePresenter
 *
 * @author KytaVeprova <volny@ctyrimedia.cz>
 */
class OcoJdePresenter extends SecuredPresenter{
	
	/**
	 * @var \App\Model\OcoJdeModel @inject
	 */
	public $OcoJdeModel;
	
	public function renderDefault()
	{
		$this->template->pokec = $this->OcoJdeModel->getText();
	}
	
	
	public function actionEdit($id)
	{
		$data = $this->OcoJdeModel->getId($id);
	}
	
	public function createComponentEditForm()
	{
		$form = (new EditFormFactory())->create();
		$form->onSuccess[] = $this->editFormOK;
		
		return $form;
	}
	
	public function editFormOK($form){
		
	}
	
	
}
