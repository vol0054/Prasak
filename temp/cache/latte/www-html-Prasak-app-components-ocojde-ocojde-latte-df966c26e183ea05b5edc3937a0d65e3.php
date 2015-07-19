<?php
// source: /var/www/html/Prasak/app/components/ocojde/ocojde.latte

// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('5993925813', 'html')
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
<section id="ocojde">
    <div class="container">
    <h2 class="text-center">Pivní Maraton</h2>
    
          <p>Báňský prasá je tu pro všechny milovníky a popíječe piva, kteří při osvěžování se tímto zlatavým mokem nezůstanou jen v jednom podniku. Báňský prasák, jak to už z jeho názvu vyplývá je těžký a náročný závod, a to nejen fyzicky ale i po mentální stránce. V závodě nejde samozrejmě jen o to se co nejrychleji dostat do "nálady", ale jde především o výdrž! K úspěšnému zdolání závodu je třeba mít týmového ducha a sebezapření, které Vás bezpečně dostane do cíle. Jako tým budete podléhat různým nástrahám a fyzikálním zákonům, které na Vás zákeřá příroda nachystala. Ať už půjde o zhoršení motorických schopností, nadměrné působení gravitační síly, či používání mapy při zhoršených viditelnostních podmínkách. <p>

      <p>Pro ty, kteří se rádi poměřují s ostatními, bude v cíli zaznamenáváno pořadí všech týmů. Na konci závodu bude tomu nejrychlejšímu týmu udělen titul "BÁŇSKÉHO PRASÁKA". Samožřejmě je nutné aby do cíle dorazili všichni členové daného týmu naráz. Proto nenechávejte svoje vyčerpané spolubojovníky podél cest, na chodnících anebo kdekoli na trávníku a dotlačte je společně do cíle. </p>

      <p>Hodně síly a PIVU ZDAR!!!! </p>
      </p>
    <br>
    
    </div>
    
    
</section>
    
    <!-- Map -->
    <section id="contact" class="map">
        <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A&amp;output=embed"></iframe>
        <br>
        <small>
            <a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A"></a>
        </small>
        </iframe>
    </section>