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
