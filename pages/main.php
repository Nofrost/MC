<?php if(!isset($page)) { header( 'Location: home.php');die( 'Redirect a home'); }?>
<div id="main">
	<div id="main_wrapper">
		<div id="content_main_presentation" <?php if($page != 'Presentation') echo 'class="hide"'; ?>>
			<?php include "main_presentation.php"; ?>
		</div>
		<div id="content_main_objectives" <?php if($page != 'Objectives') echo 'class="hide"'; ?>>
			<?php include "main_objectives.php"; ?>
		</div>
		<div id="content_main_services" <?php if($page != 'Services') echo 'class="hide"'; ?>>
			<?php include "main_services.php"; ?>
		</div>
		<div id="content_main_test" <?php if($page != 'Test') echo 'class="hide"'; ?>>
			<?php include "main_test.php"; ?>
		</div>
		<div id="content_main_contact" <?php if($page != 'Contact') echo 'class="hide"'; ?>>
			<?php include "main_contact.php"; ?>
		</div>
		<div id="content_main_legal" <?php if($page != 'Legal') echo 'class="hide"'; ?>>
			<?php include "main_legal.php"; ?>
		</div>
	</div>
</div>
