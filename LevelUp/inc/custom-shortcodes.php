<?php


// create shortcode to list all clothes which come in blue
add_shortcode( 'list-posts', 'rmcc_post_listing_parameters_shortcode' );
function rmcc_post_listing_parameters_shortcode( $atts ) {
    ob_start();
// define attributes and their defaults
    $args = shortcode_atts( array (
        'type' => 'post',
        'order' => 'date',
        'orderby' => 'title',
        'posts' => -1,
        'color' => '',
        // 'post_tag' => '',
        'category' => '',
        'public'   => true,
    ), $atts );
        // define query parameters based on attributes
    $options = array(
        'post_type' => $args['type'],
        'order' => $args['order'],
        'orderby' => $args['orderby'],
        'posts_per_page' => $args['posts'],
        'color' => $args['color'],
        // 'post_tag' => $args['post_tag'],
        'category_name' => $args['category']
    );


    $query = new WP_Query( $options );
    // run the loop based on the query
    if ( $query->have_posts() ) { ?>
        <!-- <ul class="clothes-listing"> -->
            <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                <?php
                 get_template_part( 'template-parts/lastnews', get_post_format() );
                 ?>
            <!-- <li id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </li> -->
            <?php endwhile;
            wp_reset_postdata(); ?>
        <!-- </ul> -->
    <?php $myvariable = ob_get_clean();
    return $myvariable;
    }
}



?>
