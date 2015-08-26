<?php
// source: /var/www/html/Prasak/app/components/ocojde/ocojde.latte

// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('7028006381', 'html')
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
    
          <p>Báňský prasák je tu pro všechny milovníky a popíječe piva, kteří při osvěžování se tímto zlatavým mokem nezůstanou jen v jednom podniku. Báňský prasák, jak to už z jeho názvu vyplývá je těžký a náročný závod, a to nejen fyzicky ale i po mentální stránce. V závodě nejde samozrejmě jen o to se co nejrychleji dostat do "nálady", ale jde především o výdrž! K úspěšnému zdolání závodu je třeba mít týmového ducha a sebezapření, které Vás bezpečně dostane do cíle. Jako tým budete podléhat různým nástrahám a fyzikálním zákonům, které na Vás zákeřá příroda nachystala. Ať už půjde o zhoršení motorických schopností, nadměrné působení gravitační síly, či používání mapy při zhoršených viditelnostních podmínkách. <p>

      <p>Pro ty, kteří se rádi poměřují s ostatními, bude v cíli zaznamenáváno pořadí všech týmů. Na konci závodu bude tomu nejrychlejšímu týmu udělen titul "BÁŇSKÉHO PRASÁKA". Samožřejmě je nutné aby do cíle dorazili všichni členové daného týmu naráz. Proto nenechávejte svoje vyčerpané spolubojovníky podél cest, na chodnících anebo kdekoli na trávníku a dotlačte je společně do cíle. </p>

      <p>Hodně síly a PIVU ZDAR!!!! </p>
      </p>
    <br>
    
    </div>
    
    
</section>