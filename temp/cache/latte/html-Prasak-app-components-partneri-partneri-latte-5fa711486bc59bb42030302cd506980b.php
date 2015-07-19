<?php
// source: /var/www/html/Prasak/app/components/partneri/partneri.latte

// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('0469796018', 'html')
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
<section id="partneri" class="bg-light-gray">
    <div class="container">
	<div class="row">
	    <div class="col-lg-12 text-center">
		<h2 class="">Partnerské hospody</h2>
	    </div>
	</div>


	<div class="row">
<?php $iterations = 0; foreach ($hospody as $h) { ?>		<div class="col-md-4 col-sm-6 portfolio-item">
		    <a href="#<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($h->modal_name), ENT_COMPAT) ?>" class="portfolio-link" data-toggle="modal">
			    <div class="portfolio-hover">
				<div class="portfolio-hover-content">
				    <i class="fa fa-plus fa-3x"></i>
				</div>
			    </div>
			<img src="http://placehold.it/400x400" class="img-responsive img-centered" alt="">
			</a>
			<div class="portfolio-caption">
			    <h4><?php echo Latte\Runtime\Filters::escapeHtml($h->nazev, ENT_NOQUOTES) ?></h4>
			    <p class="text-muted"></p>
			</div>
		</div>
<?php $iterations++; } ?>
	</div>
    </div>
</section>

<!-- Portfolio Modal -->
<?php $iterations = 0; foreach ($hospody as $modal) { ?>    <div class="portfolio-modal modal fade" id="<?php echo Latte\Runtime\Filters::escapeHtml($modal->modal_name, ENT_COMPAT) ?>" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2><?php echo Latte\Runtime\Filters::escapeHtml($modal->nazev, ENT_NOQUOTES) ?></h2>
                            
                            <img class="img-responsive img-centered" src="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>
/<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($modal->img), ENT_COMPAT) ?>" alt="">
                            <p><?php echo Latte\Runtime\Filters::escapeHtml($modal->popis, ENT_NOQUOTES) ?></p>
			    <p><a href="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($modal->www), ENT_COMPAT) ?>
">Navštivte webové stránky hodpody <?php echo Latte\Runtime\Filters::escapeHtml($modal->nazev, ENT_NOQUOTES) ?></a></p>
                            <ul class="list-inline">
                                <li></li>
                            </ul>
                            <button type="button" class="btn btn-xl" data-dismiss="modal"><i class="fa fa-times"></i> Zavřít</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><?php $iterations++; } 