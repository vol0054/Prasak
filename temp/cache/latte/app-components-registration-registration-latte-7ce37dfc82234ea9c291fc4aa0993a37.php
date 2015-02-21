<?php
// source: /var/www/html/Prasak/app/components/registration/registration.latte

// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('8326584984', 'html')
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
<section id="registrace" class="bg-light-gray">
    <h2 class="text-center">Registrace !</h2>
    <div class="container-fluid">
        <div class="row">
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
                                                        <div class="col-lg-12 text-center">
                                
                                <?php echo $_form["submit"]->getControl()->addAttributes(array('type'=>'submit', 'class'=>"btn btn-xl")) ?>

                            </div>
                        </div>
                    </div>
                    
                <?php Nette\Bridges\FormsLatte\FormMacros::renderFormEnd($_form) ?>

            </div>
        </div>
    </div>
    
</section>