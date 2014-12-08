<?php if(!isset($page)) { header( 'Location: home.php');die( 'Redirect a home'); }?>
<div class="directions">
	<div class="tr cat <?php if($lang != 'cat') echo 'hide'; ?>">
		<form action="form">
			<span>
				Ompli el formulari i nosaltres<br>
				contactarem amb vostè
			</span>
			<input class="name" type="text" name="name" value="Nom" onfocus="if (this.value=='Nom') this.value='';"onblur="if (this.value=='') this.value='Nom';"><br>
			<input class="lastname"type="text" name="lastname" value="Cognoms" onfocus="if (this.value=='Cognoms') this.value='';"onblur="if (this.value=='') this.value='Cognoms';"><br>
			<input class="phone"type="text" name="phone" value="Tel&egrave;fon" onfocus="if (this.value=='Tel&egrave;fon') this.value='';"onblur="if (this.value=='') this.value='Tel&egrave;fon';"><br>
			<input class="submit" type="submit" value="Enviar" disabled><br>
			<p class="shit">
				<input type="checkbox" id="check" name="Legal" value="check"/>
					He llegit i accepto la <a href="home.php?page=Legal&lang=<?php echo $lang;?>">declaraci&oacute; de privacitat</a> de MC Consulta Auditiva
			</p>
		</form>

		<div>
			<b>M.C. Consulta Auditiva BARCELONA</b><br>
			C/Mandri, nº49<br>
			08022 Barcelona<br>
			Tel&egrave;fon 932 118 046<br><br>
			<b>M.C. Consulta Auditiva MALLORCA</b><br>
			C/Pla&ccedil;a Espanya, nº7<br>
			07002 Palma de Mallorca<br>
			Tel&egrave;fon 971 107 108
		</div>
		<div id="result_test">
			X respostes afirmatives<br><br>
			Si la resposta ha estat afirmativa en m&eacute;s<br>de 3 situacions, ompli el formulari i els nostres especialistes l&#39;atendran.
		</div>
	</div>

	<div class="tr es <?php if($lang != 'es') echo 'hide'; ?>">
		<form action="demo_form.asp">
			<span>
				Rellene el formulario y nosotros<br>
				contactaremos con usted
			</span>
			<input class="name" type="text" name="name" value="Nombre" onfocus="if (this.value=='Nombre') this.value='';"onblur="if (this.value=='') this.value='Nombre';"><br>
			<input class="lastname"type="text" name="lastname" value="Apellidos" onfocus="if (this.value=='Apellidos') this.value='';"onblur="if (this.value=='') this.value='Apellidos';"><br>
			<input class="phone"type="text" name="phone" value="Tel&eacute;fono" onfocus="if (this.value=='Tel&eacute;fono') this.value='';"onblur="if (this.value=='') this.value='Tel&eacute;fono';"><br>
			<input class="submit" type="submit" value="Enviar" disabled><br>
			<p>
				<input type="checkbox" name="Legal" value="Privacity">
				He le&iacute;do y acepto la <a href="home.php?page=Legal&lang=<?php echo $lang;?>">declaraci&oacute;n de privacidad</a> de MC Consulta Auditiva
			</p>
		</form>
		<div>
			<b>M.C. Consulta Auditiva BARCELONA</b><br>
			CL/Mandri, nº49<br>
			08022 Barcelona<br>
			Tel&eacute;fono 932 118 046<br><br>
			<b>M.C. Consulta Auditiva MALLORCA</b><br>
			CL/Plaza Espa&ntilde;a, nº7<br>
			07002 Palma de Mallorca<br>
			Tel&eacute;fono 971 107 108
		</div>
		<div id="result_test">
			X respuestas afirmativas<br><br>
			Si la respuesta ha sido afirmativa en más<br>de 3 situaciones, rellene el formulario y nuestros especialistas le atender&aacute;n.
		</div>
	</div>
	<div class="tr en <?php if($lang != 'en') echo 'hide'; ?>">
		<form action="demo_form.asp">
			<span>
				Fill out the form and<br>
				we&#39;ll contact you
			</span>
			<input class="name" type="text" name="name" value="Name" onfocus="if (this.value=='Name') this.value='';"onblur="if (this.value=='') this.value='Name';"><br>
			<input class="lastname"type="text" name="lastname" value="Last name" onfocus="if (this.value=='Last name') this.value='';"onblur="if (this.value=='') this.value='Last name';"><br>
			<input class="phone"type="text" name="phone" value="Phone number" onfocus="if (this.value=='Phone number') this.value='';"onblur="if (this.value=='') this.value='Phone number';"><br>
			<input class="submit" type="submit" value="Send" disabled><br>
			<p>
				<input type="checkbox" name="Legal" value="Privacity">
				I&#39;ve read and accept <a href="home.php?page=Legal&lang=<?php echo $lang;?>">the privacy statement</a> of MC Consulta Auditiva
			</p>
		</form>
		<div>
			<b>M.C. Consulta Auditiva BARCELONA</b><br>
			Mandri, nº49<br>
			08022 Barcelona<br>
			Phone Number (+34) 932 118 046<br><br>
			<b>M.C. Consulta Auditiva MALLORCA</b><br>
			Plaza Espa&ntilde;a, nº7<br>
			07002 Palma de Mallorca<br>
			Phone Number (+34) 971 107 108
		</div>
		<div id="result_test">
			X positive answers<br><br>
			If the answer has been affirmative by<br>more than 3 situations, fill in the form<br>and our specialists will attend to you.
		</div>
	</div>
	<div class="tr it <?php if($lang != 'it') echo 'hide'; ?>">
			<form action="demo_form.asp">
			<span>
				Compili il formulario e <br>
				la conttataremo
			</span>
			<input class="name" type="text" name="name" value="Nome" onfocus="if (this.value=='Nome') this.value='';"onblur="if (this.value=='') this.value='Nome';"><br>
			<input class="lastname"type="text" name="lastname" value="Cognome" onfocus="if (this.value=='Cognome') this.value='';"onblur="if (this.value=='') this.value='Cognome';"><br>
			<input class="phone"type="text" name="phone" value="Telefono" onfocus="if (this.value=='Telefono') this.value='';"onblur="if (this.value=='') this.value='Telefono';"><br>
			<input class="submit" type="submit" value="Inviare" disabled><br>
			<p>
				<input type="checkbox" name="Legal" value="Privacity">
				Ho letto e acetto <a href="home.php?page=Legal&lang=<?php echo $lang;?>">la dichiarazione di privacita&#39;</a>di MC Consulta Auditiva
			</p>
		</form>
		<div>
			<b>M.C. Consulta Auditiva BARCELONA</b><br>
			Mandri, nº49<br>
			08022 Barcelona<br>
			Telefono (+34) 932 118 046<br><br>
			<b>M.C. Consulta Auditiva MALLORCA</b><br>
			Plaza Espa&ntilde;a, nº7<br>
			07002 Palma de Mallorca<br>
			Telefono (+34) 971 107 108
		</div>
		<div id="result_test">
			X respostes afirmatives<br><br>
			Se la risposta è sì superiore a 3 situazioni,<br> compilare il modulo ed i nostri specialisti<br> saranno presenti.
		</div>
	</div>
</div>

<?php /*
	if($_POST["submit"]) {
		$name = $_POST['name'];
		$last_name = $_POST['lastname'];
		$phone = $_POST['phone'];
		$email_from ="your@email.address";
		$to = "danmarc.rb@gmail.com";
		$headers = "From: $email_from \r\n";
		mail($to,$email_subject,$email_body,$headers);
		$thankYou="<p>Thank you! Your message has been sent.</p>";
	}*/
?>
