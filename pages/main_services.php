<?php if(!isset($page)) { header( 'Location: home.php');die( 'Redirect a home'); }?>
<div id="video-viewport">
			<video autoplay preload width="1423" height="auto" scale="tofit" id="video-player" controls muted>
					<source src="videos/MC_spot-3_v3.ogg" type="video/ogg" />
			</video>
</div>
<div id="all_services">
	<div id="services_wrapper">
		<svg height="140" width="140">
			<circle cx="70" cy="70" r="70" fill="white" />
			<text x="48" y="55" style="fill:#396e8e" <?php if($lang != 'cat') echo 'visibility="hidden"'; ?>>Estudi
				<tspan x="35" y="75">audiol&ograve;gic</tspan>
				<tspan x="47" y="95">gratu&iuml;t</tspan>
			</text>
			<text x="46" y="55" style="fill:#396e8e" <?php if($lang != 'es') echo 'visibility="hidden"'; ?>>Estudio
				<tspan x="33" y="75">audiol&oacute;gico</tspan>
				<tspan x="43" y="95">gratuito</tspan>
			</text>
			<text x="28" y="65" style="fill:#396e8e" <?php if($lang != 'en') echo 'visibility="hidden"'; ?>>Free hearing
				<tspan x="50" y="85">study</tspan>
			</text>
			<text x="47" y="55" style="fill:#396e8e" <?php if($lang != 'it') echo 'visibility="hidden"'; ?>>Esame
				<tspan x="33" y="75">audiologico</tspan>
				<tspan x="44" y="95">gratuito</tspan>
			</text>
		</svg>

		<svg height="140" width="140">
			<circle cx="70" cy="70" r="70" fill="white" />
			<text x="53" y="55" style="fill:#396e8e" <?php if($lang != 'cat') echo 'visibility="hidden"'; ?>>Nous
				<tspan x="38" y="75">audi&ograve;fons</tspan>
				<tspan x="48" y="95">digitals</tspan>
			</text>
			<text x="45" y="55" style="fill:#396e8e" <?php if($lang != 'es') echo 'visibility="hidden"'; ?>>Nuevos
				<tspan x="37" y="75">aud&iacute;fonos</tspan>
				<tspan x="42" y="95">digitales</tspan>
			</text>
			<text x="34" y="65" style="fill:#396e8e" <?php if($lang != 'en') echo 'visibility="hidden"'; ?>>New digital
				<tspan x="31" y="85">hearing aids</tspan>
			</text>
			<text x="49" y="55" style="fill:#396e8e" <?php if($lang != 'it') echo 'visibility="hidden"'; ?>>Nuovi
				<tspan x="32" y="75">apparecchi</tspan>
				<tspan x="47" y="95">digitali</tspan>
			</text>
		</svg>

		<svg height="140" width="140">
			<circle cx="70" cy="70" r="70" fill="white" />
			<text x="41" y="65" style="fill:#396e8e" <?php if($lang != 'cat') echo 'visibility="hidden"'; ?>>Garantia
				<tspan x="32" y="85">d&#39;adaptaci&oacute;</tspan>
			</text>
			<text x="33" y="65" style="fill:#396e8e" <?php if($lang != 'es') echo 'visibility="hidden"'; ?>>Garant&iacute;a de
				<tspan x="35" y="85">adaptaci&oacute;n</tspan>
			</text>
			<text x="31" y="65" style="fill:#396e8e" <?php if($lang != 'en') echo 'visibility="hidden"'; ?>>Gurarantee
				<tspan x="26" y="85">of adaptation</tspan>
			</text>
			<text x="17" y="65" style="fill:#396e8e" <?php if($lang != 'it') echo 'visibility="hidden"'; ?>>Applicazioni con
				<tspan x="43" y="85">garanzia</tspan>
			</text>
		</svg>

		<svg height="140" width="140">
			<circle cx="70" cy="70" r="70" fill="white" />
			<text x="33" y="65" style="fill:#396e8e" <?php if($lang != 'cat') echo 'visibility="hidden"'; ?>>Financiaci&oacute;
				<tspan x="45" y="85">a mida</tspan>
			</text>
			<text x="29" y="65" style="fill:#396e8e" <?php if($lang != 'es') echo 'visibility="hidden"'; ?>>Financiaci&oacute;n
				<tspan x="38" y="85">a medida</tspan>
			</text>
			<text x="43" y="65" style="fill:#396e8e" <?php if($lang != 'en') echo 'visibility="hidden"'; ?>>Tailored
				<tspan x="46" y="85">finance</tspan>
			</text>
			<text x="23" y="65" style="fill:#396e8e" <?php if($lang != 'it') echo 'visibility="hidden"'; ?>>Finanziamenti
				<tspan x="24" y="85">personalizzati</tspan>
			</text>
		</svg>

		<svg height="140" width="140">
			<circle cx="70" cy="70" r="70" fill="white" />
			<text x="35" y="65" style="fill:#396e8e" <?php if($lang != 'cat') echo 'visibility="hidden"'; ?>>Assit&egrave;ncia
				<tspan x="36" y="85">a domicili</tspan>
			</text>
			<text x="38" y="65" style="fill:#396e8e" <?php if($lang != 'es') echo 'visibility="hidden"'; ?>>Asistencia
				<tspan x="36" y="85">a domicilio</tspan>
			</text>
			<text x="49" y="65" style="fill:#396e8e" <?php if($lang != 'en') echo 'visibility="hidden"'; ?>>Home
				<tspan x="37" y="85">assistance</tspan>
			</text>
			<text x="35" y="65" style="fill:#396e8e" <?php if($lang != 'it') echo 'visibility="hidden"'; ?>>Assistenza
				<tspan x="34" y="85">a domicilio</tspan>
			</text>
		</svg>

		<svg height="140" width="140">
			<circle cx="70" cy="70" r="70" fill="white" />
			<text x="50" y="65" style="fill:#396e8e" <?php if($lang != 'cat') echo 'visibility="hidden"'; ?>>Piles i
				<tspan x="38" y="85">accessoris</tspan>
			</text>
			<text x="49" y="65" style="fill:#396e8e" <?php if($lang != 'es') echo 'visibility="hidden"'; ?>>Pilas y
				<tspan x="37" y="85">accesorios</tspan>
			</text>
			<text x="25" y="65" style="fill:#396e8e" <?php if($lang != 'en') echo 'visibility="hidden"'; ?>>Batteries and
				<tspan x="32" y="85">accessories</tspan>
			</text>
			<text x="50" y="65" style="fill:#396e8e" <?php if($lang != 'it') echo 'visibility="hidden"'; ?>>Pile e
				<tspan x="40" y="85">accessori</tspan>
			</text>
		</svg>

	</div>
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
