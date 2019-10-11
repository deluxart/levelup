<?php
add_action( 'init', 'lvl_teachers' );

function lvl_teachers() {
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
        'menu_icon' => 'dashicons-businessman',
        'menu_position' => 15,
        'supports' => array( 'title', 'editor', 'comments', 'author', 'thumbnail', 'revisions')
    );
    register_post_type('teachers', $args);
}



add_action("admin_init", "admin_init");
    add_action('save_post', 'save_job_position');

    function admin_init(){
        add_meta_box("job_position", "Дополнительно", "meta_options", "teachers", "side", "high");
    }

    function meta_options(){
        global $post;
        $custom = get_post_custom($post->ID);
        $job_position = $custom["job_position"][0];
        $custom_id = $post->ID;
?>
    <label>Должность:</label><input name="job_position" type="text" style="width: 100%;" value="<?php echo $job_position; ?>" />
    <label>Айдишник:</label><input name='teacher_id' type='text' style='width: 100%;' value='[teacher id="<?php echo $custom_id; ?>"]' readonly/>
<?php
    }

    function save_job_position(){
        global $post;
        update_post_meta($post->ID, "job_position", $_POST["job_position"]);
    }

add_shortcode( 'teacher',  'call_shortcode_teacher' );
    function call_shortcode_teacher( $atts, $content = '' ) {
        global $wp_query;
        $atts = shortcode_atts( array( 'id' => null ), $atts );
        $wp_query = new WP_Query( array(
            'post_type' => 'teachers',
            'p' => intval( $atts['id'] )
        ) );

    ob_start();
    echo '<div class="teacher">';
        if ( have_posts() ) :
                while ( have_posts() ) : the_post();

                    get_template_part( 'template-parts/teacher', get_post_format() );

                endwhile;
            else :
                get_template_part( 'template-parts/content', 'none' );
            endif;
    echo '</div>';

        wp_reset_query();
        $out = ob_get_clean();
        return $out;
    }


add_filter( 'manage_edit-teachers_columns', 'my_edit_teachers_columns' ) ;

function my_edit_teachers_columns( $columns ) {

    $columns = array(
        'cb' => '&lt;input type="checkbox" />',
        'riv_post_thumbs' => __('Фото'),
        'title' => __( 'Имя преподавателя' ),
        'shortcode' => __( 'Шорткод' ),
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
                printf( __( '[teacher id="%s"]' ), $shortcode );

        break;

        case 'riv_post_thumbs' :
            $photo = the_post_thumbnail( 'featured-thumbnail' );
            if ( empty( $photo ) );
            else
                printf( $photo );
        break;

        default :
            break;
    }
}

?>
