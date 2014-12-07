<?php if(!isset($page)) { header( 'Location: home.php');die( 'Redirect a home'); }?>
<div id="title_test">
	<div>
		<span class="tr cat <?php if($lang != 'cat') echo 'hide'; ?>">Comprovi l&#39;estat de la seva audici&oacute;</span>
		<span class="tr es <?php if($lang != 'es') echo 'hide'; ?>">Compruebe el estado de su audici&oacute;n</span>
		<span class="tr en <?php if($lang != 'en') echo 'hide'; ?>">Verify the state of your audition</span>
		<span class="tr it <?php if($lang != 'it') echo 'hide'; ?>">Comprova la tua audizione</span>
	</div>
</div>
<div id="white_line"></div>
<div id="question_test">
	<input type="radio" id="radio1" name="radios1"value="true">
   		<label for="radio1">.</label>
	<input type="radio" id="radio2" name="radios2"value="true">
   		<label for="radio2">.</label>
	<input type="radio" id="radio3" name="radios3"value="true">
   		<label for="radio3">.</label>
	<input type="radio" id="radio4" name="radios4"value="true">
   		<label for="radio4">.</label>
	<input type="radio" id="radio5" name="radios5"value="true">
   		<label for="radio5">.</label>
	<input type="radio" id="radio6" name="radios6"value="true">
   		<label for="radio6">.</label>
	<input type="radio" id="radio7" name="radios7"value="true">
   		<label for="radio7">.</label>
	<input type="radio" id="radio8" name="radios8"value="true">
   		<label for="radio8">.</label>
	<span class="tr cat <?php if($lang != 'cat') echo 'hide'; ?>">
		<span>Senyali les situaciones on les que les respostes siguin afirmatives</span>
		<ol>
			<li>A vegades sent sense entendre les paraules?</li>
			<li>Es fa repetir les paraules?</li>
			<li>Li costa seguir una conversa?</li>
			<li>Li resulta dificult&oacute;s parlar per tel&egrave;fon?</li>
			<li>Posa el volum de la TV/R&agrave;dio m&eacute;s alt que la resta de la seva fam&iacute;lia?</li>
			<li>Pateix de brunzits a l'o&iuml;da (ac&uacute;fens)?</li>
			<li>Se sent a&iuml;llat/ada en les reunions familiars o amb amics perqu&egrave; no ent&eacute;n b&eacute; el que diuen?</li>
			<li>Les persones que conviuen amb vost&egrave; li comenten que no sent alguns sons?</li>
		</ol>
		<span>Para finalizar el test clica aquí</span>
	</span>
	<span class="tr es <?php if($lang != 'es') echo 'hide'; ?>">
		<span>Se&ntilde;ale las situaciones en las que las respuestas sean positivas</span>
		<ol>
			<li>¿A veces oye sin entender las palabras?</li>
			<li>¿Se hace repetir las palabras?</li>
			<li>¿Le cuesta seguir una conversaci&oacute;n?</li>
			<li>¿Le resulta dificultoso hablar por tel&eacute;fono?</li>
			<li>¿Pone el volumen de la TV/Radio más alto que el resto de su familia?</li>
			<li>¿Padece de zumbidos en el o&iacute;do (ac&uacute;fenos)?</li>
			<li>¿Se siente aislado/a en las reuniones familiares o con amigos porque no entiende bien lo que dicen?</li>
			<li>¿Las personas que conviven con usted le comentan que no oye algunos sonidos?</li>
		</ol>
		<span>Para finalizar el test clica aquí</span>
	</span>
	<span class="tr en <?php if($lang != 'en') echo 'hide'; ?>">
		<ol>
			<li>Sometimes do you hear without understanding the words?</li>
			<li>It makes to repeat the words?</li>
			<li>Is it complicated to you to follow a conversation?</li>
			<li>Is it tricky to you to speak by phone?</li>
			<li>Do you put the volume of the TV / radio higher than the rest of your family?</li>
			<li>Do you suffer from buzzes in the ear(tinnitus)?</li>
			<li>Do you feel isolated in the familiar meetings or with friends because you don't understand well what they say?</li>
			<li>Do the people who live with you mention to you that you don't hear any sounds?</li>
		</ol>
	</span>
	<span class="tr it <?php if($lang != 'it') echo 'hide'; ?>">
		<ol>
			<li>Senti ma non capisci le parole?</li>
			<li>Ti fai ripetere le parole?</li>
			<li>Fai fatica a seguire una conversazione?</li>
			<li>Fai fatica a sentire al teléfono?</li>
			<li>Usi il volume TV/radio piu' alto degli altri?</li>
			<li>Senti fischi nelle orecchie (acufeni)?</li>
			<li>Ti senti isolato in riunioni familiarie o con amicí per non capire bene le conversazioni?</li>
			<li>Le persone Che vivono con te notano Che non senti alcuni suoni?</li>
		</ol>
	</span>
</div>
<?php /*<a id="button_click" href="home.php?page=Contact&lang=<?php echo $lang;?>">
	<span class="tr cat <?php if($lang != 'cat') echo 'hide'; ?>">
		CLIQUI AQU&Iacute;<br>
		Els nostres especialistes<br>
		es posaran en contacte<br>
		amb vost&egrave;
	</span>
	<span class="tr es <?php if($lang != 'es') echo 'hide'; ?>">
		CLICK AQU&Iacute;<br>
		Nuestros especialistas<br>
		se pondr&aacute;n en contacto<br>
		con usted
	</span>
	<span class="tr en <?php if($lang != 'en') echo 'hide'; ?>">
		CLICK HERE<br>
		Our specialists<br>
		will contact you
	</span>
	<span class="tr it <?php if($lang != 'it') echo 'hide'; ?>">
		CLIQUI AQU&Iacute;<br>
		Els nostres especialistes eses posaran en contacteamb vost&egrave;
	</span>
</a>*/ ?>
