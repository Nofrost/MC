<?php if(!isset($page)) { header( 'Location: home.php');die( 'Redirect a home'); }?>
<div class="directions">
	<div class="tr cat <?php if($lang != 'cat') echo 'hide'; ?>">
		<form action="contacto.php" method="post">
<?php		if(isset($_GET['r'])):
				foreach($_GET['r'] as $key => $r): ?>
			<input type="hidden" name="answers[<?php echo $key; ?>]" value="<?php echo $r; ?>" />
<?php			endforeach;
			endif; ?>

			<span>
				Ompli el formulari i nosaltres<br>
				contactarem amb vostè
			</span>
			<input class="name" type="text" required name="name" placeholder="Nom"><br>
			<input class="lastname"type="text" required name="lastname" placeholder="Cognoms"><br>
			<input class="phone"type="text" required name="phone" placeholder="Tel&egrave;fon"><br>
			<input class="submit" type="submit" value="Enviar" ><br>
			<p>
				<input type="checkbox" class="checkLegal" required name="Legal" />
				He llegit i accepto la <a href="home.php?page=Legal&lang=<?php echo $lang;?>" target="_blank">declaraci&oacute; de privacitat</a> de MC Consulta Auditiva
			</p>
		</form>

		<div class="direction">
			<b>M.C. Consulta Auditiva BARCELONA</b><br>
			C/Mandri, nº49<br>
			08022 Barcelona<br>
			Tel&egrave;fon 932 118 046<br><br>
			<b>M.C. Consulta Auditiva MALLORCA</b><br>
			C/Pla&ccedil;a Espanya, nº7<br>
			07002 Palma de Mallorca<br>
			Tel&egrave;fon 971 107 108
		</div>
		<?php if(isset($_GET['r']) && count($_GET['r'])): ?>
		<div class="result_test">
			<div class="arrow-right"></div>
			<div class="result_test_content">
				<?php if(count($_GET['r']) == 1): ?>
					Una resposta afirmativa<br><br>
				<?php else: ?>
					<?php echo count($_GET['r']); ?> respostes afirmatives<br><br>
				<?php endif; ?>
				Si la resposta ha estat afirmativa en m&eacute;s<br>de 3 situacions, ompli el formulari i els nostres especialistes l&#39;atendran.
			</div>
		</div>
		<?php endif; ?>
	</div>

	<div class="tr es <?php if($lang != 'es') echo 'hide'; ?>">
		<form action="contacto.php" method="post">
			<span>
				Rellene el formulario y nosotros<br>
				contactaremos con usted
			</span>
			<input class="name" type="text" required name="name" placeholder="Nombre"><br>
			<input class="lastname"type="text" required name="lastname" placeholder="Apellidos"><br>
			<input class="phone"type="text" required name="phone" placeholder="Tel&eacute;fono"><br>
			<input class="submit" type="submit" value="Enviar" ><br>
			<p>
				<input type="checkbox" class="checkLegal" required name="Legal" />
				He le&iacute;do y acepto la <a href="home.php?page=Legal&lang=<?php echo $lang;?>" target="_blank">declaraci&oacute;n de privacidad</a> de MC Consulta Auditiva
			</p>
		</form>
		<div class="direction">
			<b>M.C. Consulta Auditiva BARCELONA</b><br>
			CL/Mandri, nº49<br>
			08022 Barcelona<br>
			Tel&eacute;fono 932 118 046<br><br>
			<b>M.C. Consulta Auditiva MALLORCA</b><br>
			CL/Plaza Espa&ntilde;a, nº7<br>
			07002 Palma de Mallorca<br>
			Tel&eacute;fono 971 107 108
		</div>
		<?php if(isset($_GET['r']) && count($_GET['r'])): ?>
		<div class="result_test">
			<div class="arrow-right"></div>
			<div class="result_test_content">
				<?php if(count($_GET['r']) == 1): ?>
					Una respuesta afirmativa<br><br>
				<?php else: ?>
					<?php echo count($_GET['r']); ?> respuestas afirmativas<br><br>
				<?php endif; ?>
				Si la respuesta ha sido afirmativa en más<br>de 3 situaciones, rellene el formulario y nuestros especialistas le atender&aacute;n.
			</div>
		</div>
		<?php endif; ?>
	</div>
	<div class="tr en <?php if($lang != 'en') echo 'hide'; ?>">
		<form action="contacto.php" method="post">
			<span>
				Fill out the form and<br>
				we&#39;ll contact you
			</span>
			<input class="name" type="text" required name="name" placeholder="Name"><br>
			<input class="lastname"type="text" required name="lastname" placeholder="Last name"><br>
			<input class="phone"type="text" required name="phone" placeholder="Phone number"><br>
			<input class="submit" type="submit" value="Send" ><br>
			<p>
				<input type="checkbox" class="checkLegal" required name="Legal" />
				I&#39;ve read and accept <a href="home.php?page=Legal&lang=<?php echo $lang;?>" target="_blank">the privacy statement</a> of MC Consulta Auditiva
			</p>
		</form>
		<div class="direction">
			<b>M.C. Consulta Auditiva BARCELONA</b><br>
			Mandri, nº49<br>
			08022 Barcelona<br>
			Phone Number (+34) 932 118 046<br><br>
			<b>M.C. Consulta Auditiva MALLORCA</b><br>
			Plaza Espa&ntilde;a, nº7<br>
			07002 Palma de Mallorca<br>
			Phone Number (+34) 971 107 108
		</div>
		<?php if(isset($_GET['r']) && count($_GET['r'])): ?>
		<div class="result_test">
			<div class="arrow-right"></div>
			<div class="result_test_content">
				<?php if(count($_GET['r']) == 1): ?>
					One positive answer<br><br>
				<?php else: ?>
					<?php echo count($_GET['r']); ?> positive answers<br><br>
				<?php endif; ?>
				If the answer has been affirmative by<br>more than 3 situations, fill in the form<br>and our specialists will attend to you.
			</div>
		</div>
		<?php endif; ?>
	</div>
	<div class="tr it <?php if($lang != 'it') echo 'hide'; ?>">
			<form action="contacto.php" method="post">
			<span>
				Compila il formulario e<br>
				ti conttataremo
			</span>
			<input class="name" type="text" required name="name" placeholder="Nome"><br>
			<input class="lastname"type="text" required name="lastname" placeholder="Cognome"><br>
			<input class="phone"type="text" required name="phone" placeholder="Telefono"><br>
			<input class="submit" type="submit" value="Inviare" ><br>
			<p>
				<input type="checkbox" class="checkLegal" required name="Legal" />
				Ho letto e acetto <a href="home.php?page=Legal&lang=<?php echo $lang;?>" target="_blank">la dichiarazione di privacita&#39;</a>di MC Consulta Auditiva
			</p>
		</form>
		<div class="direction">
			<b>M.C. Consulta Auditiva BARCELONA</b><br>
			Mandri, nº49<br>
			08022 Barcelona<br>
			Telefono (+34) 932 118 046<br><br>
			<b>M.C. Consulta Auditiva MALLORCA</b><br>
			Plaza Espa&ntilde;a, nº7<br>
			07002 Palma de Mallorca<br>
			Telefono (+34) 971 107 108
		</div>
		<?php if(isset($_GET['r']) && count($_GET['r'])): ?>
		<div class="result_test">
			<div class="arrow-right"></div>
			<div class="result_test_content">
				<?php if(count($_GET['r']) == 1): ?>
					Un risposta affermative<br><br>
				<?php else: ?>
					<?php echo count($_GET['r']); ?> risposte affermative<br><br>
				<?php endif; ?>
				Se le risposte sono superiori a 3 situazioni,<br> compilare il modulo ed i nostri specialisti<br>ti conttateranno.
			</div>
		</div>
		<?php endif; ?>
	</div>
</div>
