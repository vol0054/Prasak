<?php
// source: /var/www/html/Prasak/app/components/registration/registration.latte

// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('6623986027', 'html')
;
// prolog Latte\Macros\BlockMacros
//
// block _registration
//
if (!function_exists($_b->blocks['_registration'][] = '_lbf91fc1211b__registration')) { function _lbf91fc1211b__registration($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v; $_control->redrawControl('registration', FALSE)
?>        <div class="row">
            <div class="col-lg-12">
                <?php Nette\Bridges\FormsLatte\FormMacros::renderFormBegin($form = $_form = $_control["registerForm"], array('class'=>'sentMessage', 'id'=>'contactForm')) ?>

                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-4">
                            <div class="form-group">                  
                                <?php echo $_form["nazev"]->getControl()->addAttributes(array('type'=>'text', 'class'=>'form-control', 'placeholder'=>'Vaše jméno:')) ?>

                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <?php echo $_form["email"]->getControl()->addAttributes(array('type'=>'email', 'class'=>'form-control', 'placeholder'=>'Váš email:')) ?>

                                <p class="help-block text-danger"></p>
                            </div>
                            
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
				<div class="form-group">
				    <?php echo $_form["terms"]->getControl()->addAttributes(array('type'=>'checkbox', 'class'=>'form-control')) ?> tímto souhlasíš s <a href="" data-toggle="modal" data-target="#myModal">chlastacími pravidly</a> 
				    <p class="help-block text-danger"></p>
				</div>
				
				
				<?php echo $_form["submit"]->getControl()->addAttributes(array('type'=>'submit', 'class'=>"btn btn-xl")) ?>

				
				<!-- Button trigger modal -->
			    
                            </div>
                        </div>
                    </div>
                    
                <?php Nette\Bridges\FormsLatte\FormMacros::renderFormEnd($_form) ?>

            </div>
        </div>
<?php
}}

//
// end of blocks
//

// template extending

$_l->extends = empty($_g->extended) && isset($_control) && $_control instanceof Nette\Application\UI\Presenter ? $_control->findLayoutTemplateFile() : NULL; $_g->extended = TRUE;

if ($_l->extends) { ob_start();}

// prolog Nette\Bridges\ApplicationLatte\UIMacros

// snippets support
if (empty($_l->extends) && !empty($_control->snippetMode)) {
	return Nette\Bridges\ApplicationLatte\UIMacros::renderSnippets($_control, $_b, get_defined_vars());
}

//
// main template
//
?>
<section  id="registrace" class="bg-light-gray">
    <h2 class="text-center">Registrace !</h2>
    <div class="container-fluid"<?php echo ' id="' . $_control->getSnippetId('registration') . '"' ?>>
<?php if ($_l->extends) { ob_end_clean(); return $template->renderChildTemplate($_l->extends, get_defined_vars()); }
call_user_func(reset($_b->blocks['_registration']), $_b, $template->getParameters()) ?>
    </div>


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Přečti to ty svině</h4>
      </div>
      <div class="modal-body">
        Pivo je nej!, b(l)ýt není ostuda, na dluh jen pro kamoše, bez placení jen u sviňí!
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">ne radši ne, jsem sráč</button>
        <button type="button" class="btn btn-xl" data-dismiss="modal">zmizni kurva</button>
      </div>
    </div>
  </div>
</div>
</section>