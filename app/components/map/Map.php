<?php
namespace App\components;
use App\components\BaseControl;
use GoogleMap;


class Map extends \Nette\Application\UI\Control{
    
    private $map;
    private $markers;
    
    public function __construct(\Oli\GoogleAPI\IMapAPI $mapApi, \Oli\GoogleAPI\Markers $markers){
	$this->markers = $markers;
	$this->map = $mapApi;
	
    }
    
    
}
