<?php
add_action( 'init', 'lvl_course_shortcodes' );

function lvl_course_shortcodes() {
	$labels = array(
		'name' => 'Курсы LVL',
		'singular_name' => 'Курс',
		'add_new' => 'Добавить курс',
		'add_new_item' => 'Добавить новый курс',
		'edit_item' => 'Редактировать курс',
		'new_item' => 'Новый курс',
		'all_items' => 'Все курсы',
		'search_items' => 'Искать курс',
		'not_found' =>  'Курс не найден.',
		'not_found_in_trash' => 'В корзине нет курсов.',
		'menu_name' => 'Курсы'
	);
	$args = array(
		'labels' => $labels,
		'public' => false,
		'show_ui' => true,
		'has_archive' => true,
		'menu_icon' => 'dashicons-analytics',
		'menu_position' => 10,
		'supports' => array( 'title', 'thumbnail', 'revisions')
	);
	register_post_type('levelup_courses', $args);
}





function my_page_columns($columns)
{
    $columns = array(
        'cb'         => '<input type="checkbox" />',
        'title'             => 'Название курса',
        'data_starta'     => 'Дата старта',
        'date'        =>    'Дата',
    );
    return $columns;
}

function my_custom_columns($column)
{
    global $post;

    if ($column == 'data_starta') {
        echo get_field( "data_starta", $post->ID );
    }
    else {
         echo '';
    }
}

add_action("manage_levelup_courses_posts_custom_column", "my_custom_columns");
add_filter("manage_levelup_courses_posts_columns", "my_page_columns");




// Для блока с последними новостями на главной
add_shortcode( 'list-open-courses', 'open_courses_listing_parameters_shortcode' );
function open_courses_listing_parameters_shortcode( $atts ) {
    ob_start();
    $args = shortcode_atts( array (
        'type' => 'levelup_courses',
        // 'order' => 'date',
        // 'orderby' => 'title',
        'posts' => -1,
        // 'post_status' => 'publish',
        'public'   => true,
    ), $atts );
    $options = array(
        'post_type' => $args['type'],
        'meta_key'			=> 'sort_courses',
        'orderby'			=> 'meta_value',
        // 'order' => $args['order'],
        // 'orderby' => $args['orderby'],
        'order'				=> 'ASC',
        'posts_per_page' => $args['posts']
    );

    $query = new WP_Query( $options );
    if ( $query->have_posts() ) { ?>
            <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                <?php
                    get_template_part( 'template-parts/open-courses', get_post_format() );
                 ?>
            <?php endwhile;
            wp_reset_postdata(); ?>
    <?php $myvariable = ob_get_clean();
    return $myvariable;
    }
}
// Для блока с последними новостями на главной


    // add_filter( 'manage_edit-course-programs_columns', 'my_edit_programs_columns' ) ;
    // function my_edit_programs_columns( $columns ) {
    //     $columns = array(
    //         'cb' => '&lt;input type="checkbox" />',
    //         'title' => __( 'Название курса (Программы)' ),
    //         'shortcode' => __( 'Шорткод' ),
    //         'date' => __( 'Date' )
    //     );
    //     return $columns;
    // }


    // add_action( 'manage_course-programs_posts_custom_column', 'my_manage_programs_columns', 10, 2 );
    // function my_manage_programs_columns( $column, $post_id ) {
    //     global $post;

    //     switch( $column ) {
    //         case 'shortcode' :
    //             $shortcode = $post->ID;
    //             if ( empty( $shortcode ) )
    //                 echo __( 'Unknown' );
    //             else
    //                 printf( __( '<input type="text" onfocus="this.select();" style="width: auto;max-width: 142px;" readonly="" value="[program id=%s]" class="large-text code">' ), $shortcode );
    //         break;

    //         default :
    //             break;
    //     }
    // }




    // add_filter( 'pll_get_post_types', 'add_cpt_to_pll_programs', 10, 2 );
    // function add_cpt_to_pll_programs( $post_types, $is_settings ) {
    //     if ( $is_settings ) {

    //     } else {
    //         $post_types['levelup_courses'] = 'levelup_courses';
    //     }
    //     return $post_types;
    // }

?>
