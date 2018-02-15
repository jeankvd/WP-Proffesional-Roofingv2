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
<!-- About Us -->
<div id="about-us">
    <div class="container" >
        <div class="row">
            <div class="col-6">
                <img src="<?php the_field('about_us_image', 13); ?>" alt="" class="img-fluid">
            </div>
            <div class="col-6">
                <h2><?php the_field('about_us_first_title', 13);?>&nbsp;<span><?php the_field('about_us_second_title', 13); ?></span></h2>
                <p><?php the_field('about_us_text', 13); ?></p>
                <div class="row">
                    <div class="col-4 statistic">
                        <span class="icon-holder"><i class="fa fa-user" aria-hidden="true"></i></span>
                        <span><?php the_field('workers', 13);?></span>
                        <span>Engineers & Workers</span>
                    </div>
                    <div class="col-4 statistic">
                        <span class="icon-holder"><i class="fa fa-building" aria-hidden="true"></i></span>
                        <span><?php the_field('offices', 13);?></span>
                        <span>Offices</span>
                    </div>
                    <div class="col-4 statistic">
                        <span class="icon-holder"><i class="fa fa-gavel" aria-hidden="true"></i></span>
                        <span><?php the_field('projects', 13);?></span>
                        <span>Projects Completed</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="contact-call" style="background-image: url(<?php the_field('contact_call_background_image');?>);">
    <h2>ACTION IS THE FOUNDATIONAL KEY TO ALL SUCCESS</h2>
    <p>Where the kisses are hers and hers and his. Three's company too. Goodbye gray sky hello blue. There's nothing can hold me when I hold you. Feels so right it cant be wrong. Rockin' and rollin' all week long.</p>
    <a class="btn">Contact Us</a>
</div>

<div class="perks">
    <h2>Why Choose Us</h2>
    <div>Perks here</div>
</div>


<div class="feedback">
    <h2>Client Feedback</h2>
    <div class="owl-Carrousel">
        Feedback Here
    </div>
</div>

<div class="newsletter">
    <div>newsletter here</div>
</div>

<div class="quote-banner">
    <span>Have Any Questions or need any business consultation?</span>
    <a href="#" class="btn">Request a Quote</a>
</div>

<?php
get_footer();