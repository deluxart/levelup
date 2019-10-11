<?php
add_action( 'init', 'health_products' ); // Использовать функцию только внутри хука init

function health_products() {
	$labels = array(
		'name' => 'Преподаватели',
		'singular_name' => 'Препод', // админ панель Добавить->Функцию
		'add_new' => 'Добавить препода',
		'add_new_item' => 'Добавить нового преподавателя', // заголовок тега <title>
		'edit_item' => 'Редактировать преподавателя',
		'new_item' => 'Новый преподаватель',
		'all_items' => 'Все преподаватели',
		// 'view_item' => 'Просмотр продукта на сайте',
		'search_items' => 'Искать преподавателя',
		'not_found' =>  'Преводавателей не найдено.',
		'not_found_in_trash' => 'В корзине нет преподавателей.',
		'menu_name' => 'Преподаватели' // ссылка в меню в админке
	);
	$args = array(
		'labels' => $labels,
		'public' => false,
        //'rewrite' => array('slug' => 'health/%health%'),
		'show_ui' => true, // показывать интерфейс в админке
		'has_archive' => true,
		'menu_icon' => 'dashicons-businessman', // иконка корзины
		'menu_position' => 20, // порядок в меню
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

        wp_reset_query(); // сброс $wp_query
        $out = ob_get_clean();
        return $out;
    }








    dd_action( 'manage_teachers_posts_custom_column', 'my_manage_teachers_columns', 10, 2 );

    function my_manage_teachers_columns( $column, $post_id ) {
        global $post;

        switch( $column ) {

            /* If displaying the 'scode' column. */
            case 'scode' :

                /* Get the post meta. */
                $scode = get_post_meta( $post_id, 'scode', true );

                /* If no scode is found, output a default message. */
                if ( empty( $scode ) )
                    echo __( 'Unknown' );

                /* If there is a scode, append 'minutes' to the text string. */
                else
                    printf( __( '%s minutes' ), $scode );

                break;

            /* If displaying the 'genre' column. */
            case 'genre' :

                /* Get the genres for the post. */
                $terms = get_the_terms( $post_id, 'genre' );

                /* If terms were found. */
                if ( !empty( $terms ) ) {

                    $out = array();

                    /* Loop through each term, linking to the 'edit posts' page for the specific term. */
                    foreach ( $terms as $term ) {
                        $out[] = sprintf( '&lt;a href="%s">%s&lt;/a>',
                            esc_url( add_query_arg( array( 'post_type' => $post->post_type, 'genre' => $term->slug ), 'edit.php' ) ),
                            esc_html( sanitize_term_field( 'name', $term->name, $term->term_id, 'genre', 'display' ) )
                        );
                    }

                    /* Join the terms, separating them with a comma. */
                    echo join( ', ', $out );
                }

                /* If no terms were found, output a default message. */
                else {
                    _e( 'No Genres' );
                }

                break;

            /* Just break out of the switch statement for everything else. */
            default :
                break;
        }
    }










?>
