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

<div class="container questions">
	<div class="row">

		<div class="col-md-6 col-sm-12">
			<div id="accordion">
				<?php for($i = 1; $i < 7;$i++) { ?>
				<div class="card">
					<div class="card-header" id="heading<?php echo $i ?>">
						<h5 class="mb-0">
							<button class="btn btn-link" data-toggle="collapse" data-target="#collapse<?php echo $i ?>" aria-expanded="true" aria-controls="answer<?php echo $i ?>">
								<?php the_field("question_$i"); ?>
							</button>
						</h5>
					</div>
					<div id="collapse<?php echo $i ?>" class="collapse" aria-labelledby="heading<?php echo $i ?>" data-parent="#accordion">
						<div class="card-body"> <?php the_field("answer_$i"); ?>
						</div>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>

		<div class="col-md-6 col-sm-12" id="faq-form">
			<form action="" class="row">
				<h4><?php the_field('contact_form_title'); ?></h4>
				<input type="text" name="name" placeholder="Name*">
				<input type="email" name="email" id="">
				<input type="text" name="subject" id="">
				<textarea name=""></textarea>
				<a href="#" class="btn">Submit Now</a>
			</form>
		</div>
	</div>
</div>


<?php
get_footer();