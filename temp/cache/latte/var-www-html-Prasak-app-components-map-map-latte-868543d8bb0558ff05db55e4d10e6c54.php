<?php
// source: /var/www/html/Prasak/app/components/map/map.latte

// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('0688649471', 'html')
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
<section id="" class="">
    <div class="container">
	tady bude mapa - bud z googlu s tim ze cela stranka muze pomalu nacitat, nebo tady dat jenom nakreslenou mapu jako obrazek.
    </div>
</section>