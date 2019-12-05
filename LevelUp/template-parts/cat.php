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
<div id="lastpost-<?php the_ID(); ?>" class="catpost">
    <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail('full'); ?></a>
    <a href="<?php the_permalink() ?>" class="news-title" title="<?php the_title(); ?>"><?php the_title(); ?></a>
</div>
