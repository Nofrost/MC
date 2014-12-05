<?php if(!isset($page)) { header( 'Location: index.php');die( 'Redirect a index'); }?>
<div class="directions">
	<div class="tr cat <?php if($lang != 'cat') echo 'hide'; ?>">
		<form action="demo_form.asp">
			<span>
				Ompli el formulari i nosaltres<br>
				contactarem amb vostè
			</span>
			<input class="name" type="text" name="Name" value="Nom" onfocus="if (this.value=='Nom') this.value='';"onblur="if (this.value=='') this.value='Nom';"><br>
			<input class="lastname"type="text" name="LastName" value="Cognoms" onfocus="if (this.value=='Cognoms') this.value='';"onblur="if (this.value=='') this.value='Cognoms';"><br>
			<input class="mail"type="text" name="mail" value="E-mail" onfocus="if (this.value=='E-mail') this.value='';"onblur="if (this.value=='') this.value='E-mail';"><br>
			<input class="submit" type="submit" value="Enviar">
		</form>
		<span>
			<b>M.C. Consulta Auditiva BARCELONA</b><br>
			C/Mandri, nº49<br>
			08022 Barcelona<br>
			Tel&egrave;fon 932 118 046<br><br><br>
			<b>M.C. Consulta Auditiva MALLORCA</b><br>
			C/Pla&ccedil;a Espanya, nº7<br>
			07002 Palma de Mallorca<br>
			Tel&egrave;fon 971 107 108
		</span>
	</div>

	<div class="tr es <?php if($lang != 'es') echo 'hide'; ?>">
		<form action="demo_form.asp">
			<span>
				Rellene el formulario y nosotros<br>
				contactaremos con usted
			</span>
			<input class="name" type="text" name="Name" value="Nombre" onfocus="if (this.value=='Nombre') this.value='';"onblur="if (this.value=='') this.value='Nombre';"><br>
			<input class="lastname"type="text" name="LastName" value="Apellidos" onfocus="if (this.value=='Apellidos') this.value='';"onblur="if (this.value=='') this.value='Apellidos';"><br>
			<input class="mail"type="text" name="mail" value="E-mail" onfocus="if (this.value=='E-mail') this.value='';"onblur="if (this.value=='') this.value='E-mail';"><br>
			<input class="submit" type="submit" value="Enviar">
		</form>
		<span>
			<b>M.C. Consulta Auditiva BARCELONA</b><br>
			CL/Mandri, nº49<br>
			08022 Barcelona<br>
			Tel&eacute;fono 932 118 046<br><br><br>
			<b>M.C. Consulta Auditiva MALLORCA</b><br>
			CL/Plaza Espa&ntilde;a, nº7<br>
			07002 Palma de Mallorca<br>
			Tel&eacute;fono 971 107 108
		</span>
	</div>

	<div class="tr en <?php if($lang != 'en') echo 'hide'; ?>">
		<form action="demo_form.asp">
			<span>
				Fill out the application form<br>
				and we contact you
			</span>
			<input class="name" type="text" name="Name" value="Name" onfocus="if (this.value=='Name') this.value='';"onblur="if (this.value=='') this.value='Name';"><br>
			<input class="lastname"type="text" name="LastName" value="LastName" onfocus="if (this.value=='LastName') this.value='';"onblur="if (this.value=='') this.value='LastName';"><br>
			<input class="mail"type="text" name="mail" value="E-mail" onfocus="if (this.value=='E-mail') this.value='';"onblur="if (this.value=='') this.value='E-mail';"><br>
			<input class="submit" type="submit" value="Send">
		</form>
		<span>
			<b>M.C. Consulta Auditiva BARCELONA</b><br>
			Mandri, nº49<br>
			08022 Barcelona<br>
			Phone Number (+34) 932 118 046<br><br><br>
			<b>M.C. Consulta Auditiva MALLORCA</b><br>
			Plaza Espa&ntilde;a, nº7<br>
			07002 Palma de Mallorca<br>
			Phone Number (+34) 971 107 108
		</span>
	</div>
	<div class="tr it <?php if($lang != 'it') echo 'hide'; ?>">
		<span>
			<b>M.C. Consulta Auditiva BARCELONA</b><br>
			Mandri, nº49<br>
			08022 Barcelona<br>
			Telefono (+34) 932 118 046<br><br><br>
			<b>M.C. Consulta Auditiva MALLORCA</b><br>
			Plaza Espa&ntilde;a, nº7<br>
			07002 Palma de Mallorca<br>
			Telefono (+34) 971 107 108
		</span>
	</div>
</div>
