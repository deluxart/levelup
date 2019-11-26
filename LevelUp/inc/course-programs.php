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
		'supports' => array( 'title', 'editor', 'revisions')
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
        // $program_meta= $custom["program_meta"][0];
        $custom_id = $post->ID;
?>
    <!-- <label>Должность:</label><input name="program_meta" type="text" style="width: 100%;" value="<?php echo $program_meta; ?>" /> -->
    <label>Айдишник:</label><input name='program_id' type='text' style='width: 100%;' value='[program id="<?php echo $custom_id; ?>"]' readonly/>
<?php
    }

	function save_course_program(){
		global $post;
		update_post_meta($post->ID, "program_meta", $_POST["program_meta"]);
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


    add_filter( 'manage_edit-course-programs_columns', 'my_edit_programs_columns' ) ;
    function my_edit_programs_columns( $columns ) {
        $columns = array(
            'cb' => '&lt;input type="checkbox" />',
            'title' => __( 'Название курса (Программы)' ),
            'shortcode' => __( 'Шорткод' ),
            // 'cat_teatcher' => __( 'Курс' ),
            'date' => __( 'Date' )
        );
        return $columns;
    }


    add_action( 'manage_course-programs_posts_custom_column', 'my_manage_programs_columns', 10, 2 );
    function my_manage_programs_columns( $column, $post_id ) {
        global $post;

        switch( $column ) {
            case 'shortcode' :
                $shortcode = $post->ID;
                if ( empty( $shortcode ) )
                    echo __( 'Unknown' );
                else
                    printf( __( '<input type="text" onfocus="this.select();" style="width: auto;max-width: 142px;" readonly="" value="[program id=%s]" class="large-text code">' ), $shortcode );
            break;

            default :
                break;
        }
    }




    add_filter( 'pll_get_post_types', 'add_cpt_to_pll_programs', 10, 2 );
    function add_cpt_to_pll_programs( $post_types, $is_settings ) {
        if ( $is_settings ) {
            // unset( $post_types['teachers'] );
        } else {
            $post_types['course-programs'] = 'course-programs';
        }
        return $post_types;
    }


    add_shortcode( 'program-acf',  'call_shortcode_program_acf' );
    function call_shortcode_program_acf( $atts, $content = '' ) {
        global $wp_query;
        $atts = shortcode_atts( array( 'id' => null ), $atts );
        $wp_query = new WP_Query( array(
            'post_type' => 'levelup_courses',
            'p' => intval( $atts['id'] )
        ) );

        ob_start();
            if ( have_posts() ) :
                    while ( have_posts() ) : the_post();
                        echo '[program id=';
                            the_field( 'programma_kursa' );
                        echo ']';
                    endwhile;
                else :
                    get_template_part( 'template-parts/content', 'none' );
                endif;

            wp_reset_query(); // сброс $wp_query
            $out = ob_get_clean();
            // return $out;
            return do_shortcode( $out );
        }


        add_shortcode( 'teachers-acf',  'call_shortcode_teachers_acf' );
        function call_shortcode_teachers_acf( $atts, $content = '' ) {
            global $wp_query;
            $atts = shortcode_atts( array( 'id' => null ), $atts );
            $wp_query = new WP_Query( array(
                'post_type' => 'levelup_courses',
                'p' => intval( $atts['id'] )
            ) );

            ob_start();
                if ( have_posts() ) :
                        while ( have_posts() ) : the_post();


                            if ( have_rows( 'prepodavateli' ) ) :
                                while ( have_rows( 'prepodavateli' ) ) : the_row();

                                    echo '[teacher id=';
                                        $prepod = get_sub_field( 'prepod' );
                                        echo $prepod;
                                    echo ']';
                                    // var_dump( $teacher );
                                endwhile;
                            else :
                                // no rows found
                            endif;

                        endwhile;
                    else :
                        get_template_part( 'template-parts/content', 'none' );
                    endif;

                wp_reset_query(); // сброс $wp_query
                $out = ob_get_clean();
                // return $out;
                return do_shortcode( $out );
            }



?>
