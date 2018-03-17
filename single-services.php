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
	<h2 class="mx-auto"><?php the_title();?></h2>
</div>

<div class="container">
    <div class="row">
        <div class="col-3">
        <?php get_sidebar(); ?>
        </div>
        <div class="col-9">
        <?php while ( have_posts() ) : the_post(); ?>
        <img src=" <?php the_post_thumbnail_url("medium"); ?> " alt="" class="img-responsive">
        <p> <?php the_content(); ?> </p>
        <?php endwhile; // End of the loop.?>
        <!-- Additional Content -->
        <h2 class="title-underline">Provided Services</h2>
        <div class="row" id="provided-services">
            <div class="col-6">
                <div class="service-icon">
                    <i class="fa fa-user" aria-hidden="true"></i>
                </div>
                <div class="service-info">
                    <h4>Experienced</h4>
                    <p>Doin' it our way. Nothin's gonna turn us back now. Straight ahead and on the track now.</p>
                </div>
            </div>
            <div class="col-6">
                <div class="service-icon">
                    <i class="fa fa-cog" aria-hidden="true"></i>
                </div>
                <div class="service-info">
                    <h4>Experienced</h4>
                    <p>Doin' it our way. Nothin's gonna turn us back now. Straight ahead and on the track now.</p>
                </div>
            </div>
            <div class="col-6">
                 <div class="service-icon">
                    <i class="fa fa-deaf" aria-hidden="true"></i>
                </div>
                <div class="service-info">
                    <h4>Experienced</h4>
                    <p>Doin' it our way. Nothin's gonna turn us back now. Straight ahead and on the track now.</p>
                </div>
            </div>
            <div class="col-6">
                <div class="service-icon">
                    <i class="fa fa-pencil" aria-hidden="true"></i>
                </div>
                <div class="service-info">
                    <h4>Experienced</h4>
                    <p>Doin' it our way. Nothin's gonna turn us back now. Straight ahead and on the track now.</p>
                </div>
            </div>
        </div>
        <div class="tabs">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">The process of pollination refers to the transfer of pollen to the female organs of the plant. Optimum factor for ideal pollination are: relative humidity rate of 50-70% and temperature of 24.4 degrees Celsius. If the humidity rate is higher than 90%, the pollen would not shed.</div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...The process of pollination refers to the transfer of pollen to the female organs of the plant. Optimum factor for ideal pollination are: relative humidity rate of 50-70% and temperature of 24.4 degrees Celsius. If the humidity rate is higher than 90%, the pollen would not shed.</div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">The process of pollination refers to the transfer of pollen to the female organs of the plant. Optimum factor for ideal pollination are: relative humidity rate of 50-70% and temperature of 24.4 degrees Celsius. If the humidity rate is higher than 90%, the pollen would not shed....</div>
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
