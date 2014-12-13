<?php
$lang = (isset($_GET['lang'])) ? $_GET['lang'] : 'cat';
if(!in_array($lang, array('cat','es','en','it'))) {
	$lang = 'cat';
}
$page = (isset($_GET['page'])) ? $_GET['page'] : 'Presentation';
if(!in_array($page, array('Presentation','Objectives','Services','Test','Contact','Legal'))) {
	$page = 'Presentation';
}
$page_title = 'MC Consulta Auditiva: '.$page;

include 'pages/skeleton.php';
