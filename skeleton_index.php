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
			<div id="button_CAT_index"><a href="catala.php">Català</a></div>
			<div id="button_ESP_index"><a href="espanol.php">Espa&ntilde;ol</a></div>
			<div id="button_ENG_index"><a href="english.php">English</a></div>
			<div id="button_IT_index"><a href="italiano.php">Italiano</a></div>
		</div>

	</body>
</html>
