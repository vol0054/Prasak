<?php

namespace App\FrontModule\Presenters;
use Nette,
	App\Model;
use Nette\Application\UI\Form;
use App\components;
use Oli\GoogleAPI;


class BasePresenter extends \App\Presenters\BasePresenter{
    
    
    public function createComponentNavigation(){
	return new components\navigation\Navigation();	
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
    public function createComponentRegistration() {
	return new components\registration\registrationControl();
    }

    public function createComponentMap(){
	$map = $this->map->create();

	$map->setCoordinates(array(50.250718,14.583435))
	    ->setZoom(4)
	    ->setType(MapAPI::TERRAIN);

	$markers = $this->markers->create();
	$markers->fitBounds();

	if(count($markersFromDb) > 30)
	{
	    $markers->isMarkerClusterer();
	}

	foreach ($markersFromDb as $marker)
	{
	    $markers->addMarker(array($marker->lat, $marker->lng), Marker::DROP)
		->setMessage(
		    '<h1>'.$marker->title.'</h1><br />'.$marker->description
		)->setIcon($marker->icon);
	}
	    $map->addMarkers($markers);
	return $map;
    }
    
}
