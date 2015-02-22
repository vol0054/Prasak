<?php
// source: /var/www/html/Prasak/app/components/header/Header.latte

// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('4267661720', 'html')
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
<header>
	    <div class="container">
		<div class="intro-text">
		    <div class="intro-lead-in">První ročník pivního maratonu!</div>
		    <h1 class="intro-heading">Báňský Prasák</h1>
		    <a href="#ocojde" class="page-scroll btn btn-primary">Chci se ožrat!</a>
		</div>
	    </div>
</header>