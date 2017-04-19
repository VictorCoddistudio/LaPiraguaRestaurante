<!DOCTYPE html>
<html lang="es">
 <?php require 'header.view.php';?>
 <?php require 'menu.view.php'; ?>

<section >
		<div class="flipbook-viewport">
			<div class="container">
				<div class="flipbook">
					<div style="background-image:url(folletomenu/pages/1.jpg)"></div>
					<div style="background-image:url(folletomenu/pages/2.jpg)"></div>
					<div style="background-image:url(folletomenu/pages/3.jpg)"></div>
					<div style="background-image:url(folletomenu/pages/4.jpg)"></div>
					<div style="background-image:url(folletomenu/pages/5.jpg)"></div>
				</div>
			</div>
		</div>



		<div class="contenidox" id="menuflash">
		
			<div id="slides3">
				<img src="images/menu/moviles/LPR_Volante2016_lado 1septiembreA.jpg" title="La piragua" alt="La piragua"   />
				<img src="images/menu/moviles/LPR_Volante2016_lado 1septiembreB.jpg" title="La piragua" alt="La piragua"   />
				<img src="images/menu/moviles/LPR_Volante2016_lado 2septiembreA.jpg" title="La piragua" alt="La piragua"   />
				<img src="images/menu/moviles/LPR_Volante2016_lado 2septiembreB.jpg" title="La piragua" alt="La piragua"   />
				<a href="#" class="slidesjs-previous slidesjs-navigation"><i class="icon-chevron-left"></i></a>
	      		<a href="#" class="slidesjs-next slidesjs-navigation"><i class="icon-chevron-right"></i></a>
			</div>
		</div>
</section>

 <script type="text/javascript">

function loadApp() {

	// Create the flipbook

	$('.flipbook').turn({
			// Width

			width:922,
			
			// Height

			height:600,

			// Elevation

			elevation: 50,
			
			// Enable gradients

			gradients: true,
			
			// Auto center this flipbook

			autoCenter: true

	});
}

// Load the HTML4 version if there's not CSS transform

yepnope({
	test : Modernizr.csstransforms,
	yep: ['folletomenu/lib/turn.js'],
	nope: ['folletomenu/lib/turn.html4.min.js'],
	both: ['folletomenu/css/basic.css'],
	complete: loadApp
});

</script>
<?php require 'footer.view.php'; ?>


