<?php if(!isset($page)) { header('Location: home_page.php');die('Redirect a home_page'); } ?>

<header>
	<div id="header_wrapper">
		<a id="logo" href="home.php?page=Presentation&lang=<?php echo $lang;?>"></a>
		<nav>
			<a id="objectives" href="home.php?page=Objectives&lang=<?php echo $lang;?>"<?php if($page == 'Objectives') echo 'class="active"'; ?>>
				<span class="tr cat <?php if($lang != 'cat') echo 'hide'; ?>">Qui som</span>
				<span class="tr es <?php if($lang != 'es') echo 'hide'; ?>">Qui&eacute;nes somos</span>
				<span class="tr en <?php if($lang != 'en') echo 'hide'; ?>">Who we are</span>
				<span class="tr it <?php if($lang != 'it') echo 'hide'; ?>">Chi siamo</span>
			</a>
			<a id="services" href="home.php?page=Services&lang=<?php echo $lang;?>"<?php if($page == 'Services') echo 'class="active"'; ?>>
				<span class="tr cat <?php if($lang != 'cat') echo 'hide'; ?>">Serveis</span>
				<span class="tr es <?php if($lang != 'es') echo 'hide'; ?>">Servicios</span>
				<span class="tr en <?php if($lang != 'en') echo 'hide'; ?>">Services</span>
				<span class="tr it <?php if($lang != 'it') echo 'hide'; ?>">Servizi</span>
			</a>
			<a id="test" href="home.php?page=Test&lang=<?php echo $lang;?>"<?php if($page == 'Test') echo 'class="active"'; ?>>
				<span class="tr cat <?php if($lang != 'cat') echo 'hide'; ?>">Test auditiu</span>
				<span class="tr es <?php if($lang != 'es') echo 'hide'; ?>">Test auditivo</span>
				<span class="tr en <?php if($lang != 'en') echo 'hide'; ?>">Hearing test</span>
				<span class="tr it <?php if($lang != 'it') echo 'hide'; ?>">Test auditivo</span>
			</a>
			<a id="contact" href="home.php?page=Contact&lang=<?php echo $lang;?>"<?php if($page == 'Contact') echo 'class="active"'; ?>>
				<span class="tr cat <?php if($lang != 'cat') echo 'hide'; ?>">Contacte</span>
				<span class="tr es <?php if($lang != 'es') echo 'hide'; ?>">Contacto</span>
				<span class="tr en <?php if($lang != 'en') echo 'hide'; ?>">Contact</span>
				<span class="tr it <?php if($lang != 'it') echo 'hide'; ?>">Come contattarci</span>
			</a>
		</nav>
	</div>
</header>

