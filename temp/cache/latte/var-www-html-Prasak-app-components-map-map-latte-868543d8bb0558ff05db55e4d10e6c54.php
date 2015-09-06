<?php
// source: /var/www/html/Prasak/app/components/map/map.latte

// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('8202388719', 'html')
;
// prolog Nette\Bridges\ApplicationLatte\UIMacros

// snippets support
if (empty($_l->extends) && !empty($_control->snippetMode)) {
	return Nette\Bridges\ApplicationLatte\UIMacros::renderSnippets($_control, $_b, get_defined_vars());
}

//
// main template
//
?>
<section id="trasa" class="bg-light-gray">
    <h2 class="text-center">Mapa Závodu</h2>
    <div id="map"></div>  
</section>

<script src="https://maps.googleapis.com/maps/api/js?signed_in=true&callback=initMap"></script>




