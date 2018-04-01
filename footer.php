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
			<div class="col-md-3 col-sm-12">
				<h2>Logo</h2>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci tempore minus provident eligendi fugiat ratione minima inventore, ad repellendus, voluptatem consequuntur esse impedit! Autem, necessitatibus dolore architecto ipsum facilis iure!</p>
				<div class="footer-social">
					<div class="social-button">
						<i class="fa fa-twitter" aria-hidden="true"></i>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-12">
				<h4>Services</h4>
				<ul class="services-list"> <!-- Services Title Loop -->
					<?php $loop = new WP_Query(
					array(
						'post_type' => 'Services'
					)
					); ?>
					<?php
					$i = 0;
					if ( $loop->have_posts() ) : while ( $loop->have_posts() && $i < 6 ) : $loop->the_post(); ?>

					<a href="<?php the_permalink(); ?>" class="services-link">
						<h6><?php the_title(); ?></h6>
					</a>

					<?php $i++; ?>
					<?php endwhile; ?>

					<?php else: ?>
						<h3>No Services Were Found</h3>
					<?php endif; ?>
					<?php wp_reset_postdata(); ?> 
				</ul>
			</div>
			<div class="col-md-3 col-sm-12 footer-news">
				<h2>Recent News</h2><!-- Blog Loop -->
				<?php
				$temp = $wp_query; $wp_query= null;
				$wp_query = new WP_Query(); $wp_query->query('posts_per_page=2');
				while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
				<?php $i = 0 ?>
					<div class=" row">
						<div class="col-3">
							<img src="<?php the_post_thumbnail_url(); ?>" alt="" class="img-fluid">
						</div>
						<div class="col-9">
							<h6><?php the_title();?></h6>
							<span>
								<i class="fa fa-calendar" aria-hidden="true"></i>
								<?php the_date('j M, Y');?>
							</span>
						</div>
					</div>
					<?php if ($i == 0) { ?>
						<hr>
					<?php }?>
					<?php $i++; ?>

			<?php endwhile; ?>
			<?php wp_reset_query(); ?>

			</div>
			<div class="col-md-3 col-sm-12 footer-subscribe">
				<h2>Subscribe uS</h2>
				<div>
					<p>Subscribe to our newsletter</p>
					<div id="footer-subscribe">
						<input type="email" name="" id="" placeholder="Email adress">
						<span>
							<i class="fa fa-paper-plane" aria-hidden="true"></i>
						</span>
					</div>
					<p>We don't do spam and Your mail id very confidential</p>
					<hr>
					<div class="footer-social">
						<div class="social-button">
							<i class="fa fa-twitter" aria-hidden="true"></i>
						</div>
					</div>
				</div>
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
