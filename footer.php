<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Theme_Boilerplate
 */

?>

	</div><!-- #content -->



	<footer class="site-footer container-fluid">
		<div class="row">
			<div class="col-3">
				<h2>Logo</h2>
			</div>
			<div class="col-3">
				<h4>Services</h4>
				<ul>
					<li>Material Science</li>
					<li>Material Science</li>
					<li>Material Science</li>
					<li>Material Science</li>
					<li>Material Science</li>
					<li>Material Science</li>
				</ul>
			</div>
			<div class="col-3">
				<h2>Recent News</h2>
			</div>
			<div class="col-3">
				<h2>Subscribe uS</h2>
			</div>
		</div>
		<div id="footer-bottom">
			<span>&copy 2018 Jean Villalobos</span>
			<div class="bottom-menu"></div>
		</div>		
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script>
  function initMap() {
    var uluru = {lat: 25.8100321, lng: -80.2360589};
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 14,
      center: uluru
    });
    var marker = new google.maps.Marker({
      position: uluru,
      map: map
    });
  }
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCGWtW45JrxxhVCyHSfsyGW-B48fM4evww&callback=initMap">
</script>

</body>
</html>
