<?php
/**
 * The template for displaying search results pages.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>
	<?php if ( have_posts() ) : ?>
<main id="main" class="site-main" role="main">
<div class="open-courses course"><div class="col tc"><h1><?php printf( __( 'Поиск: %s', 'LevelUp' ), get_search_query() ); ?></h1></div></div>

<div class="container">
			<?php
			while ( have_posts() ) : the_post(); ?>

				<?php
				get_template_part( 'content', 'search' );

			endwhile;

			// Previous/next page navigation.
			the_posts_pagination( array(
				'prev_text'          => __( 'Назад', 'LevelUp' ),
				'next_text'          => __( 'Далее', 'LevelUp' ),
			) );

		else :
			get_template_part( 'content', 'none' );

		endif;
		?>
</div>
</main><!-- .site-main -->

<?php get_footer(); ?>
