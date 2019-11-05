<?php

add_shortcode( 'list-posts', 'rmcc_post_listing_parameters_shortcode' );
function rmcc_post_listing_parameters_shortcode( $atts ) {
    ob_start();
    $args = shortcode_atts( array (
        'type' => 'post',
        'order' => 'date',
        'orderby' => 'title',
        'posts' => -1,
        'color' => '',
        'category' => '',
        'post_status' => 'publish',
        'public'   => true,
    ), $atts );
    $options = array(
        'post_type' => $args['type'],
        'order' => $args['order'],
        'orderby' => $args['orderby'],
        'posts_per_page' => $args['posts'],
        'color' => $args['color'],
        'category_name' => $args['category']
    );


    $query = new WP_Query( $options );
    if ( $query->have_posts() ) { ?>
            <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                <?php
                 get_template_part( 'template-parts/lastnews', get_post_format() );
                 ?>
            <?php endwhile;
            wp_reset_postdata(); ?>
    <?php $myvariable = ob_get_clean();
    return $myvariable;
    }
}
?>
