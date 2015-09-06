<?php

/**
 * Description of OcoJdeModel
 * 
 * @author KytaVeprova
 */

namespace App\Model;

class OcoJdeModel extends BaseModel{
	
	public function getText(){
		return $this->database->table('OcoJde');
	}
	
	public function insert($text){
		return $this->database->table('OcoJde')->insert($text);
	}
	
	public function getId($id)
	{
		return $this->database->table('OcoJde')->get($id);
	}
}
