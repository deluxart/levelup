<?php
/**
 * Template Name: Для HTML-новостей
 * Template Post Type: post
 */

get_header(); ?>
<main id="main" class="site-main" role="main">
<?php
			/* translators: %s: Name of current post */
			the_content( sprintf(
				__( 'Подробнее %s', 'LevelUp' ),
				the_title( '<span class="screen-reader-text">', '</span>', false )
			) );

			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'LevelUp' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'LevelUp' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );
		?>
</main>
<?php get_footer(); ?>
