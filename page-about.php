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
    <h2><?php the_field('contact_call_title');?></h2>
    <p><?php the_field('contact_call_button_text');?></p>
    <a class="btn"><?php the_field('contact_call_button_text');?></a>
</div>

<div class="perks container">
    <h2 class="title-underline"><?php the_field('perks_title');?></h2>    
    <div class="row">
        <div class="col-4">
            <div class="perk">
                <span class="icon-holder"><i class="fa fa-user" aria-hidden="true"></i></span>
                <div class="perk-info">
                    <h4><?php the_field('perk_1_title');?></h4>
                    <p><?php the_field('perk_1_paragraph');?></p>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="perk">
                <span class="icon-holder"><i class="fa fa-user" aria-hidden="true"></i></span>
                <div class="perk-info">
                    <h4><?php the_field('perk_2_title');?></h4>
                    <p><?php the_field('perk_2_paragraph');?></p>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="perk">
                <span class="icon-holder"><i class="fa fa-user" aria-hidden="true"></i></span>
                <div class="perk-info">
                    <h4><?php the_field('perk_3_title');?></h4>
                    <p><?php the_field('perk_3_paragraph');?></p>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="perk">
                <span class="icon-holder"><i class="fa fa-user" aria-hidden="true"></i></span>
                <div class="perk-info">
                    <h4><?php the_field('perk_4_title');?></h4>
                    <p><?php the_field('perk_4_paragraph');?></p>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="perk">
                <span class="icon-holder"><i class="fa fa-user" aria-hidden="true"></i></span>
                <div class="perk-info">
                    <h4><?php the_field('perk_5_title');?></h4>
                    <p><?php the_field('perk_5_paragraph');?></p>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="perk">
                <span class="icon-holder"><i class="fa fa-user" aria-hidden="true"></i></span>
                <div class="perk-info">
                    <h4><?php the_field('perk_6_title');?></h4>
                    <p><?php the_field('perk_6_paragraph');?></p>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="feedback container">
    <h2 class="title-underline">Client Feedback</h2>
    <div class="owl-Carrousel row">
        <div class="client col-4">
            <p><?php the_field('client_1_feedback');?></p>
            <img src="<?php the_field('client_1_image');?>" alt="">
            <h4><?php the_field('client_1_name');?></h4>
            <h5><?php the_field('client_1_subheading');?></h5>
        </div>
        <div class="client col-4">
            <p><?php the_field('client_2_feedback');?></p>
            <img src="<?php the_field('client_2_image');?>" alt="">
            <h4><?php the_field('client_2_name');?></h4>
            <h5><?php the_field('client_2_subheading');?></h5>
        </div>
        <div class="client col-4">
            <p><?php the_field('client_3_feedback');?></p>
            <img src="<?php the_field('client_3_image');?>" alt="">
            <h4><?php the_field('client_3_name');?></h4><br>
            <h5><?php the_field('client_3_subheading');?></h5>
        </div>
    </div>
</div>

<div class="newsletter" style="background-image: url(<?php the_field('subscribe_background_image');?>);">
    <div class="container" >
        <h2><?php the_field('subscribe_call_title');?></h2>
        <p><?php the_field('subscribe_call_paragraph');?></p>
        <div class="form">
            <i class="fa fa-envelope" aria-hidden="true"></i>
            <input type="email" name="email" id="" placeholder="Email Us">
            <a href="" class="btn"><?php the_field('subscribe_call_button_text');?></a>
        </div>
    </div>
</div>

<div class="quote-banner">
    <span><?php the_field('quote_banner_text');?></span>
    <a href="#" class="btn"><?php the_field('quote_button_text');?></a>
</div>

<?php
get_footer();