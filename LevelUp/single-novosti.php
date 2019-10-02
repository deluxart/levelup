<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

<main id="main" class="site-main full_post" role="main">
<div class="container">
	<div id="content-page">



	<div id="content-news" class="course content-area 222">

		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			/*
			 * Include the post format-specific template for the content. If you want to
			 * use this in a child theme, then include a file called content-___.php
			 * (where ___ is the post format) and that will be used instead.
			 */
			get_template_part( 'content', get_post_format() );

//			// If comments are open or we have at least one comment, load up the comment template.
//			if ( comments_open() || get_comments_number() ) :
//				comments_template();
//			endif;

//			// Previous/next post navigation.
//			the_post_navigation( array(
//				'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'LevelUp' ) . '</span> ' .
//					'<span class="screen-reader-text">' . __( 'Next post:', 'LevelUp' ) . '</span> ' .
//					'<span class="post-title">%title</span>',
//				'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'LevelUp' ) . '</span> ' .
//					'<span class="screen-reader-text">' . __( 'Previous post:', 'LevelUp' ) . '</span> ' .
//					'<span class="post-title">%title</span>',
//			) );

		// End the loop.
		endwhile;
		?>









		<!-- .site-main -->
	</div><!-- .content-area -->



</div>
</div>




		<?php $tags = wp_get_post_tags($post->ID);
		if ($tags) {
		$tag_ids = array();
		foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
		$args=array(
			'tag__in' => $tag_ids,
			'orderby' => rand,
			'caller_get_posts' => 1,
			'post__not_in' => array($post->ID),
			'showposts' => 3
		);
		$my_query = new wp_query($args);
		if( $my_query->have_posts() ) {
		echo '<div class="related_posts">';
		echo '<div class="container">';
		echo '<h2 class="widget-title">Похожие записи:</h3>';
		echo '<ul>';
		while ($my_query->have_posts()) {
		$my_query->the_post();
		?>
		<li>
			<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?> <?php the_field( 'date' ); ?> о <?php the_field( 'time' ); ?>">
				<div class="post-thumb"><?php the_post_thumbnail(); ?></div>
				<div>
					<?php the_title(); ?>
					<span class="date_publ"><?php the_date(); ?></span>
				</div>
			</a>
		</li>
		<?php
		}
		echo '</ul>';
		echo '</div>';
		echo '</div>';
		}
		wp_reset_query();
		}
		?>


<div class="news_sidebar">
	<div class="container">
		<?php
			if ( function_exists('dynamic_sidebar') )
				dynamic_sidebar('after-news-sidebar');
		?>
	</div>
</div>


</main>
<?php get_footer(); ?>
