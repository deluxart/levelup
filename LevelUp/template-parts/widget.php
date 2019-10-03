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
				the_title( sprintf( '<a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a>' );
			endif;
        ?>
<?php if ( get_field( 'time' ) ) { ?>
	<div class="date-event"><i class="fa fa-clock-o" aria-hidden="true"></i> <?php the_field( 'date' ); ?> о <?php the_field( 'time' ); ?></div>
<?php } else { ?>
    <div class="date-news"><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo mysql2date( get_option( 'date_format' ), $post->post_date); ?></div>
<?php } ?>
</div>

</article><!-- #post-## -->
