<?php
add_action( 'init', 'courses_programs' ); // Использовать функцию только внутри хука init

function courses_programs() {
	$labels = array(
		'name' => 'Программы',
		'singular_name' => 'Программа', // админ панель Добавить->Функцию
		'add_new' => 'Добавить программу',
		'add_new_item' => 'Добавить новую программу', // заголовок тега <title>
		'edit_item' => 'Редактировать программу',
		'new_item' => 'Новая программа',
		'all_items' => 'Все программы',
		// 'view_item' => 'Просмотр продукта на сайте',
		'search_items' => 'Искать программу',
		'not_found' =>  'Программа не найдена.',
		'not_found_in_trash' => 'В корзине нет программ.',
		'menu_name' => 'Программы' // ссылка в меню в админке
	);
	$args = array(
		'labels' => $labels,
		'public' => false,
        //'rewrite' => array('slug' => 'health/%health%'),
		'show_ui' => true, // показывать интерфейс в админке
		'has_archive' => true,
		'menu_icon' => 'dashicons-list-view', // иконка корзины
		'menu_position' => 10, // порядок в меню
		'supports' => array( 'title', 'editor', 'comments', 'author', 'thumbnail', 'revisions')
	);
	register_post_type('course-programs', $args);
}



add_action("admin_init", "admin_init_program");
    add_action('save_post', 'save_job_position');

    function admin_init_program(){
        add_meta_box("course_program", "Дополнительно", "meta_options_program", "teachers", "side", "high");
    }

    function meta_options_program(){
        global $post;
        $custom = get_post_custom($post->ID);
        // $job_position = $custom["job_position"][0];
        $custom_id = $post->ID;
?>
    <!-- <label>Должность:</label><input name="job_position" type="text" style="width: 100%;" value="<?php echo $job_position; ?>" /> -->
    <label>Айдишник:</label><input name='program_id' type='text' style='width: 100%;' value='[program id="<?php echo $custom_id; ?>"]' readonly/>
<?php
    }

	// function save_job_position(){
	// 	global $post;
	// 	update_post_meta($post->ID, "job_position", $_POST["job_position"]);
	// }



add_shortcode( 'program',  'call_shortcode_program' );
    function call_shortcode_program( $atts, $content = '' ) {
        global $wp_query;
        $atts = shortcode_atts( array( 'id' => null ), $atts );
        $wp_query = new WP_Query( array(
            'post_type' => 'course-programs',
            'p' => intval( $atts['id'] )
        ) );

    ob_start();
    echo '<div class="program">';
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

?>
