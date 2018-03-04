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

<div class="container">
    <div class="row">
        <div class="col-3">
        <?php get_sidebar(); ?>
        </div>
        <div class="col-9">
        <?php while ( have_posts() ) : the_post(); ?>
        <img src=" <?php the_post_thumbnail_url("medium"); ?> " alt="" class="img-responsive">
        <h1><?php the_title(); ?></h1>
        <p> <?php the_content(); ?> </p>
        <?php endwhile; // End of the loop.?>
        <!-- Additional Content -->
        <div class="row">
            <div class="col-6">
                <img src="" alt="">
                <h4>Experienced</h4>
                <p>Doin' it our way. Nothin's gonna turn us back now. Straight ahead and on the track now.</p>
            </div>
            <div class="col-6">
                <img src="" alt="">
                <h4>Experienced</h4>
                <p>Doin' it our way. Nothin's gonna turn us back now. Straight ahead and on the track now.</p>
            </div>
            <div class="col-6">
                <img src="" alt="">
                <h4>Experienced</h4>
                <p>Doin' it our way. Nothin's gonna turn us back now. Straight ahead and on the track now.</p>
            </div>
            <div class="col-6">
                <img src="" alt="">
                <h4>Experienced</h4>
                <p>Doin' it our way. Nothin's gonna turn us back now. Straight ahead and on the track now.</p>
            </div>
        </div>
        </div>
    </div>
</div>

<div class="quote-banner">
    <span><?php the_field('quote_banner_text', 79);?></span>
    <a href="#" class="btn"><?php the_field('quote_button_text', 79);?></a>
</div>
<?php
get_footer();