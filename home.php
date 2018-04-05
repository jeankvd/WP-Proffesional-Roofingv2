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
 * @package _s
 */
get_header();
?>


<div class="container">
	<div class="row">
		<div class="col-md-9 col-sm-12">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<div class="blog-post">
				<span class="date"><?php the_date('F j');?></span>
				<img src="<?php the_post_thumbnail_url("full"); ?>" alt="" class="img-fluid">
				<div class="blog-info">
					<a href="<?php the_permalink();?>"><h5><?php the_title(); ?></h5></a>
					<p><?php the_excerpt();?></p>
				</div>					
				<span class="blog-meta">by <?php the_author();?> | Blog </span>
			</div>
			<?php endwhile; endif; ?>
		</div>
		<div class="col-md-3 blog-sidebar">
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>
<?php
get_footer();