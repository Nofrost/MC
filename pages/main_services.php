<?php if(!isset($page)) { header( 'Location: home_page.php');die( 'Redirect a home_page'); }?>
<div>
	<div id="all_services">
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
		<svg height="140" width="140">
			<circle cx="70" cy="70" r="70" fill="white" />
			<text x="45" y="40" style="fill:black;">Estudio
				<tspan x="45" y="60">audiol&oacute;gico</tspan>
				<tspan x="45" y="80">gratuito</tspan>
			</text>
			<text x="10" y="20" style="fill:black;display:none;">EstudioGAGGAA
				<tspan x="10" y="45">audiol&oacute;gico</tspan>
				<tspan x="10" y="70">gratuito</tspan>
			</text>
		</svg>
	</div>

</div>
<?php /* mirar http://codepen.io/nuriarai/pen/uIrFf */?>
