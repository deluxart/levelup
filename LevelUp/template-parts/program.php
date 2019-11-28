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
<!-- <div id="program-< ?php the_ID(); ?>">
    <div class="program-block">
        < ?php the_content(); ? >
    </div>
</div> -->


<div id="program-<?php the_ID(); ?>">
    <div class="program-block">






    <?php if ( have_rows( 'programma_kursa' ) ) : ?>
        <?php while ( have_rows( 'programma_kursa' ) ) : the_row(); ?>
        <div class="spoiler parrent">
	        <div class="head"><?php the_sub_field( 'title' ); ?></div>
            <div class="cont">
            <?php if ( have_rows( 'opisanie' ) ) : ?>
                <ul>
                <?php while ( have_rows( 'opisanie' ) ) : the_row(); ?>
                    <li><?php the_sub_field( 'punkty' ); ?></li>
                <?php endwhile; ?>
                </ul>
            <?php else : ?>
                <?php // no rows found ?>
            <?php endif; ?>
            </div>
        </div>
        <?php endwhile; ?>
    <?php else : ?>
        <?php // no rows found ?>

    <?php endif; ?>

    </div>
</div>
