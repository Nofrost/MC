<?php if(!isset($page)) { header( 'Location: index.php');die( 'Redirect a index'); }?>
<div id="title_test">
	<div>
		<span class="tr cat <?php if($lang != 'cat') echo 'hide'; ?>">Comprovi l&#39;estat de la seva audici&oacute;</span>
		<span class="tr es <?php if($lang != 'es') echo 'hide'; ?>">Compruebe el estado de su audici&oacute;n</span>
		<span class="tr en <?php if($lang != 'en') echo 'hide'; ?>">Check the status of your hearing</span>
		<span class="tr it <?php if($lang != 'it') echo 'hide'; ?>">Controllare lo stato del vostro udito</span>
	</div>
</div>
<div id="question_test">
	<span class="tr cat <?php if($lang != 'cat') echo 'hide'; ?>">
		<ol>
			<li><b>1)</b> A vegades sent sense entendre les paraules?</li>
			<li><b>2)</b> Es fa repetir les paraules?</li>
			<li><b>3)</b> Li costa seguir una conversa?</li>
			<li><b>4)</b> Li resulta dificult&oacute;s parlar per tel&egrave;fon?</li>
			<li><b>5)</b> Posa el volum de la TV/R&agrave;dio m&eacute;s alt que la resta de la seva fam&iacute;lia?</li>
			<li><b>6)</b> Pateix de brunzits a l'o&iuml;da (ac&uacute;fens)?</li>
			<li><b>7)</b> Se sent a&iuml;llat/ada en les reunions familiars o amb amics perqu&egrave; no ent&eacute;n b&eacute; el que diuen?</li>
			<li><b>8)</b> Les persones que conviuen amb vost&egrave; li comenten que no sent alguns sons?</li>
		</ol>
		<span>Si ha respost S&iacute; a 3 o m&eacute;s ocasions, contacti amb nosaltres si desitja rebre informaci&oacute; sobre el sistema RIE.</span>
	</span>
	<span class="tr es <?php if($lang != 'es') echo 'hide'; ?>">
		<ol>
			<li><b>1)</b> ¿A veces oye sin entender las palabras?</li>
			<li><b>2)</b> ¿Se hace repetir las palabras?</li>
			<li><b>3)</b> ¿Le cuesta seguir una conversaci&oacute;n?</li>
			<li><b>4)</b> ¿Le resulta dificultoso hablar por tel&eacute;fono?</li>
			<li><b>5)</b> ¿Pone el volumen de la TV/Radio más alto que el resto de su familia?</li>
			<li><b>6)</b> ¿Padece de zumbidos en el o&iacute;do (ac&uacute;fenos)?</li>
			<li><b>7)</b> ¿Se siente aislado/a en las reuniones familiares o con amigos porque no entiende bien lo que dicen?</li>
			<li><b>8)</b> ¿Las personas que conviven con usted le comentan que no oye algunos sonidos?</li>
		</ol>
		<span>Si ha respondido S&iacute; en 3 o m&aacute;s ocasiones, contacte con nosotros si desea recibir informaci&oacute;n sobre el sistema RIE.</span>
	</span>
</div>
