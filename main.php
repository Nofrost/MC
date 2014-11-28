<?php if(!isset($page)) { header( 'Location: index.php');die( 'Redirect a index'); }?>

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
<div id="main">
	<div id="main_wrapper">
		<div class="jcarousel">
			<ul>
				<li id="page1">
					<div id="video-viewport">
						<video autoplay controls preload width="1024" height="auto" scale="tofit" id="video-player">
							<source src="videos/MC_spot-1_v3.ogg" type="video/ogg" />
							<source src="videos/MC_spot-1_v3.mp4" type="video/mp4" />
						</video>
					</div>
				</li>
				<li id="page2">
					<img src="Images/Captufdsra.PNG" class="image-responsive">
				</li>
			</ul>
		</div>
	</div>
</div>
<?php /*
Info:
http://sorgalla.com/jcarousel/docs/reference/configuration.html
http://sorgalla.com/jcarousel/docs/reference/usage.html
*/ ?>
<script type="text/javascript">
$(function () {
	$('.jcarousel').jcarousel({
		//Configuration
		wrap: 'both',
		transitions: true,
		animation: 1000
	});

	$("#video-player").bind('ended', function () { //Al acabar el video
		$('.jcarousel').jcarousel('scroll', '+=1'); //Usage
		//Sino també es pot canviar de pàgina amb això:
//		$('.jcarousel').jcarousel('scroll', 0);
	});
});
</script>
