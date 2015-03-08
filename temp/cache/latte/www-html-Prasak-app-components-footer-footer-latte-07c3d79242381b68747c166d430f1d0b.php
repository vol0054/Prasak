<?php
// source: /var/www/html/Prasak/app/components/footer/footer.latte

// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('3179974740', 'html')
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
    <div class="container-fluid">
            <div class="row">
                
                <div class="col-md-6">
                    <ul class="list-inline social-buttons">
                        <li><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-google"></i></a>
                        </li>
                    </ul>
                </div>
		<div class="col-md-6">
                    <span class="copyright">Copyright &copy; <a href='http://volnystanislav.eu'>KytaVeprova</a> 2014-<?php echo Latte\Runtime\Filters::escapeHtml($year, ENT_NOQUOTES) ?></span>
                </div>
                            </div>
        </div>
</footer>