<?php

// Для блока с последними новостями на главной
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
// Для блока с последними новостями на главной


// Для вывода последних записей по указанным параметрам (+ переключатель страниц)
add_shortcode( 'posts', 'rmcc_post_cats_parameters_shortcode' );
function rmcc_post_cats_parameters_shortcode( $atts ) {
    ob_start();
    $args = shortcode_atts( array (
        'type' => 'post',
        'order' => 'date',
        'orderby' => 'title',
        'posts' => -1,
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
// Для вывода последних записей по указанным параметрам (+ переключатель страниц)



add_shortcode( 'home-slides', 'lvl_home_post_slides' );
function lvl_home_post_slides( $atts ) {
    ob_start();
    $args = shortcode_atts( array (
        'type' => 'post',
        'posts' => -1,
        'post_status' => 'publish',
        'public'   => true,
    ), $atts );
    $options = array(
        'post_type' => $args['type'],
        'posts_per_page' => $args['posts'],
        'post_status' => 'publish',
        'meta_query' => array(
            'relation' => 'AND',
            'feature_clause' => array(
                'key' => 'event_date_news',
                'compare' => 'EXISTS',
            ),
        ),

        'orderby' => array(
            'event_date_news' => 'ASC',
            'date' => 'DESC',
        )
    );
    $query = new WP_Query( $options );
    $count = $query->found_posts;

if ( $count <= 2 ) {
    echo '<div class="test1-slide"><a href="https://levelup.ua/dev-studio"><img src="https://levelup.ua/wp-content/uploads/2019/12/dev-studio.jpg" alt=""></a></div>';
} elseif ( $count <= 1 ) {
    echo '<div class="test2-slide"><a href="https://levelup.ua/dev-studio"><img src="https://levelup.ua/wp-content/uploads/2019/12/dev-studio.jpg" alt=""></a></div>';
    echo '<div class="test2-slide"><a href="https://levelup.ua/career-center"><img src="https://levelup.ua/wp-content/uploads/2019/12/image-career.jpg" alt=""></a></div>';
}

    if ( $query->have_posts() ) { ?>
            <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                <?php
                    get_template_part( 'template-parts/slides', get_post_format() );
                 ?>
            <?php endwhile;
            wp_reset_postdata(); ?>
    <?php $myvariable = ob_get_clean();
    return $myvariable;
    }






}














add_shortcode( 'cat-posts', 'cat_post_listing_parameters_shortcode' );
function cat_post_listing_parameters_shortcode( $atts ) {
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
        'post__not_in' => array( get_the_ID() ),
        'post_status' => 'publish'
    );

    $query = new WP_Query( $options );
    if ( $query->have_posts() ) { ?>
            <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                <?php
                    get_template_part( 'template-parts/cat', get_post_format() );
                 ?>
            <?php endwhile;
            wp_reset_postdata(); ?>
    <?php $myvariable = ob_get_clean();
    return $myvariable;
    }
}



add_shortcode( 'cat-articles', 'cat_articles_listing_parameters_shortcode' );
function cat_articles_listing_parameters_shortcode( $atts ) {
    ob_start();
    $args = shortcode_atts( array (
        'type' => 'post',
        'order' => 'date',
        'orderby' => 'title',
        'posts' => -1,
        'color' => '',
        'category' => '',
        'public'   => true,
    ), $atts );
    $options = array(
        'post_type' => $args['type'],
        'order' => $args['order'],
        'orderby' => $args['orderby'],
        'posts_per_page' => $args['posts'],
        'color' => $args['color'],
        'category_name' => $args['category'],
        'post__not_in' => array( get_the_ID() ),
        'post_status' => 'publish'
    );

    $query = new WP_Query( $options );
    if ( $query->have_posts() ) { ?>
            <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                <?php
                    get_template_part( 'template-parts/articles', get_post_format() );
                 ?>
            <?php endwhile;
            wp_reset_postdata(); ?>
    <?php $myvariable = ob_get_clean();
    return $myvariable;
    }
}



// recent posts shortcode
function shapeSpace_recent_posts_shortcode($atts, $content = null) {

	global $post;

	extract(shortcode_atts(array(
		'cat'     => '',
		'num'     => '5',
		'order'   => 'DESC',
		'orderby' => 'post_date',
	), $atts));

	$args = array(
		'cat'            => $cat,
		'posts_per_page' => $num,
		'order'          => $order,
		'orderby'        => $orderby,
	);

	$var = '';

	$posts = get_posts($args);
	ob_start();
	foreach($posts as $post) {

		setup_postdata($post);
		get_template_part( 'template-parts/widget', get_post_format() );

	}

	wp_reset_postdata();
	$var = ob_get_contents();
	ob_end_clean();
	return '<div class="events_block last-mini">'. $var .'</div>';

}
add_shortcode('recent_posts', 'shapeSpace_recent_posts_shortcode');

?>
