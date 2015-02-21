<?php

namespace App\Model;
use App\Model\BaseModel;
use Exception;
use Nette\Mail\SendmailMailer;
use Nette\Mail\Message;
class RegistrationModel extends BaseModel{
    
    /** @var string values from registration form - about contest teams & participant */
    public $values;
    
    const 
	TableName = 'tym';
    
    public function findName($values){	
	
	return $this->database->table('tym')->select('nazev')->where('nazev',$values->nazev)->fetch();
    }
    
    public function register($values){
	       
        $this->database->table('tym')->insert($values);        
    }
    
    /** @method bla bla sending message */
    public function sendMail($values){
	
	$mail = new Message;
	$mailer = new SendmailMailer;
	
	$mail->setFrom('registrace@prasak.cz');
	$mail->addTo($values->email);
	$mail->setSubject('Báňský Prasák! registrace');
	$mail->setHTMLBody('Registrace týmu '.$values->nazev.' proběhla úspěsně!. Už začněte trénovat!.');
	
	$mailer->send($mail);
		
    }
}
