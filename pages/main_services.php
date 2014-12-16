<?php if(!isset($page)) { header( 'Location: home.php');die( 'Redirect a home'); }?>
<div id="trans">
	<video <?php if($page === 'Services') echo "preload"; ?> width="1024" height="auto" scale="tofit" id="video-services" poster="Images/cara_retocada.jpg">
			<source src="videos/MC_spot-3_v3.ogg" type="video/ogg" />
			<source src="videos/MC_spot-3_v3.mp4" type="video/mp4" />
	</video>
</div>

<div id="services_title">
	<div>
		<span class="tr cat <?php if($lang != 'cat') echo 'hide'; ?>">Qu&egrave; inclouen<br>els nostres serveis?</span>
		<span class="tr es <?php if($lang != 'es') echo 'hide'; ?>">¿Qu&eacute; incluyen<br>nuestros servicios?</span>
		<span class="tr en <?php if($lang != 'en') echo 'hide'; ?>">What is included<br>in our services?</span>
		<span class="tr it <?php if($lang != 'it') echo 'hide'; ?>">Che cosa è incluso<br>nei nostri servizi?</span>
	</div>
</div>
<div id="all_services">
	<span class="tr cat <?php if($lang != 'cat') echo 'hide'; ?>">
		<ul>
			<li>Estudi audiol&ograve;gic gratu&iuml;t</li>
			<li>Nous audi&ograve;fons digitals</li>
			<li>Garantia d&#39;adaptaci&oacute;</li>
			<li>Financiaci&oacute; a mida</li>
			<li>Assist&egrave;ncia a domicili</li>
			<li>Piles i accessoris</li>
		</ul>
	</span>
	<span class="tr es <?php if($lang != 'es') echo 'hide'; ?>">
		<ul>
			<li>Estudio audiol&oacute;gico gratuito</li>
			<li>Nuevos aud&iacute;fonos digitales</li>
			<li>Garant&iacute;a de adaptaci&oacute;n</li>
			<li>Financiaci&oacute;n a medida</li>
			<li>Asistencia a domicilio</li>
			<li>Pilas y accesorios</li>
		</ul>
	</span>
	<span class="tr en <?php if($lang != 'en') echo 'hide'; ?>">
		<ul>
			<li>Free hearing study</li>
			<li>New digital hearing aids</li>
			<li>Guarantee of adaption</li>
			<li>Tailored financing options</li>
			<li>Home assitance</li>
			<li>Batteries and accessories</li>
		</ul>
	</span>
	<span class="tr it <?php if($lang != 'it') echo 'hide'; ?>">
		<ul>
			<li>Esame audiologico gratuito</li>
			<li>Nuovi apparechi digitali</li>
			<li>Applicazioni con garanzia</li>
			<li>Finanziamenti personalizzati</li>
			<li>Assistenza a domicilio</li>
			<li>Pile e accessori</li>
		</ul>
	</span>
</div>


































	<?php /*
		<div class="circle">
			<div>Estudio<br>audiol&oacute;gico<br>gratuito</div>
		</div>
		<div class="circle">
			<div>Nuevos<br>ad&iacute;fonos<br>digitales</div>
		</div>
		<div class="circle">
			<div>Garant&iacute;a de<br>adaptaci&oacute;n</div>
		</div>
		<div class="circle">
			<div>Financiaci&oacute;<br>a medida</div>
		</div>
		<div class="circle">
			<div>Asistencia<br>a domicilio</div>
		</div>
		<div class="circle">
			<div>P&iacute;las y<br>accesorios</div>
		</div>
		*/ ?>
<?php /* mirar http://codepen.io/nuriarai/pen/uIrFf */?>
