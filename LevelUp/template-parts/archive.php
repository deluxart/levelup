<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package LevelUp
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="content-one">
        <div class="thumbnail">
			<a href="<?php the_permalink(); ?>"><?php LevelUp_post_thumbnail(); ?></a>
            <div class="item-overlay"></div>
        </div>

		<div class="details-news">
            <span class="cat"><?php
            $category = get_the_category();
            echo $category[0]->cat_name;
            ?></span>
            <span class="spectator">/</span>
			<span class="date"><?php echo get_the_date(); ?></span>
		</div>
    </div>
</article>
