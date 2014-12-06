<?php if(!isset($page)) { header( 'Location: home.php');die( 'Redirect a home'); }?>
<div id="title_test">
	<div>
		<span class="tr cat <?php if($lang != 'cat') echo 'hide'; ?>">Comprovi l&#39;estat de la seva audici&oacute;</span>
		<span class="tr es <?php if($lang != 'es') echo 'hide'; ?>">Compruebe el estado de su audici&oacute;n</span>
		<span class="tr en <?php if($lang != 'en') echo 'hide'; ?>">Verify the state of your audition</span>
		<span class="tr it <?php if($lang != 'it') echo 'hide'; ?>">Comprova la tua audizione</span>
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
		<!--<span>Si ha respost S&iacute; a 3 o m&eacute;s ocasions, contacti amb nosaltres si desitja rebre informaci&oacute; sobre el sistema RIE.</span>-->
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
		<!--<span>Si ha respondido S&iacute; en 3 o m&aacute;s ocasiones, contacte con nosotros si desea recibir informaci&oacute;n sobre el sistema RIE.</span>-->
	</span>
	<span class="tr en <?php if($lang != 'en') echo 'hide'; ?>">
		<ol>
			<li><b>1)</b> Sometimes do you hear without understanding the words?</li>
			<li><b>2)</b> It makes to repeat the words?</li>
			<li><b>3)</b> Is it complicated to you to follow a conversation?</li>
			<li><b>4)</b> Is it tricky to you to speak by phone?</li>
			<li><b>5)</b> Do you put the volume of the TV / radio higher than the rest of your family?</li>
			<li><b>6)</b> Do you suffer from buzzes in the ear(tinnitus)?</li>
			<li><b>7)</b> Do you feel isolated in the familiar meetings or with friends because you don't understand well what they say?</li>
			<li><b>8)</b> Do the people who live with you mention to you that you don't hear any sounds?</li>
		</ol>
	</span>
	<span class="tr it <?php if($lang != 'it') echo 'hide'; ?>">
		<ol>
			<li><b>1)</b> Senti ma non capisci le parole?</li>
			<li><b>2)</b> Ti fai ripetere le parole?</li>
			<li><b>3)</b> Fai fatica a seguire una conversazione?</li>
			<li><b>4)</b> Fai fatica a sentire al teléfono?</li>
			<li><b>5)</b> Usi il volume TV/radio piu' alto degli altri?</li>
			<li><b>6)</b> Senti fischi nelle orecchie (acufeni)?</li>
			<li><b>7)</b> Ti senti isolato in riunioni familiarie o con amicí per non capire bene le conversazioni?</li>
			<li><b>8)</b> Le persone Che vivono con te notano Che non senti alcuni suoni?</li>
		</ol>
	</span>
</div>
<a id="button_click" href="home.php?page=Contact&lang=<?php echo $lang;?>">
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
</a>
