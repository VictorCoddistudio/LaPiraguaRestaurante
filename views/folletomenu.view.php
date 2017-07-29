<!DOCTYPE html>
<html lang="es">
 <?php require 'header.view.php';?>
 <?php require 'menu.view.php'; ?>

<section >
		<div class="flipbook-viewport">
			<div class="container">
				<div class="flipbook">
					<div style="background-image:url(folletomenu/pages/1.jpg)"></div>
					<div style="background-image:url(folletomenu/pages/LPR_Menu2017_lado_1-1.jpg)"></div>
					<div style="background-image:url(folletomenu/pages/LPR_Menu2017_lado_1-2.jpg)"></div>
          <div style="background-image:url(folletomenu/pages/LPR_Menu2017_lado_2-1.jpg)"></div>
					<div style="background-image:url(folletomenu/pages/LPR_Menu2017_lado_2-2.jpg)"></div>

				</div>
			</div>
		</div>



		<div class="contenidox" id="menuflash">

			<div id="slides3">
				<img src="images/menu/moviles/new/1.jpg" title="La piragua" alt="La piragua"   />
				<img src="images/menu/moviles/new/2.jpg" title="La piragua" alt="La piragua"   />
        <img src="images/menu/moviles/new/3.jpg" title="La piragua" alt="La piragua"   />
        <img src="images/menu/moviles/new/4.jpg" title="La piragua" alt="La piragua"   />
        <img src="images/menu/moviles/new/5.jpg" title="La piragua" alt="La piragua"   />
        <img src="images/menu/moviles/new/6.jpg" title="La piragua" alt="La piragua"   />
        <img src="images/menu/moviles/new/7.jpg" title="La piragua" alt="La piragua"   />
        <img src="images/menu/moviles/new/8.jpg" title="La piragua" alt="La piragua"   />
        <img src="images/menu/moviles/new/9.jpg" title="La piragua" alt="La piragua"   />
        <img src="images/menu/moviles/new/10.jpg" title="La piragua" alt="La piragua"   />
        <img src="images/menu/moviles/new/11.jpg" title="La piragua" alt="La piragua"   />
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
