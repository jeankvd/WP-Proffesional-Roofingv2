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

<!-- Latest Projects -->
<div id="latest-projects-page">
    <div class="container">
        <h2 class="title-underline"><?php the_field('projects_title', 13); ?></h2>
        <div class="row">
            <?php $loop = new WP_Query(
                array(
                    'post_type' => 'Projects'
                )
                ); ?>
                <?php if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>

                <div class="project-wrapper col-4">
                    <div class="project">
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="img-fluid">
                        <div class="project-overlay">
                        </div>
                        <h6><?php the_title(); ?></h6>
                        <div class="buttons">
                            <a href="#"><i class="fa fa-chain"></i></a>
                            <a href="<?php echo get_permalink(); ?>"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>

                <?php else: ?>
                    <h3>No Projects Were Found</h3>
                <?php endif; ?>
            <?php wp_reset_postdata(); ?> 
        </div>
    </div>
</div>
<?php
get_footer();