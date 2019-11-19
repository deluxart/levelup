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

$eventDate = get_field( 'opublikovat_do' );
$currentDate = date('d.m.Y');

?>
<?php if($currentDate <= $eventDate && get_field( 'add_home_slide' ) == 1) { ?>

<div id="lastpost-<?php the_ID(); ?>" class="lastpost color-<?php $args['color'] ?>">
    <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail(); ?></a>
</div>

<?php
   } ?>
