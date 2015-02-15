<?php

namespace App\FrontModule\Presenters;
use \Oli\GoogleAPI\TMap;




/**
 * Homepage presenter.
 */
class HomepagePresenter extends BasePresenter
{
    
 
   protected function createComponentGoogleMap()
   {
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
