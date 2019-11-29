<?php
add_action( 'init', 'lvl_course_shortcodes' );

function lvl_course_shortcodes() {
    register_taxonomy('levelup_courses_cat', array('levelup_courses'), array(
        'label'                 => 'Категории',
        'labels'                => array(
            'name'              => 'Курс',
            'all_items'         => 'Курс',
            'menu_name'         => 'Категории курсов',
        ),
        'description'           => 'Категории для курсов',
        'public'                => true,
        'show_in_nav_menus'     => false,
        'show_ui'               => true,
        'show_tagcloud'         => false,
        'hierarchical'          => true,
        'rewrite'               => array('slug'=>'teachers', 'hierarchical'=>false, 'with_front'=>false, 'feed'=>false ),
        'show_admin_column'     => true,
    ) );

    $labels = array(
        'name' => 'Курсы Level Up',
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
        'cat_course' => __( 'Категория' ),
        'otobrazhenie' => __( 'Открыт набор' ),
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
            if ( have_rows( 'data_raspisanie_grafik' ) ) :
                while ( have_rows( 'data_raspisanie_grafik' ) ) : the_row();
                    $start = get_sub_field( "date_start", $post->ID );
                if ( empty( $start ) )
                    echo __( 'Дата не указана' );
                else
                    printf( $start );
                endwhile;
            endif;
        break;



        case 'stoimost' :
            if ( have_rows( 'stoimost_kursa' ) ) :
                while ( have_rows( 'stoimost_kursa' ) ) : the_row();
                    $price = get_sub_field( "price_course", $post->ID );
                    $price_before = get_sub_field( "before_price", $post->ID );
                    $znachenie_czeny = get_sub_field( "units", $post->ID );

                    if ( empty( $price ) )
                        echo __( 'Не указана' );
                    else
                        printf( $price_before );
                        echo __( ' ' );
                        printf( __( '<strong>%s</strong>' ), $price );
                        echo __( ' ' );
                        printf( $znachenie_czeny );
                    endwhile;
                endif;
        break;


        case 'grafik_zanyatij' :
            if ( have_rows( 'data_raspisanie_grafik' ) ) :
                while ( have_rows( 'data_raspisanie_grafik' ) ) : the_row();
                    $grafik = get_sub_field( "schedule", $post->ID );
                if ( empty( $grafik ) )
                    echo __( 'График не указан' );
                else
                    printf( $grafik );
                endwhile;
            endif;
        break;


        case 'cat_course' :
            $taxonomy = 'levelup_courses_cat';
            $post_type = get_post_type($post_id);
            $terms = get_the_terms($post_id, $taxonomy);

            if (!empty($terms) ) {
                foreach ( $terms as $term )
                $post_terms[] ="<a href='edit.php?post_type={$post_type}&{$taxonomy}={$term->slug}'> " .esc_html(sanitize_term_field('name', $term->name, $term->term_id, $taxonomy, 'edit')) . "</a>";
                echo join('', $post_terms );
            }
             else echo '<i>Без категории</i>';
        break;




        case 'otobrazhenie' :

            if ( have_rows( 'otkryt_nabor' ) ) :
                while ( have_rows( 'otkryt_nabor' ) ) : the_row();
                    $otobrazhenie = get_sub_field( "nabor_otkryt", $post->ID );
                    $sortdate = get_sub_field( "sortirovka", $post->ID );
                    if ( $otobrazhenie == 1 )
                    printf( __( '<strong>%s</strong>' ), $sortdate );
                else
                    echo __( '<span style="background: #fe5151;border-radius: 30px; padding: 3px 6px;color: #fff;">Скрыто</span>');
                endwhile;
            endif;
    break;

        default :
            break;
    }
}

add_shortcode( 'list-open-courses', 'open_courses_listing_parameters_shortcode' );
function open_courses_listing_parameters_shortcode( $atts ) {
    ob_start();
    $args = shortcode_atts( array (
        'type' => 'levelup_courses',
        'posts' => -1,
        'public'   => true,
    ), $atts );
    $options = array(
        'post_type' => $args['type'],
        'meta_key'          => 'otkryt_nabor_sortirovka',
        'orderby'           => 'meta_value',
        'order'             => 'ASC',
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



add_shortcode( 'courses-list', 'courses_listing_home' );
function courses_listing_home( $atts ) {
    ob_start();
    $args = shortcode_atts( array (
        'type' => 'levelup_courses',
        'posts' => -1,
        'category' => '',
        'public'   => true,
    ), $atts );
    $options = array(
        'post_type' => $args['type'],
        'meta_key'          => 'kol-vo_svobodnyh_mest',
        'orderby'           => 'meta_value',
        'order'             => 'ASC',
        'posts_per_page' => $args['posts'],
        'category_name' => $args['category'],
        'post_status' => 'publish'
    );

    $query = new WP_Query( $options );
    if ( $query->have_posts() ) { ?>
            <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                <?php
                    get_template_part( 'template-parts/cards-course', get_post_format() );
                 ?>
            <?php endwhile;
            wp_reset_postdata(); ?>
    <?php $myvariable = ob_get_clean();
    return $myvariable;
    }
}

?>
