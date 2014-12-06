<?php if(!isset($page)) { header('Location: home.php');die('Redirect a home'); } ?>

<footer>
	<div id="footer_wrapper">
		<div id="languages">
			<a id="button_CAT" href="home.php?page=<?php echo $page;?>&lang=cat" <?php if($lang == 'cat') echo 'class="active"'; ?>>CAT</a>
			<a id="button_ESP" href="home.php?page=<?php echo $page;?>&lang=es" <?php if($lang == 'es') echo 'class="active"'; ?>>ESP</a>
			<a id="button_ENG" href="home.php?page=<?php echo $page;?>&lang=en" <?php if($lang == 'en') echo 'class="active"'; ?>>ENG</a>
			<a id="button_IT" href="home.php?page=<?php echo $page;?>&lang=it" <?php if($lang == 'it') echo 'class="active"'; ?>>IT</a>
		</div>
		<a id="legal" href="home.php?page=Legal&lang=<?php echo $lang;?>"<?php if($page == 'Legal') echo 'class="active"'; ?>>
			<span class="tr cat <?php if($lang != 'cat') echo 'hide'; ?>">Av&iacute;s Legal</span>
			<span class="tr es <?php if($lang != 'es') echo 'hide'; ?>">Aviso Legal</span>
			<span class="tr en <?php if($lang != 'en') echo 'hide'; ?>">Legal warnning</span>
			<span class="tr it <?php if($lang != 'it') echo 'hide'; ?>">Avviso Legale</span>
		</a>
	</div>
</footer>
