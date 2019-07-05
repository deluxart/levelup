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
	<div id="content-page">

	<div id="content-news" class="course content-area">

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

    <nav id="sidebar" class="course">
       <ul class="pp-posts">
       <h2 class="widget-title">Новости и мероприятия</h2>
 <?php
 $pc = new WP_Query('cat=32&orderby=date&posts_per_page=3'); ?>
 <?php while ($pc->have_posts()) : $pc->the_post(); ?>
 <li class="clearfix sc-pp-posts">
 <div class="sc-pp-posts-image"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array()); ?></a></div>
 <div class="sc-pp-posts-text">
     <div class="sc-pp-posts-item"><a href="<?php the_permalink(); ?>"><?php the_title(); ?>.</a></div>
     <div class="sc-pp-posts-date"><?php the_date(); ?></div>
 </div>
 </li>
 <?php endwhile; ?>
 </ul>


<?php
	if ( function_exists('dynamic_sidebar') )
		dynamic_sidebar('news-sidebar');
?>


    </nav>

</div>
</div>
</main>
<?php get_footer(); ?>
