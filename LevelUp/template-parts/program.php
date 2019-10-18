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
<div id="program-<?php the_ID(); ?>">
    <div class="program-block">
        <?php the_content(); ?>
    </div>
</div>
