<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<div class="post-image widget">
	<?php the_post_thumbnail('thumbnail'); ?>
</div>

	<header class="entry-header">
		<?php
			if ( is_single() ) :
				the_title( '<h1>', '</h1>' );
			else :
				the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
			endif;
		?>
	<ul class="tag">
         <li class="date"><span><i class="fa fa-calendar" aria-hidden="true"></i><?php the_date(); ?></span></li>


 	</ul>



	</header><!-- .entry-header -->



</article><!-- #post-## -->
