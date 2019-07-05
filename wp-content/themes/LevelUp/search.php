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



	
<!-- 
			<header class="page-header">
				<h1 class="page-title"><?php printf( __( 'Результаты поиска: %s', 'LevelUp' ), get_search_query() ); ?></h1>
			</header> -->
			<!-- .page-header -->

			<?php
			// Start the loop.
			while ( have_posts() ) : the_post(); ?>

				<?php
				/*
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'content', 'search' );

			// End the loop.
			endwhile;

			// Previous/next page navigation.
			the_posts_pagination( array(
				'prev_text'          => __( 'Назад', 'LevelUp' ),
				'next_text'          => __( 'Далее', 'LevelUp' ),
				// 'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Страница', 'LevelUp' ) . ' </span>',
			) );

		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'content', 'none' );

		endif;
		?>


</div>
</main><!-- .site-main -->

<?php get_footer(); ?>
