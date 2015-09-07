<?php
// source: /var/www/html/Prasak/app/AdminModule/templates/Auth/default.latte

// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('5517446544', 'html')
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
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="author" content="">
<?php if (isset($robots)) { ?>		<meta name="robots" content="<?php echo Latte\Runtime\Filters::escapeHtml($robots, ENT_COMPAT) ?>">
<?php } ?>
		
		<link rel="shortcut icon" href="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/images/favicon.ico">
		<title></title>

		
		<link rel="stylesheet" href="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/css/bootstrap.css" type="text/css">
		<link rel="stylesheet" href="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/css/bootstrap-responsive.css" type="text/css">
				<script type="text/javascript" src="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($baseUri), ENT_COMPAT) ?>/js/bootstrap.js"></script>
		
		<style type="text/css">
body {
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #eee;
}

.form-signin {
  max-width: 330px;
  padding: 15px;
  margin: 0 auto;
}
.form-signin .form-signin-heading,
.form-signin .checkbox {
  margin-bottom: 10px;
}
.form-signin .checkbox {
  font-weight: normal;
}
.form-signin .form-control {
  position: relative;
  height: auto;
  -webkit-box-sizing: border-box;
     -moz-box-sizing: border-box;
          box-sizing: border-box;
  padding: 10px;
  font-size: 16px;
}
.form-signin .form-control:focus {
  z-index: 2;
}
.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
		</style>
	</head>

	<body>
		<div class="container">
			<?php Nette\Bridges\FormsLatte\FormMacros::renderFormBegin($form = $_form = $_control["loginForm"], array('class'=>'form-signin', 'role'=>'form')) ?>

				<h2 class="form-signin-heading">Přihlášení</h2>
				<?php echo $_form["username"]->getControl()->addAttributes(array('class'=>'form-control', 'placeholder'=>'Jméno', 'autofocus')) ?>

				<?php echo $_form["password"]->getControl()->addAttributes(array('class'=>'form-control', 'placeholder'=>'Heslo')) ?>

				<?php echo $_form["Submit"]->getControl()->addAttributes(array('class'=>'btn btn-lg btn-primary btn-block')) ?>

			<?php Nette\Bridges\FormsLatte\FormMacros::renderFormEnd($_form) ?>

    </div>
	</body>
</html>