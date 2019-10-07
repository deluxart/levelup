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
		'supports' => array( 'title', 'editor', 'comments', 'author', 'thumbnail',)
	);
	register_post_type('teachers', $args);
}



add_action("admin_init", "admin_init");
    add_action('save_post', 'save_job_position');

    function admin_init(){
        add_meta_box("vidInfo-meta", "Дополнительно", "meta_options", "teachers", "side", "high");
    }

    function meta_options(){
        global $post;
        $custom = get_post_custom($post->ID);
        $job_position = $custom["job_position"][0];
?>
    <label>Должность:</label><input name="job_position" type="text" value="<?php echo $job_position; ?>" />
<?php
    }

	function save_job_position(){
		global $post;
		update_post_meta($post->ID, "job_position", $_POST["job_position"]);
	}


?>
