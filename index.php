<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Theme_Boilerplate
 */

get_header(); ?>

	

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
		<div class="jumbotron jumbotron-fluid" id="">
			<div class="container">
				<h1 class="display-3">Fluid jumbotron</h1>
				<p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
			</div>
		</div>

		<!-- About Us -->
		<div class="container-fluid"  id="about-us">
			<div class="row">
				<div class="col-6">
					<img src="http://tonatheme.com/newwp/factory/wp-content/uploads/2017/07/1.png" alt="" class="img-fluid">
				</div>
				<div class="col-6">
					<h2>About Our <span>Factory & industries</span></h2>
					<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab quaerat exercitationem ducimus odit laborum libero aperiam porro, assumenda, quos quisquam omnis atque, nobis molestias consequuntur ratione vel consectetur nemo soluta!</p>
					<div class="row">
						<div class="col-4 statistic">icon and info</div>
						<div class="col-4 statistic">icon and info</div>
						<div class="col-4 statistic">icon and info</div>			
					</div>
				</div>
			</div>
		</div>

		<!-- Our Services -->
		<div class="container-fluid" id="our-services">
			<div class="row">
				<div class="col-4">
					<h2 class="title-underline">Our Services</h2>
				</div>
				<div class="col-8">
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti molestiae officiis numquam magni. Officiis debitis aliquam neque optio placeat! </p>
				</div>
			</div>
			<div class="row">
				<div class="col-4">
					<img src="http://tonatheme.com/newwp/factory/wp-content/uploads/2017/07/1-1.jpg" alt="" class="img-fluid">
					<h4>Agricultural Engineering</h4>
					<p>We develop and design new procedures, tools systems for agricultural products environments.</p>
				</div>
			</div>
		</div>

		<!-- Latest Projects -->
		<div class="container-fluid" id="latest-projects">
			<h2 class="title-underline">Latest Projects</h2>
			<div class="owl-carousel">
				<div class="project">
					<img src="http://tonatheme.com/newwp/factory/wp-content/uploads/2017/07/p2.jpg" alt="" class="img-fluid">
					<div class="project-overlay">
					</div>
					<h6>Multi String Project</h6>
					<span>Latest Projects</span>
				</div>
			</div>
		</div>



		<!-- Blog -->

		<div class="container">
			<div class="row">
		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>

			<?php
			endif;
			/* Start the Loop */
			while ( have_posts() ) : the_post();?>

			<div class="col-4">
				<img src="http://tonatheme.com/newwp/factory/wp-content/uploads/2017/07/1-2.jpg" alt="">
			</div>

			<?php endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>
		</div>
	</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
