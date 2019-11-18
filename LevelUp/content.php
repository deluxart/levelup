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
    <div class="content">
        <div class="thumbnail">
			<a href="<?php the_permalink(); ?>"><?php LevelUp_post_thumbnail(); ?></a>
        </div>
        <div class="title-news">
        	<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
        </div>
		<div class="details-news">
			<span class="cat"><?php get_the_category(); ?></span>
			<span class="date"><?php echo get_the_date(); ?></span>
		</div>
    </div>
</article>
