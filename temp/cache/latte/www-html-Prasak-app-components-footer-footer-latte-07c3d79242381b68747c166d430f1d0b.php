<?php
// source: /var/www/html/Prasak/app/components/footer/footer.latte

// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('7365436303', 'html')
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
<footer>
    Footer Foooooter Footer Foooooter Footer Foooooter .
    Footer Foooooter Footer Foooooter Footer Foooooter ,Footer Foooooter Footer Foooooter Footer Foooooter Footer Foooooter Footer Foooooter Footer Foooooter Footer Foooooter Footer Foooooter Footer Foooooter Footer Foooooter Footer Foooooter Footer Foooooter 
    
</footer>