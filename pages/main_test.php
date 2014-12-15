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
<div id="test_wrapper">
	<form id="question_test" action="home.php" method="GET">
		<input type="hidden" name="page" value="Contact">
		<input type="hidden" name="lang" value="<?php echo $lang;?>">
		<div class="intro">
			<span class="tr cat <?php if($lang != 'cat') echo 'hide'; ?>">
				Senyali les situaciones on les respostes siguin afirmatives:
			</span>
			<span class="tr es <?php if($lang != 'es') echo 'hide'; ?>">
				Se&ntilde;ale las situaciones donde las respuestas sean afirmativas:
			</span>
			<span class="tr en <?php if($lang != 'en') echo 'hide'; ?>">
				Check the situations where the answer is affirmative:
			</span>
			<span class="tr it <?php if($lang != 'it') echo 'hide'; ?>">
				Segnale le situazioni in cui le risposte siano affermative:
			</span>
		</div>
		<br />
		<div id="radio_list">
			<input type="checkbox" id="r[1]" name="r[1]" class="unselectable" />
				<label for="r[1]" class="unselectable">.</label>
			<input type="checkbox" id="r[2]" name="r[2]" class="unselectable" />
				<label for="r[2]" class="unselectable">.</label>
			<input type="checkbox" id="r[3]" name="r[3]" class="unselectable" />
				<label for="r[3]" class="unselectable">.</label>
			<input type="checkbox" id="r[4]" name="r[4]" class="unselectable" />
				<label for="r[4]" class="unselectable">.</label>
			<input type="checkbox" id="r[5]" name="r[5]" class="unselectable" />
				<label for="r[5]" class="unselectable">.</label>
			<input type="checkbox" id="r[6]" name="r[6]" class="unselectable" />
				<label for="r[6]" class="unselectable">.</label>
			<input type="checkbox" id="r[7]" name="r[7]" class="unselectable" />
				<label for="r[7]" class="unselectable">.</label>
			<input type="checkbox" id="r[8]" name="r[8]" class="unselectable" />
				<label for="r[8]" class="unselectable">.</label>
		</div>
		<div id="question_text">
			<span class="tr cat <?php if($lang != 'cat') echo 'hide'; ?>">
				<div id="ord_list">
					<ol>
						<li>A vegades sent sense entendre les paraules?</li>
						<li>Es fa repetir les paraules?</li>
						<li>Li costa seguir una conversa?</li>
						<li>Li resulta dificult&oacute;s parlar per tel&egrave;fon?</li>
						<li>Posa el volum de la TV/R&agrave;dio m&eacute;s alt que la resta de la seva fam&iacute;lia?</li>
						<li>Pateix de brunzits a l'o&iuml;da (ac&uacute;fens)?</li>
						<li>Se sent a&iuml;llat/da en les reunions familiars o amb amics perqu&egrave; no ent&eacute;n b&eacute; el que diuen?</li>
						<li>Les persones que conviuen amb vost&egrave; li comenten que no sent alguns sons?</li>
					</ol>
				</div><br>
				<div>Per finalitzar el test<input type="submit" id="button_click" value="cliqui aqu&iacute" /></div>
			</span>
			<span class="tr es <?php if($lang != 'es') echo 'hide'; ?>">
				<div id="ord_list">
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
				</div><br>
				<div>Para finalizar el test<input type="submit" id="button_click" value="clique aqu&iacute" /></div>
			</span>
			<span class="tr en <?php if($lang != 'en') echo 'hide'; ?>">
				<div id="ord_list">
					<ol>
						<li>Do you sometimes hear without understanding the words?</li>
						<li>Do you need people to repeat you the words?</li>
						<li>Is it complicated to you to follow a conversation?</li>
						<li>Is it tricky to you to talk on the phone?</li>
						<li>Do you put the volume of the TV / radio higher than the rest of your family?</li>
						<li>Do you suffer from buzzes in the ear(tinnitus)?</li>
						<li>Do you feel isolated in the familiar meetings or with friends because you don't understand well what they say?</li>
						<li>Do the people who live with you mention to you that you don't hear correctly?</li>
					</ol>
				</div><br>
				<div><input type="submit" id="button_click" value="Click here" />to finish the test</div>
			</span>
			<span class="tr it <?php if($lang != 'it') echo 'hide'; ?>">
				<div id="ord_list">
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
				</div><br>
				<div><input type="submit" id="button_click" value="Clicca qui" />per terminare il test</div>
			</span>
		</div>
		<div style="clear: both"></div>
	</form>
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
