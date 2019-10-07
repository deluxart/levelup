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
<h5><?php the_title(); ?></h5>
<p>
<?php
$job_position = esc_attr( get_post_meta( get_the_ID(), 'job_position', true ) );

?>
Должность: <?php echo $job_position(); ?>
</p>
</div>

</article><!-- #post-## -->
