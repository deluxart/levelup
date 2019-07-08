<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>
<main id="main" class="site-main" role="main">
<div class="container">
	<div class="row" id="content-page">

	<div id="content-news" class="course content-area">

		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();
			get_template_part( 'content', get_post_format() );
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

			the_post_navigation( array(
				'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'LevelUp' ) . '</span> ' .
					'<span class="screen-reader-text">' . __( 'Next post:', 'LevelUp' ) . '</span> ' .
					'<span class="post-title">%title</span>',
				'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'LevelUp' ) . '</span> ' .
					'<span class="screen-reader-text">' . __( 'Previous post:', 'LevelUp' ) . '</span> ' .
					'<span class="post-title">%title</span>',
			) );
		endwhile;
		?>

		<!-- .site-main -->
	</div><!-- .content-area -->

</div>
</div>
</main>
<?php get_footer(); ?>
