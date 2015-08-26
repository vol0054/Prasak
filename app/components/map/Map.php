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
    
    public function createComponentMap(){
        
        $map = $this->map->create();
        $markers = $this->markers->create();
        
            $map->setCoordinates(array(41.15, 15.65));
            $map->setProportions('800px', '480px'); // Default is 100% x 100%. If proportion is default, map must be 
                                            // wrapped to some concrete proportions otherwise it will not be displayed.
            $map->setKey('AIzaSyDPQss3IF3n_FINwUYFbvXS4UlD6_mHLTA');
            $map->setZoom(8);   // <0, 19>
            $map->setType(MapAPI::SATELITE);
            $map->isStaticMap();    // Map will be displayed as img. (To the image can be inserted colored) markers.
                      
        
        $map->addMarkers($markers);
        return $map;
    }
}
