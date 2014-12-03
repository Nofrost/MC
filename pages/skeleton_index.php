<?php if(!isset($page)) { header('Location: index.php');die('Redirect a index'); } ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
	<head>
		<?php include "head.php"; ?>
	</head>

	<body>
		<!--<div id="guia_layout"></div>-->
		<div id="Logo_index"></div>
		<div id="Languages_index">
			<a id="button_CAT_index" href="home.php?page=Presentation&lang=cat">Català</a>
			<a id="button_ESP_index" href="home.php?page=Presentation&lang=es">Espa&ntilde;ol</a>
			<a id="button_ENG_index" href="home.php?page=Presentation&lang=en">English</a>
			<a id="button_IT_index" href="home.php?page=Presentation&lang=it">Italiano</a>
		</div>
	</body>
</html>
