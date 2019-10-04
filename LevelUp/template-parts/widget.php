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

<div class="widget">
	<?php the_post_thumbnail('thumbnail'); ?>
</div>
<div class="text_widget">
<h5><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h5>
<?php if ( get_field( 'time' ) ) { ?>
	<div class="date-event"><i class="fa fa-clock-o" aria-hidden="true"></i> <?php the_field( 'date' ); ?> о <?php the_field( 'time' ); ?></div>
<?php } else { ?>
    <div class="date-news"><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo get_the_date(); ?></div>
<?php } ?>
</div>

</article><!-- #post-## -->
