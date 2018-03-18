<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Theme_Boilerplate
 */
get_header(); ?>
<!-- Jumbtron -->
<div class="jumbotron">
	<h2 class="mx-auto">Jumbotron</h2>
</div>

<div class="container" id="single-latest-project">
    <div class="row">
            <?php while ( have_posts() ) : the_post(); ?>
                <div class="col-9">            
                    <img src=" <?php the_post_thumbnail_url("medium"); ?> " alt="" class="img-responsive">
                    <h1><?php the_title(); ?></h1>
                    <p> <?php the_content(); ?> </p>
                </div>
                <div class="col-3">
                    <img src="<?php the_field("sidebar_picture"); ?>" alt="" class="img-fluid">
                    <img src="<?php the_field("sidebar_picture_2"); ?>" alt="" class="img-fluid"> 
                    <p><?php the_field("sidebar_text"); ?></p>
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
