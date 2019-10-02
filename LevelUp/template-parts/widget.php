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
<div class="text_widget">
		<?php
			if ( is_single() ) :
				the_title( '<h4>', '</h4>' );
			else :
				the_title( sprintf( '<h4 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h4>' );
			endif;
		?>
<?php if ( get_field( 'date' ) ) { ?>
	<?php the_field( 'date' ); ?>
<?php } ?>
<?php if ( get_field( 'time' ) ) { ?>
	о <?php the_field( 'time' ); ?>
<?php } ?>
</div>

</article><!-- #post-## -->
