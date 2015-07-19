<?php
// source: /var/www/html/Prasak/app/components/footer/footer.latte

// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('8038319708', 'html')
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
                    <span class="copyright">Copyright &copy; <a href='http://volnystanislav.eu'>KytaVeprova</a> <?php echo Latte\Runtime\Filters::escapeHtml($year, ENT_NOQUOTES) ?></span>
		    <br>
		    <span class="copyright"> with little help from <a href="http://html5up.net">html5.up</span>
                </div>
                            </div>
        </div>
</footer>