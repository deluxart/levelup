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
        // 'post_status' => 'publish',
        'public'   => true,
    ), $atts );
    $options = array(
        'post_type' => $args['type'],
        'order' => $args['order'],
        'orderby' => $args['orderby'],
        'posts_per_page' => $args['posts'],
        'color' => $args['color'],
        'category_name' => $args['category'],
        'post_status' => 'publish'
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



add_shortcode( 'posts', 'rmcc_post_cats_parameters_shortcode' );
function rmcc_post_cats_parameters_shortcode( $atts ) {
    ob_start();
    $args = shortcode_atts( array (
        'type' => 'post',
        'order' => 'date',
        'orderby' => 'title',
        'posts' => 6,
        'color' => '',
        'category' => '',
        'public'   => true,
        'status' => 'publish'
    ), $atts );
    $options = array(
        'post_type' => $args['type'],
        'order' => $args['order'],
        'orderby' => $args['orderby'],
        'posts_per_page' => $args['posts'],
        'color' => $args['color'],
        'category_name' => $args['category'],
        'paged' => get_query_var('paged') ?: 1,
        'post_status' => $args['status']
    );

    $query = new WP_Query( $options );
    if ( $query->have_posts() ) { ?>
            <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                <?php
                    get_template_part( 'template-parts/posts', get_post_format() );
                 ?>
            <?php endwhile;
            posts_nav_link();
            wp_reset_postdata(); ?>
    <?php $myvariable = ob_get_clean();
    return $myvariable;
    }
}







// add_shortcode('posts', 'my_shortcode_function');
// function my_shortcode_function() {
// 	global $wp_query;
// 	$wp_query = new WP_Query(array(
// 		// 'category_name' => 'portfolio',
// 		'post_type' => 'post',
// 		'posts_per_page' => '6',
// 		'paged' => get_query_var('paged') ?: 1
// 	));
// ob_start();
// echo '<div class="portfolio">';
// 	if ( have_posts() ) :
// 	        while ( have_posts() ) : the_post();

// 	            get_template_part( 'template-parts/posts', get_post_format() );

// 	        endwhile;
// 	    else :
// 	        get_template_part( 'template-parts/content', 'none' );
// 	    endif;
// echo '</div>';

// 	posts_nav_link();
// 	wp_reset_query();
// 	$out = ob_get_clean();
// 	return $out;
// }






?>
