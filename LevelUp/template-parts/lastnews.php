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
<div id="lastpost-<?php the_ID(); ?>">
    <div class="teacher-lvl">
        <div class="photo">
            <?php the_post_thumbnail('full'); ?>
        </div>
        <div class="text">
            <h4><?php the_title(); ?></h4>
            <p><?php the_content(); ?></p>
        </div>
    </div>
</div>
