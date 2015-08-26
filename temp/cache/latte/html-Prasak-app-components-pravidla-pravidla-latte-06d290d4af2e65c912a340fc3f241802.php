<?php
// source: /var/www/html/Prasak/app/components/pravidla/pravidla.latte

// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('0166951678', 'html')
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
<section id="pravidla">
    <div class="container">
	<h2 class="text-center">Pravidla</h2>
	je potřeba sepsat nejak pravidla soutěže, a jak to vše bude probíhat atp.....
    </div>
</section>