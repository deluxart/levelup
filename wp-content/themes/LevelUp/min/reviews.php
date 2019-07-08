<?php
/*
Template Name: Страница Отзывы
*/

get_header(); ?>

		<main id="main" class="site-main" role="main" style="width: 100%;">

		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the page content template.
			get_template_part( 'content', 'page' );

		// End the loop.
		endwhile;
		?>
		</main><!-- .site-main -->


<?php get_footer(); ?>
