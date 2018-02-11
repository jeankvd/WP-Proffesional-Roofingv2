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
				<h1 class="display-3">Fluid sjumbotron</h1>
				<p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
			</div>
		</div>

		<!-- About Us -->
		<div class="container-fluid"  id="about-us">
			<div class="row">
				<div class="col-6">
                    <img src="<?php the_field('about_us_image'); ?>" alt="" class="img-fluid">
				</div>
				<div class="col-6">
					<h2><?php the_field('about_us_first_title');?>&nbsp;<span><?php the_field('about_us_second_title'); ?></span></h2>
					<p><?php the_field('about_us_text'); ?></p>
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
					<h2 class="title-underline"><?php the_field('services_title'); ?></h2>
				</div>
				<div class="col-8">
					<p><?php the_field('services_text'); ?></p>
				</div>
			</div>
			<div class="row">
                <?php $loop = new WP_Query(
                    array(
                        'post_type' => 'Services'
                    )
                    ); ?>
                    <?php if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>

                    <div class="col-4">
                        <img src="<?php the_field(''); ?>" alt="">
                    </div>

                    <?php endwhile; ?>

                    <?php else: ?>
                        <h3>No Services Were Found</h3>
                    <?php endif; ?>
                    <?php wp_reset_postdata(); ?>
				<div class="col-4">
					<img src="http://tonatheme.com/newwp/factory/wp-content/uploads/2017/07/1-1.jpg" alt="" class="img-fluid">
					<h4>Agricultural Engineering</h4>
					<p>We develop and design new procedures, tools systems for agricultural products environments.</p>
				</div>
			</div>
		</div>

		<!-- Latest Projects -->
		<div class="container-fluid" id="latest-projects">
			<h2 class="title-underline"><?php the_field('projects_title'); ?></h2>
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
                <h2><?php the_field('blog_title'); ?></h2>
		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>

			<?php
			endif;
			/* Start the Loop */
			while ( have_posts() ) : the_post();?>

			<div class="col-4">
				<img src="http://tonatheme.com/newwp/factory/wp-content/uploads/2017/07/1-2.jpg" alt="" class="img-fluid">
				<h6>Materials & Manufacturing</h6>
				<span>by admin | 0 comment | 11 July</span>
				<p>Except to obtain some advantage from it? But who has any right to find to enjoy a pleasure.</p>
				<a href="#">Read More</a>
			</div>

			<?php endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>
		</div>
	</div>

	<!-- Contact Us -->

	<div class="container-fluid" id="contact-us">
		<div class="row">
			<div class="col-5">
				<h2 class="title-underline"><?php the_field('contact_us_title'); ?></h2>
				<p><?php the_field('contact_us_text'); ?>
				</p>
			</div>
			<div class="col-7">
				<form action="" class="row">
					<input type="name" name="name" id="name" class="col-5" placeholder="Your Name*">
					<input type="email" name="email" id="email" class="col-5" placeholder="Your E-Mail*">
					<input type="tel" name="tel" id="tel" class="col-5" placeholder="Phone">
					<input type="text" name="subject" id="subject" class="col-5" placeholder="Subject">
					<textarea class="col-11" name="message" id="message" placeholder="Your Message"></textarea>
					<input type="button" value="Get In Contact">
				</form>
			</div>
		</div>
	</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
