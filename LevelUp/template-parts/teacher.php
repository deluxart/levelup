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
<div id="teacher-<?php the_ID(); ?>">
    <div class="teacher-lvl">
        <div class="photo">
            <?php the_post_thumbnail('thumbnail'); ?>
        </div>
        <div class="text">
            <h4><?php the_title(); ?></h4>
            <?php if ( $job_position = get_post_meta( $post->ID, 'job_position', true ) ) : ?>
                <p class="job_position"><?php echo $job_position ?></p>
            <?php endif; ?>
            <p><?php the_content(); ?></p>
        </div>
    </div>
</div>
</div>
