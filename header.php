<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Theme_Boilerplate
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!-- Top Bar -->
<div id="top-bar" class="container-fluid row">
	<div class="col-4">
		Welcome to Proffesional Roofing Inc.
	</div>
	<div class="col-8 schedule">
		<i class="fa fa-clock-o" aria-hidden="true"></i>
		Monday-Friday : 8:00 AM to 7:00 PM
	</div>
</div>
<!-- Top Info -->
<div id="top-info" class=" container-fluid row">
	<div class="col-3">
			logo
	</div>
		<div class="col-3 info-card">
			<div class="col-2"><i class="fa fa-home" aria-hidden="true"></i></div>
			<div class="col-9">
				<h4>321, Breaking Street</h4>
					<p>Newyork, USA 10002</p>
			</div>
			</div>
			<div class="col-3 info-card">
			<div class="col-2"><i class="fa fa-phone" aria-hidden="true"></i></div>
			<div class="col-9">
				<h4>Call Us On</h4>
					<p>1-800-232-3293</p>
			</div>
			</div>
			<div class="col-3 info-card">
			<div class="col-2"><i class="fa fa-envelope" aria-hidden="true"></i></div>
			<div class="col-9">
				<h4>Mail Us @</h4>
				<p>SupportUs@gmail.com</p>
				</div>	
			</div>		
</div>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'theme-boilerplate' ); ?></a>

	<header id="masthead" class="site-header">
		<nav id="site-navigation" class="main-navigation navbar">
			<!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'theme-boilerplate' ); ?></button> -->
			<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
			?>
			<a href="#" id="nav-quote">Get A Quote</a>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
