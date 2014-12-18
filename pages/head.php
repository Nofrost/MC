<?php if(!isset($page)) { header('Location: index.php');die('Redirect a index'); } ?>

<!-- Configurations, CSS & JS -->
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="description" content="Somos profesionales titulados en audiolog&iacute;a con m&aacute;s 30 a&ntilde;os de experiencia en el sector. Efectuamos estudios audiol&oacute;gicos completos y aplicaciones de aud&iacute;fonos digitales personalizados sistema MC">
<meta name="description" lang="es" content="Somos profesionales titulados en audiolog&iacute;a con m&aacute;s 30 a&ntilde;os de experiencia en el sector. Efectuamos estudios audiol&oacute;gicos completo y aplicaciones de aud&iacute;fonos digitales personalizados sistema MC" />
<meta name="description" lang="it" content="Siamo specialisti titolati in tecniche protesiche con piu'di 30 anni di esperienza nel settore. Realiziamo esame audiologico completo e applicazioni di apparecchi acustici digitali personalizzati sistema MC" />
<meta name="description" lang="cat" content="Som un equip d&#39;especialistes titulats en audiol&ograve;gia amb m&eacute;s de 30 anys d&#39;experi&egrave;ncia en el sector. Realitzem estudis audiol&ograve;cs complets i aplicacions d&#39;audi&ograve;fons digitals personalitzats sistema MC" />
<meta name="description" lang="en" content="We are a team of specialists graduated in Audiology with over 30 years of experience." />

<meta name="keywords" content="MC Consulta Auditiva, mcconsultaauditiva, aud&iacute;fonos digitales, gama alta, exclusivos, barcelona, mandri, cl&iacute;nica del o&iacute;do, pr&oacute;tesis auditiva digitales, apparecchi acustici digitali, clínica auditiva, apparecchi acustici gamma alta">
<meta name="author" content="MC Consulta Auditiva">

<link rel="apple-touch-icon" href="apple-touch-icon.png">

<link type="text/css" rel="stylesheet" href="css/normalize.css"/>
<?php /*
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="./css/bootstrap/bootstrap.min.css">
<link rel="stylesheet" href="./css/bootstrap/bootstrap-theme.css">
*/ ?>
<link type="text/css" rel="stylesheet" href="css/MC.css"/>

<script src="js/jquery-1.9.1.min.js"></script>
<script src="js/main.js"></script>
<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-57676404-1', 'auto');
	ga('send', 'pageview');

</script>
<?php /*
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
*/ ?>
<script src="js/jquery.jcarousel.min.js"></script>

<!-- Icons -->
<title><?php echo (empty($page_title)) ? 'MC Consulta Auditiva' : $page_title; ?></title>
