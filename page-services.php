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

<!-- Our Services -->
<div id="our-services">
    <div class="container" >
        <div class="row">
            <?php $loop = new WP_Query(
                array(
                    'post_type' => 'Services'
                )
                ); ?>
                <?php
                $i = 0;
                if ( $loop->have_posts() ) : while ( $loop->have_posts() && $i < 6 ) : $loop->the_post(); ?>

                <div class="col-md-4 col-sm-12">
                    <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="img-fluid">
                    <a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
                    <p><?php the_field('excerpt'); ?></p>
                </div>

                <?php $i++; ?>
                <?php endwhile; ?>

                <?php else: ?>
                    <h3>No Services Were Found</h3>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?> 
        </div>
    </div>
</div>
<?php
get_footer();