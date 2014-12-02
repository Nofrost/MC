<?php if(!isset($page)) { header( 'Location: home_page.php');die( 'Redirect a home_page'); }?>
<div id="main">
	<div id="main_wrapper">
		<div id="content_main_presentation">
			<?php include "main_presentation.php"?>
		</div>
		<div id="content_main_objectives" class="hide">
			<?php include "main_objectives.php"?>
		</div>
		<div id="content_main_services" class="hide">
			<?php include "main_services.php"?>
		</div>
		<div id="content_main_test" class="hide">
			<?php include "main_test.php"?>
		</div>
		<div id="content_main_contact" class="hide">
			<?php include "main_contact.php"?>
		</div>

	</div>
</div>
