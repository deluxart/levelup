<?php
/*
Template Name: Page not sidebar
*/

get_header(); ?>
<div class="container">
	<div class="row">
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
</div>
</div>

<?php get_footer(); ?>
