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

<!-- Jumbtron -->
<div class="jumbotron">
	<h2 class="mx-auto">Jumbotron</h2>
</div>

<div class="contact-us">
    <div class="container">
        <div class="row">
            <div class="col-9">
            </div>
            <div class="col-3">
            </div>
        </div>
    </div>
</div>

<div class="map">
    Map Here pls
</div>

<div class="quote-banner">
    <span><?php the_field('quote_banner_text');?></span>
    <a href="#" class="btn"><?php the_field('quote_button_text');?></a>
</div>

<?php
get_footer();