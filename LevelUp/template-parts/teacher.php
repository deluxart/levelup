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
</div>

</article><!-- #post-## -->
