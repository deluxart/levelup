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
		'menu_icon' => 'dashicons-businessperson', // иконка корзины
		'menu_position' => 20, // порядок в меню
		'supports' => array( 'title', 'editor', 'comments', 'author', 'thumbnail',)
	);
	register_post_type('teachers', $args);
}





function prefix_teammembers_metaboxes( ) {
    global $wp_meta_boxes;
    add_meta_box('postfunctiondiv', __('Function'), 'prefix_teammembers_metaboxes_html', 'prefix_teammembers', 'teachers', 'high');
    // add_meta_box( 'hcf-1', __( 'Сайдбар для данной записи', 'hcf' ), 'wporg_custom_box_html', $screen, 'side' );
 }
 add_action( 'add_meta_boxes_prefix-teammembers', 'prefix_teammembers_metaboxes' );



 function prefix_teammembers_metaboxes_html()
 {
     global $post;
     $custom = get_post_custom($post->ID);
     $function = isset($custom["function"][0])?$custom["function"][0]:'';
 ?>
     <label>Дожность:</label><input name="function" value="<?php echo $function; ?>">
 <?php
 }


 function prefix_teammembers_save_post()
 {
     if(empty($_POST)) return; //why is prefix_teammembers_save_post triggered by add new?
     global $post;
     update_post_meta($post->ID, "function", $_POST["function"]);
 }

 add_action( 'save_post_prefix-teammembers', 'prefix_teammembers_save_post' );

?>
