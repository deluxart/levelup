<?php
add_action( 'init', 'courses_programs' );

function courses_programs() {
	$labels = array(
		'name' => 'Программы',
		'singular_name' => 'Программа',
		'add_new' => 'Добавить программу',
		'add_new_item' => 'Добавить новую программу',
		'edit_item' => 'Редактировать программу',
		'new_item' => 'Новая программа',
		'all_items' => 'Все программы',
		'search_items' => 'Искать программу',
		'not_found' =>  'Программа не найдена.',
		'not_found_in_trash' => 'В корзине нет программ.',
		'menu_name' => 'Программы'
	);
	$args = array(
		'labels' => $labels,
		'public' => false,
		'show_ui' => true,
		'has_archive' => true,
		'menu_icon' => 'dashicons-list-view',
		'menu_position' => 10,
		'supports' => array( 'title', 'editor', 'comments', 'author', 'thumbnail', 'revisions')
	);
	register_post_type('course-programs', $args);
}


add_action("admin_init", "admin_init_program");
    add_action('save_post', 'save_course_program');

    function admin_init_program(){
        add_meta_box("course_program", "Дополнительно", "meta_options_program", "course-programs", "side", "high");
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

	function save_course_program(){
		global $post;
		update_post_meta($post->ID, "job_position", $_POST["job_position"]);
	}



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

                    get_template_part( 'template-parts/program', get_post_format() );

                endwhile;
            else :
                get_template_part( 'template-parts/content', 'none' );
            endif;
    echo '</div>';

        wp_reset_query(); // сброс $wp_query
        $out = ob_get_clean();
        return $out;
    }




    add_filter( 'pll_get_post_types', 'add_cpt_to_pll', 10, 2 );
    function add_cpt_to_pll( $post_types, $is_settings ) {
        if ( $is_settings ) {
            // unset( $post_types['teachers'] );
        } else {
            $post_types['course-programs'] = 'course-programs';
        }
        return $post_types;
    }

?>
