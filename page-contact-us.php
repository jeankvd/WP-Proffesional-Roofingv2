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
            <div class="col-md-8 col-sm-12">
                <h2 class="">Get In <span>Touch</span></h2>
                <form action="" class="row">
                    <input type="name" name="name" id="name" class="col-md-5 col-sm-12" placeholder="Your Name*">
                    <input type="email" name="email" id="email" class="col-md-5 col-sm-12" placeholder="Your E-Mail*">
                    <input type="tel" name="tel" id="tel" class="col-md-5 col-sm-12" placeholder="Phone">
                    <input type="text" name="subject" id="subject" class="col-md-5 col-sm-12" placeholder="Subject">
                    <textarea class="col-md-11 col-sm-12" name="message" id="message" placeholder="Your Message"></textarea>
                    <input type="button" value="Get In Contact" class="col-md-11 col-sm-12">
                </form>
            </div>
            <div class="col-4">
                <h4>Quick Contact</h4>
                <p>If you are passionate about helping people: through education, or preventing then you</p>
                <!-- Top Info -->
                <div id="top-info" class=" container-fluid row">
                    <div class="col-12 info-card">
                        <div class="col-2">
                        <i class="fa fa-home" aria-hidden="true"></i>
                        </div>
                        <div class="col-9">
                        <h4>321, Breaking Street</h4>
                        <p>Newyork, USA 10002</p>
                        </div>
                    </div>
                    <div class="col-12 info-card">
                        <div class="col-2"><i class="fa fa-phone" aria-hidden="true"></i></div>
                        <div class="col-9">
                        <h4>Call Us On</h4>
                        <p>1-800-232-3293</p>
                        </div>
                    </div>
                    <div class="col-12 info-card">
                        <div class="col-2"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                        <div class="col-9">
                        <h4>Mail Us @</h4>
                        <p>SupportUs@gmail.com</p>
                        </div>	
                    </div>		
                </div> <!--End Top Info-->
            </div>
        </div>
    </div>

    <!-- Map -->
    <div id="map-container">
        <div id="map">
        </div>
    </div>
</div>

<div class="quote-banner">
    <span><?php the_field('quote_banner_text');?></span>
    <a href="#" class="btn"><?php the_field('quote_button_text');?></a>
</div>

<?php
get_footer();