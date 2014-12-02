<?php if(!isset($page)) { header('Location: home_page.php');die('Redirect a home_page'); } ?>

<header>
	<div id="header_wrapper">
		<a id="logo" href="home.php?page=Presentation&lang=<?php echo $lang;?>"></a>
		<nav>
			<a id="objectives" href="home.php?page=Objectives&lang=<?php echo $lang;?>">
				<span class="tr cat <?php if($lang != 'cat') echo 'hide'; ?>">Qui som</span>
				<span class="tr es <?php if($lang != 'es') echo 'hide'; ?>">Qui&eacute;nes somos</span>
				<span class="tr en <?php if($lang != 'en') echo 'hide'; ?>">Who are we</span>
				<span class="tr it <?php if($lang != 'it') echo 'hide'; ?>">Que cosa fazemos</span>
			</a>
			<a id="services" href="home.php?page=Services&lang=<?php echo $lang;?>">
				<span class="tr cat <?php if($lang != 'cat') echo 'hide'; ?>">Serveis</span>
				<span class="tr es <?php if($lang != 'es') echo 'hide'; ?>">Servicios</span>
				<span class="tr en <?php if($lang != 'en') echo 'hide'; ?>">Services</span>
				<span class="tr it <?php if($lang != 'it') echo 'hide'; ?>">Servizio</span>
			</a>
			<div id="test">Test Auditivo</div>
			<div id="contact">Contacto</div>
		</nav>
	</div>
</header>
