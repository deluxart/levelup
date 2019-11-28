<?php
add_action( 'init', 'lvl_course_shortcodes' );

function lvl_course_shortcodes() {
    register_taxonomy('levelup_courses_cat', array('levelup_courses'), array(
        'label'                 => 'Категории',
        'labels'                => array(
            'name'              => 'Курс',
            'all_items'         => 'Курс',
            'menu_name'         => 'Категории (Курсы)',
        ),
        'description'           => 'Категории для преподавателей',
        'public'                => true,
        'show_in_nav_menus'     => false,
        'show_ui'               => true,
        'show_tagcloud'         => false,
        'hierarchical'          => true,
        'rewrite'               => array('slug'=>'teachers', 'hierarchical'=>false, 'with_front'=>false, 'feed'=>false ),
        'show_admin_column'     => true,
    ) );

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







add_filter( 'manage_edit-levelup_courses_columns', 'my_edit_levelup_courses_columns' ) ;
function my_edit_levelup_courses_columns( $columns ) {
    $columns = array(
        'cb' => '&lt;input type="checkbox" />',
        'course_icon' => __(''),
        'title' => __( 'Название курса' ),
        'data_starta' => __( 'Старт' ),
        'stoimost' => __( 'Стоимость' ),
        'grafik_zanyatij' => __( 'Расписание' ),
        'otobrazhenie' => __( 'Открыть набор' ),
    );
    return $columns;
}


add_action( 'manage_levelup_courses_posts_custom_column', 'my_manage_levelup_courses_columns', 10, 2 );
function my_manage_levelup_courses_columns( $column, $post_id ) {
    global $post;

    switch( $column ) {
        case 'course_icon' :
            $logo = get_field( "logo_url", $post->ID );
            if ( empty( $logo ) );
            else
                printf( __( '<img src="%s" style="display: block; max-width: 48px; max-height: 48px;" alt="" />' ), $logo );
        break;

        case 'data_starta' :
            $start = get_field( "data_starta", $post->ID );
            if ( empty( $start ) )
                echo __( 'Не указана' );
            else
                printf( $start );
        break;

        case 'stoimost' :
            $price = get_field( "stoimost", $post->ID );
            $price_before = get_field( "price_before", $post->ID );
            $znachenie_czeny = get_field( "znachenie_czeny", $post->ID );
            if ( empty( $price ) )
                echo __( 'Не указана' );
            else
                printf( $price );
        break;

        case 'grafik_zanyatij' :
            $grafik = get_field( "grafik_zanyatij", $post->ID );
            if ( empty( $grafik ) )
                echo __( 'Не указан' );
            else
                printf( $grafik );
        break;

        case 'otobrazhenie' :
            $otobrazhenie = get_field( "otobrazhenie", $post->ID );
            if ( $otobrazhenie == 1 )
                echo __( 'Скрыто' );
            elseif ( $otobrazhenie == 2 )
                echo __( 'Отображается' );
        break;

        default :
            break;
    }
}


        // echo get_field( "data_starta", $post->ID );




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
