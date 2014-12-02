<?php if(!isset($page)) { header('Location: index.php');die('Redirect a index'); } ?>

<!-- Configurations, CSS & JS -->
<meta charset="UTF-8">
<meta name="description" content="MC CONSULTA AUDITIVA">
<meta name="keywords" content="MC CONSULTA AUDITIVA">
<meta name="author" content="MC CONSULTA AUDITIVA">

<link type="text/css" rel="stylesheet" href="css/normalize.css"/>
<link type="text/css" rel="stylesheet" href="css/MC.css"/>

<script src="js/jquery-1.9.1.min.js"></script>
<script src="js/main.js"></script>
<!--
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
-->

<script src="js/jquery.jcarousel.min.js"></script>

<!--
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="./css/bootstrap/bootstrap.min.css">
<link rel="stylesheet" href="./css/bootstrap/bootstrap-theme.css">
-->

<!-- Icons -->
<title><?php echo (empty($page_title)) ? 'MC CONSULTA AUDITIVA' : $page_title; ?></title>

