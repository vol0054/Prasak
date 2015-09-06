<?php
// source: /var/www/html/Prasak/app/AdminModule/templates/@layout.latte

// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('7192859654', 'html')
;
// prolog Latte\Macros\BlockMacros
//
// block title
//
if (!function_exists($_b->blocks['title'][] = '_lb566302552e_title')) { function _lb566302552e_title($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
;
}}

//
// block head
//
if (!function_exists($_b->blocks['head'][] = '_lba3972daf66_head')) { function _lba3972daf66_head($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
;
}}

//
// block foot
//
if (!function_exists($_b->blocks['foot'][] = '_lbf937daf12d_foot')) { function _lbf937daf12d_foot($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
;
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
<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="robots" content="noindex,nofollow">

	<title><?php if ($_l->extends) { ob_end_clean(); return $template->renderChildTemplate($_l->extends, get_defined_vars()); }
call_user_func(reset($_b->blocks['title']), $_b, get_defined_vars())  ?> | Báňksý Prasák</title>

    <link href="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/adm/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/adm/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/adm/css/plugins/timeline/timeline.css" rel="stylesheet">

    <!-- SB Admin CSS - Include with every page -->
    <link href="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/adm/css/sb-admin.css" rel="stylesheet">

	<script src="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/adm/js/jquery-1.10.2.js"></script>

	<link rel="shortcut icon" href="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/favicon.ico" type="image/x-icon">
<!-- 		<script type="text/javascript" src="<?php echo Latte\Runtime\Filters::escapeHtmlComment($basePath) ?>/admin/admin.js"></script> -->

	<?php call_user_func(reset($_b->blocks['head']), $_b, get_defined_vars())  ?>

</head>

<body>
	<div id="wrapper">

        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Zobrazit menu</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="">Báňský prasák</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                                
                                
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default navbar-static-side" role="navigation">
                <div class="sidebar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Homepage:"), ENT_COMPAT) ?>
"><i class="fa fa-dashboard fa-fw"></i> Nástěnka</a>
                        </li>
						<li>
                            <a href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("OcoJde:"), ENT_COMPAT) ?>
"><i class="fa fa-pencil fa-fw"></i> Pokec</a>
                        </li>
						<li>
                            <a href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Hospoda:"), ENT_COMPAT) ?>
"><i class="fa fa-beer fa-fw"></i> Hospody</a>
                        </li>
						<li>
                            <a href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Mapa:"), ENT_COMPAT) ?>
"><i class="fa fa-map-marker fa-fw"></i> Mapa</a>
                        </li>
						<li>
                            <a href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Pravidla:"), ENT_COMPAT) ?>
"><i class="fa fa-ambulance fa-fw"></i> Pravidla</a>
                        </li>
                    </ul>
                    <!-- /#side-menu -->
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
			<div class="row">
<?php $iterations = 0; foreach ($flashes as $flash) { ?>
					<p class="alert alert-<?php echo Latte\Runtime\Filters::escapeHtml($flash->type, ENT_COMPAT) ?>
"><?php echo Latte\Runtime\Filters::escapeHtml($flash->message, ENT_NOQUOTES) ?></p>
<?php $iterations++; } ?>
			</div>

<?php Latte\Macros\BlockMacros::callBlock($_b, 'content', $template->getParameters()) ?>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
        
    <!-- Core Scripts - Include with every page -->
    <script src="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/adm/js/bootstrap.min.js"></script>
    <script src="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/adm/js/plugins/metisMenu/jquery.metisMenu.js"></script>
	<script type="text/javascript" src="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/vendor/nette-forms/src/assets/netteForms.js"></script>
	<script type="text/javascript" src="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/vendor/nette.ajax.js/nette.ajax.js"></script>
	<script type="text/javascript" src="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/vendor/nette.ajax.js/extensions/confirm.ajax.js"></script>
	<script type="text/javascript" src="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/js/confirm.js"></script>

    <!-- SB Admin Scripts - Include with every page -->
    <script src="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/adm/js/sb-admin.js"></script>

    <!-- Page-Level Demo Scripts - Dashboard - Use for reference -->
<!-- 	    <script src="<?php echo Latte\Runtime\Filters::escapeHtmlComment($basePath) ?>/adm/js/demo/dashboard-demo.js"></script> -->

	<?php call_user_func(reset($_b->blocks['foot']), $_b, get_defined_vars())  ?>


	<script src="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/js/scripts.js"></script>
</body>
</html>
        
        
       
