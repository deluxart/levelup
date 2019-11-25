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
<?php
$eventDate = get_field( 'opublikovat_do' );
$currentDate = date('d.m.Y');

if($currentDate <= $eventDate && get_field( 'add_home_slide' ) == 1) { ?>

<div id="lastpost-<?php the_ID(); ?>" class="lastpost color-<?php $args['color'] ?>">
    <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" style="position: relative;"><div style="position: absolute; top: 30px; left: 30px; border-radius: 30px; background: #fff; padding: 10px; "><?php $eventDate; ?></div><?php the_post_thumbnail( 'full' ); ?></a>
</div>

<?php } ?>
