<?php
// source: /var/www/html/Prasak/app/AdminModule/templates/OcoJde/default.latte

// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('3922979435', 'html')
;
// prolog Latte\Macros\BlockMacros
//
// block title
//
if (!function_exists($_b->blocks['title'][] = '_lba701632034_title')) { function _lba701632034_title($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>Pokec<?php
}}

//
// block content
//
if (!function_exists($_b->blocks['content'][] = '_lb8857d04035_content')) { function _lb8857d04035_content($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?><h1> Pokec </h1>
<a class="btn btn-primary" href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("edit"), ENT_COMPAT) ?>
"><span class="glyphicon glyphicon-edit"></span> Upravit</a>

<table class="table">
	<thead>
		<tr>
			<th>Text</th>
			<th>Upraveno</th>
			<th></th>
		</tr>		
	</thead>
	<tbody>
<?php $iterations = 0; foreach ($pokec as $p) { ?>		<tr>
			<th><?php echo Latte\Runtime\Filters::escapeHtml($p->text, ENT_NOQUOTES) ?></th>
			<th><?php echo Latte\Runtime\Filters::escapeHtml($p->created_at, ENT_NOQUOTES) ?></th>
		</tr>
<?php $iterations++; } ?>
		
	</tbody>
</table><?php
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
if ($_l->extends) { ob_end_clean(); return $template->renderChildTemplate($_l->extends, get_defined_vars()); }
call_user_func(reset($_b->blocks['title']), $_b, get_defined_vars())  ?>


<?php call_user_func(reset($_b->blocks['content']), $_b, get_defined_vars()) ; 