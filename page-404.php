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

<div class="notFound">
<h2 id="404">404</h2>
<h2>OOPPS! THE PAGE YOU WERE LOOKING FOR, COULDN'T BE FOUND.</h2>
<h3>Try looking through the navigation bar</h3>
</div>

<?php
get_footer();