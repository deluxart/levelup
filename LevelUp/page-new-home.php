<?php
/*
Template Name: Главная страница (NEW)
*/

get_header(); ?>

	<div id="primary" class="content-area custom-page">
		<main id="main" class="site-main <?php the_field( 'header_color' ); ?>" role="main">

		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the page content template.
			get_template_part( 'content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		// End the loop.
		endwhile;
        ?>

<?php $after_cont = get_field( 'block_after_content_page' ); ?>
<?php if ( $after_cont ) { ?>
	<?php the_field( 'block_after_content_page' ); ?>
<?php } ?>

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
