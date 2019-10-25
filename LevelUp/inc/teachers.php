<?php
// Register Post Type - Teachers
add_action( 'init', 'lvl_teachers' );
function lvl_teachers() {
    register_taxonomy('teacherscat', array('teachers'), array(
        'label'                 => 'Категории',
        'labels'                => array(
            'name'              => 'Курс преподавателя',
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
        'name' => 'Преподаватели',
        'singular_name' => 'Препод',
        'add_new' => 'Добавить препода',
        'add_new_item' => 'Новый преподаватель',
        'edit_item' => 'Редактировать преподавателя',
        'new_item' => 'Новый преподаватель',
        'all_items' => 'Все преподаватели',
        'search_items' => 'Искать преподавателя',
        'not_found' =>  'Преводавателей не найдено.',
        'not_found_in_trash' => 'В корзине нет преподавателей.',
        'menu_name' => 'Преподаватели',
        'featured_image' => 'Фото преподавателя',
        'remove_featured_image' => 'Удалить фото преподавателя',
    );
    $args = array(
        'labels' => $labels,
        'public' => false,
        'show_ui' => true,
        'has_archive' => true,
        'capability_type' => 'post',
        'menu_icon' => 'dashicons-businessman',
        'menu_position' => 11,
        'query_var' => true,
        'supports' => array('title','editor','thumbnail','comments','revisions')
    );
    register_post_type('teachers', $args);
}
// End - Register Post Type - Teachers

// Add custom Meta Box for job position
add_action('add_meta_boxes', 'admin_init_teacher');
function admin_init_teacher(){
    $screens = array( 'teachers' );
    add_meta_box("job_position_teacher", "Дополнительно", "meta_options_teacher", "teachers", "side", "high");
}

function meta_options_teacher( $post, $meta ){
	$screens = $meta['args'];
	wp_nonce_field( plugin_basename(__FILE__), 'teacher_noncename' );
    $job_position = get_post_meta( $post->ID, 'job_position', 1 );
    $custom_id_teacher = $post->ID;
?>
    <label for="job_position">Должность:</label><input name="job_position_field" id="job_position_field" type="text" style="width: 100%;" value="<?php echo $job_position; ?>" />
    <label>Айдишник:</label><input name='teacher_id' type='text' style='width: 100%;' value='[teacher id="<?php echo $custom_id_teacher; ?>"]' readonly/>
<?php
}

add_action( 'save_post', 'job_position_save' );
function job_position_save( $post_id ) {
    if ( ! isset( $_POST['job_position_field'] ) )
        return;
    if ( ! wp_verify_nonce( $_POST['teacher_noncename'], plugin_basename(__FILE__) ) )
        return;
    if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE )
        return;
    if( ! current_user_can( 'edit_post', $post_id ) )
        return;
    $teacher_data = sanitize_text_field( $_POST['job_position_field'] );
    update_post_meta( $post_id, 'job_position', $teacher_data );
}

// End - Add custom Meta Box for job position




add_shortcode( 'teacher',  'call_shortcode_teacher' );
    function call_shortcode_teacher( $atts ) {
    ob_start();
    $atts = shortcode_atts( array( 'id' => null ), $atts );
    $teacher_query = new WP_Query( array(
        'post_type' => 'teachers',
        'p' => intval( $atts['id'] )
    ));

    echo '<div class="teacher">';
    if ( $teacher_query->have_posts() ) :
        while ( $teacher_query->have_posts() ) : $teacher_query->the_post();
            get_template_part( 'template-parts/teacher', get_post_format() );
        endwhile;
    else :
        get_template_part( 'template-parts/content', 'none' );
    endif;
    echo '</div>';

    wp_reset_postdata();
        return ob_get_clean();
}

add_filter( 'manage_edit-teachers_columns', 'my_edit_teachers_columns' ) ;
function my_edit_teachers_columns( $columns ) {
    $columns = array(
        'cb' => '&lt;input type="checkbox" />',
        'riv_post_thumbs' => __('Фото'),
        'title' => __( 'Имя преподавателя' ),
        'shortcode' => __( 'Шорткод' ),
        'cat_teatcher' => __( 'Курс' ),
        'date' => __( 'Date' )
    );
    return $columns;
}


add_action( 'manage_teachers_posts_custom_column', 'my_manage_teachers_columns', 10, 2 );
function my_manage_teachers_columns( $column, $post_id ) {
    global $post;

    switch( $column ) {
        case 'shortcode' :
            $shortcode = $post->ID;
            if ( empty( $shortcode ) )
                echo __( 'Unknown' );
            else
                printf( __( '<input type="text" onfocus="this.select();" style="width: auto;max-width: 142px;" readonly="" value="[teacher id=%s]" class="large-text code">' ), $shortcode );
        break;

        case 'riv_post_thumbs' :
            $photo = the_post_thumbnail( 'featured-thumbnail' );
            if ( empty( $photo ) );
            else
                printf( $photo );
        break;


        case 'cat_teatcher' :
            $taxonomy = 'teacherscat';
            $post_type = get_post_type($post_id);
            $terms = get_the_terms($post_id, $taxonomy);

            if (!empty($terms) ) {
                foreach ( $terms as $term )
                $post_terms[] ="<a href='edit.php?post_type={$post_type}&{$taxonomy}={$term->slug}'> " .esc_html(sanitize_term_field('name', $term->name, $term->term_id, $taxonomy, 'edit')) . "</a>";
                echo join('', $post_terms );
            }
             else echo '<i>Без категории</i>';
        break;


        default :
            break;
    }
}

add_filter( 'pll_get_post_types', 'add_cpt_to_pll', 10, 2 );
function add_cpt_to_pll( $post_types, $is_settings ) {
    if ( $is_settings ) {
        // unset( $post_types['teachers'] );
    } else {
        $post_types['teachers'] = 'teachers';
    }
    return $post_types;
}

?>
