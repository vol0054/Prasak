<?php
// source: /var/www/html/Prasak/app/components/navigation/Navigation.latte

// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('9030448877', 'html')
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
<!-- Custom Fonts -->
<link href="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
<link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header page-scroll">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="<?php echo Latte\Runtime\Filters::escapeHtml($_presenter->link("Homepage:default"), ENT_COMPAT) ?>">Báňský Prasák</a>
            </div>
	    
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="">
                        <a class="page-scroll" href="#ocojde">O co jde</a>
		    </li>
		    <li>
                        <a class="page-scroll" href="#partneri">Partneři</a>
                    </li>
		    <li>
			<a class="page-scroll" href="#trasa">Trasa</a>
		    </li>
                    <li class="">
                        <a class="page-scroll" href="#pravidla">Pravidla</a>
                    </li>	
		    <li>
                        <a class="page-scroll" href='#registrace'>Registrace</a>
                    </li>
                </ul>
            </div>	    
        </div>
	    
    </nav>