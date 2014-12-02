<?php if(!isset($page)) { header('Location: home.php');die('Redirect a home'); } ?>
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

		<?php include "header.php"; ?>

		<?php include "main.php"; ?>

		<?php include "footer.php"; ?>

	</body>
</html>
