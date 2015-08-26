<?php

namespace App\Model;

class HospodaModel extends BaseModel{
    
    const
	TableName= 'hospoda';
    
    /** @var return all rows from table "hospoda" */
    public function getAllPub(){
	
	return $this->database->table(self::TableName);
	
    }
    
}
