<?php
// source: /var/www/html/Prasak/app/components/organizatori/organizatori.latte

// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('5808254131', 'html')
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
<section id="organizatori">
    <h2 class="text-center">Organizátoři (nebo seznam hospod)</h2>
    <div class="container text-center">
    <div class="row">
        
        <div class="col-lg-4">
            <img src="images/hospy/kurnik-sopa.png" class="img-responsive img-circle" alt="">
            Artos
            <p>Nulla non lectus sed nisl molestie malesuada. Et harum quidem rerum facilis est et expedita distinctio. Phasellus enim erat, vestibulum vel, aliquam a, posuere eu, velit. Etiam sapien elit, consequat eget, tristique non, venenatis quis, ante. Nulla est. Sed elit dui, pellentesque a, faucibus vel, interdum nec, diam. Cras pede libero, dapibus nec, pretium sit amet, tempor quis. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Etiam bibendum elit eget erat. Etiam dictum tincidunt diam.</p>
        </div>
        <div class="col-lg-4">
            <img src="images/hospy/vzpominka.png" class="img-responsive img-circle" alt="">
            Portos
            <p>Nullam dapibus fermentum ipsum. In dapibus augue non sapien. Nulla non arcu lacinia neque faucibus fringilla. Phasellus rhoncus. Pellentesque ipsum. Etiam posuere lacus quis dolor. Fusce dui leo, imperdiet in, aliquam sit amet, feugiat eu, orci. Aliquam erat volutpat. Curabitur sagittis hendrerit ante. Quisque porta. Integer pellentesque quam vel velit. Etiam posuere lacus quis dolor. Proin pede metus, vulputate nec, fermentum fringilla, vehicula vitae, justo. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Donec quis nibh at felis congue commodo. Praesent dapibus. Aenean placerat. Aliquam ante. Mauris elementum mauris vitae tortor. Aliquam id dolor.</p>
        </div>
        <div class="col-lg-4">
            <img src="images/hospy/prasak.png" class="img-responsive img-circle" alt="">
            Retardos
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nunc tincidunt ante vitae massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer imperdiet lectus quis justo. Pellentesque arcu. Fusce tellus odio, dapibus id fermentum quis, suscipit id erat. Praesent dapibus. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Etiam neque. Integer pellentesque quam vel velit. Aliquam erat volutpat. Cras pede libero, dapibus nec, pretium sit amet, tempor quis. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Etiam quis quam. Nulla est. Curabitur bibendum justo non orci. Vivamus porttitor turpis ac leo.</p>
        </div>
    </div>
    </div>
    
</section>
