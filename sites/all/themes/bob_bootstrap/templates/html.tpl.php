<!DOCTYPE html>
<html lang="<?php print $language->language; ?>">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php print $head; ?>
	<title><?php print $head_title; ?></title>
	<?php print $styles; ?>
	<?php print $scripts; ?>
  <!-- HTML5 element support for IE6-8 -->
  <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
	<link href="http://fonts.googleapis.com/css?family=Bowlby+One" rel="stylesheet" type="text/css">
	<link href="http://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet" type="text/css">
	<link href="http://fonts.googleapis.com/css?family=Abel" rel="stylesheet" type="text/css">
	<link href="http://fonts.googleapis.com/css?family=Terminal+Dosis+Light" rel="stylesheet" type="text/css">
</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
</body>
</html>
