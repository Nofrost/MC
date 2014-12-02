<?php if(!isset($page)) { header('Location: home_page.php');die('Redirect a home_page'); } ?>

<footer>
	<div id="languages">
		<div id="button_CAT">CAT</div>
		<div id="button_ESP"<?php if($page == 'espanol.php') echo 'class="active"'; ?>>ESP</div>
		<div id="button_ENG">ENG</div>
		<div id="button_IT">IT</div>
	</div>
	<div id="legal">Aviso Legal</div>
</footer>
