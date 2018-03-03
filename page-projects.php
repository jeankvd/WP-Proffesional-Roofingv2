<!-- Latest Projects -->
<div id="latest-projects">
    <div class="container">
        <h2 class="title-underline"><?php the_field('projects_title'); ?></h2>
        <div class="owl-carousel">
        <?php $loop = new WP_Query(
                array(
                    'post_type' => 'Projects'
                )
                ); ?>
                <?php if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>

                <div class="project">
                    <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="img-fluid">
                    <div class="project-overlay">
                    </div>
                    <h6><?php the_title(); ?></h6>
                    <span>Latest Projects</span>
                </div>
                <?php endwhile; ?>

                <?php else: ?>
                    <h3>No Projects Were Found</h3>
                <?php endif; ?>
            <?php wp_reset_postdata(); ?> 
            <div class="project">
                <img src="http://tonatheme.com/newwp/factory/wp-content/uploads/2017/07/p2.jpg" alt="" class="img-fluid">
                <div class="project-overlay">
                </div>
                <h6>Multi String Project</h6>
            </div>
        </div>
    </div>
</div>