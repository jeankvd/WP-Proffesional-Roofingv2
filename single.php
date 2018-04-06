<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Theme_Boilerplate
 */
get_header(); ?>

<div class="container">
    <div class="row">
			<?php while ( have_posts() ) : the_post(); ?>
			<div class="col-md-9 col-sm-12">			
				<img src=" <?php the_post_thumbnail_url("full"); ?> " alt="" class="img-responsive">
				<h1><?php the_title(); ?></h1>
				<p> <?php the_content(); ?> </p>
			</div>
			<div class="col-md-3 single-sidebar">
				<?php get_sidebar();?>
			</div>
			<?php endwhile; // End of the loop.?>
    </div>
</div>

<div class="quote-banner">
    <span><?php the_field('quote_banner_text', 79);?></span>
    <a href="#" class="btn"><?php the_field('quote_button_text', 79);?></a>
</div>
<?php
get_footer();
