<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package LevelUp
 */

?>
<div>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="content-one">
        <div class="thumbnail">
			<a href="<?php the_permalink(); ?>"><?php LevelUp_post_thumbnail(); ?></a>
            <div class="item-overlay"></div>
        </div>
        <div class="title-news">
        	<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
        </div>

    </div>
</article>
</div>
