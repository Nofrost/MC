<?php if(!isset($page)) { header( 'Location: home.php');die( 'Redirect a home'); }?>

<div class="jcarousel">
	<ul>
		<li id="page1">
			<div id="video-viewport">
				<video autoplay preload width="1024" height="auto" scale="tofit" id="video-player" controls muted>
					<source src="videos/MC_spot-1_v3.ogg" type="video/ogg" />
					<source src="videos/MC_spot-1_v3.mp4" type="video/mp4" />
				</video>
			</div>
		</li>
		<li id="page2">
			<?php /* <img src="Images/2cares.png">*/?>
			<div id="slogan">
				<span class="tr cat <?php if($lang != 'cat') echo 'hide'; ?>">Duria aquests audi&ograve;fons?</span>
				<span class="tr es <?php if($lang != 'es') echo 'hide'; ?>">Llevaría estos aud&iacute;fonos?</span>
				<span class="tr en <?php if($lang != 'en') echo 'hide'; ?>">Take this hearing aid?</span>
				<span class="tr it <?php if($lang != 'it') echo 'hide'; ?>"> Porteresti questi apparecchi?</span>
			</div>
		</li>
	</ul>
</div>

<?php /* <div id="main">
<div id="main_wrapper">
	<div id="myCarousel" class="carousel">
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>.
			<li data-target="#myCarousel" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
			<div class="item active ">
				<div id="video-viewport">
					<video autoplay controls preload width="1024" height="auto" scale="tofit">
						<source src="videos/MC_spot-1_v3.ogg" type="video/ogg" />
						<source src="videos/MC_spot-1_v3.mp4" type="video/mp4" />
					</video>
				</div>
			</div>
			<div class="item">
				<img src="Images/Captufdsra.PNG" class="image-responsive">
			</div>
			<div class="item">
				<img src="Images/Captufdsra.PNG" class="image-responsive">
			</div>

		</div>

	</div>

</div>
<!-- Controls -->
<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
	<span class="glyphicon glyphicon-chevron-left"></span>
</a>
<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
	<span class="glyphicon glyphicon-chevron-right"></span>
</a>
</div>

<!---<div id="video-viewport">
			<video autoplay controls preload width="1024" height="auto" scale="tofit">
				<source src="videos/MC_spot-1_v3.ogg"type="video/ogg" />
				<source src="videos/MC_spot-1_v3.mp4"type="video/mp4" />
			</video>
		</div>-->
*/ ?>
