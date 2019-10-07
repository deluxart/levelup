<?php
/**
 * LevelUp functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * {@link https://codex.wordpress.org/Plugin_API}
 *
 * @package WordPress
 * @subpackage LevelUp
 * @since Level Up theme
 */

if ( ! isset( $content_width ) ) {
	$content_width = 660;
}

if ( version_compare( $GLOBALS['wp_version'], '4.1-alpha', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
}

if ( ! function_exists( 'LevelUp_setup' ) ) :
function LevelUp_setup() {
	load_theme_textdomain( 'LevelUp' );

	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );

	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 825, 510, true );

	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
	) );


	$color_scheme  = LevelUp_get_color_scheme();
	$default_color = trim( $color_scheme[0], '#' );

	add_theme_support( 'custom-background', apply_filters( 'LevelUp_custom_background_args', array(
		'default-color'      => $default_color,
		'default-attachment' => 'fixed',
	) ) );

	add_editor_style( array( 'assets/genericons/genericons.css', LevelUp_fonts_url() ) );
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif; // LevelUp_setup
add_action( 'after_setup_theme', 'LevelUp_setup' );

/**
 * Registered sidebars for LevelUp.
 */
function LevelUp_widgets_init() {
    register_sidebar( array(
		'name' => "Сайдбар - Новости",
		'id' => 'news-sidebar',
		'description' => 'Эти виджеты будут показаны на страницах записей новостей',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

    register_sidebar( array(
		'name' => "Сайдбар - Блог",
		'id' => 'blog-sidebar',
		'description' => 'Эти виджеты будут показаны на страницах записей блога',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

    register_sidebar( array(
		'name' => "Футер - 1 колонка",
		'id' => 'footer-1',
		'description' => 'Футер - 1 колонка',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '<span></span></h2>',
	) );

    register_sidebar( array(
		'name' => "Футер - 2 колонка",
		'id' => 'footer-2',
		'description' => 'Эти виджеты будут показаны в правой колонке сайта',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '<span></span></h2>',
	) );

    register_sidebar( array(
		'name' => "Футер - 3 колонка",
		'id' => 'footer-3',
		'description' => 'Эти виджеты будут показаны в правой колонке сайта',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '<span></span></h2>',
    ) );

    register_sidebar( array(
		'name' => "Футер - 4 колонка",
		'id' => 'footer-4',
		'description' => 'Эти виджеты будут показаны в правой колонке сайта',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '<span></span></h2>',
    ) );

    register_sidebar( array(
		'name' => "Сайдбар под новостью",
		'id' => 'after-news-sidebar',
		'description' => 'Для виджетов следом за новостью',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

    register_sidebar( array(
		'name' => "Сайдбар под статьей",
		'id' => 'after-blog-sidebar',
		'description' => 'Для виджетов следом за статьей',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'LevelUp_widgets_init' );

if ( ! function_exists( 'LevelUp_fonts_url' ) ) :
function LevelUp_fonts_url() {
	$fonts_url = '';
	$fonts     = array();
	$subsets   = 'latin,latin-ext';
	$subset = _x( 'no-subset', 'Add new subset (greek, cyrillic, devanagari, vietnamese)', 'LevelUp' );

	if ( 'cyrillic' == $subset ) {
		$subsets .= ',cyrillic,cyrillic-ext';
	} elseif ( 'greek' == $subset ) {
		$subsets .= ',greek,greek-ext';
	} elseif ( 'devanagari' == $subset ) {
		$subsets .= ',devanagari';
	} elseif ( 'vietnamese' == $subset ) {
		$subsets .= ',vietnamese';
	}

	if ( $fonts ) {
		$fonts_url = add_query_arg( array(
			'family' => urlencode( implode( '|', $fonts ) ),
			'subset' => urlencode( $subsets ),
		), 'https://fonts.googleapis.com/css' );
	}

	return $fonts_url;
}
endif;

require get_template_directory() . '/inc/options_page.php';

require get_template_directory() . '/inc/teachers.php';

/**
 * Load JS and styles.
 */

function LevelUp_scripts() {
	wp_enqueue_style( 'LevelUp-fonts', LevelUp_fonts_url(), array(), null );
    wp_enqueue_style( 'genericons', get_template_directory_uri() . '/assets/genericons/genericons.css', array(), '3.2' );
    wp_enqueue_style( 'slick-theme', get_template_directory_uri() . '/assets/slick/slick-theme.css', array(), '3.2' );
	wp_enqueue_style( 'slick', get_template_directory_uri() . '/assets/slick/slick.css', array(), '3.2' );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/bootstrap/bootstrap.min.css', array(), '3.2' );
	wp_enqueue_style( 'fotnawesome', get_template_directory_uri() . '/assets/font-awesome.min.css', array(), '3.2' );
	wp_enqueue_style( 'LevelUp-style', get_stylesheet_uri() );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
    }
    wp_enqueue_script( 'LevelUp-greensock', get_template_directory_uri() . '/assets/js/TweenMax.min.js', array( 'jquery' ), '20150330', true );
    wp_enqueue_script( 'LevelUp-wow', get_template_directory_uri() . '/assets/js/wow.min.js','','1',true);
    wp_enqueue_script( 'LevelUp-slick', get_template_directory_uri() . '/assets/slick/slick.min.js','','1',true);
    wp_enqueue_script( 'LevelUp-popper', get_template_directory_uri() . '/assets/js/popper.min.js','','1',true);
    wp_enqueue_script( 'LevelUp-bootstrap', get_template_directory_uri() . '/assets/bootstrap/bootstrap.min.js','','1',true);
    wp_enqueue_script( 'LevelUp-fs-menu', get_template_directory_uri() . '/assets/js/fs_menu.js', array( 'jquery' ), '20150330', true );
    wp_enqueue_script( 'LevelUp-script', get_template_directory_uri() . '/dist/scripts-all.min.js', array( 'jquery' ), '434', true );


}
add_action( 'wp_enqueue_scripts', 'LevelUp_scripts' );


function contact_styles() {
    if ( is_page( 6586 ) ) {
        //подключаем стили
        wp_enqueue_style ( 'timeline', get_template_directory_uri()
            . '/assets/timeline/css/style.css', array(), '1.0' );
        //отключаем стили
        wp_dequeue_style ( 'template' );
    }
}
add_action( 'wp_enqueue_scripts', 'contact_styles' );

function contact_scripts() {
    if ( is_page( 6586 ) ) {
        wp_enqueue_script( 'timeline', get_template_directory_uri() . '/assets/timeline/js/main.js', array( 'jquery' ), '20150330', true );
        wp_dequeue_style ( 'template' );
    }
}
add_action( 'wp_enqueue_scripts', 'contact_scripts' );

// function LevelUp_resource_hints( $urls, $relation_type ) {
// 	if ( wp_style_is( 'LevelUp-fonts', 'queue' ) && 'preconnect' === $relation_type ) {
// 		if ( version_compare( $GLOBALS['wp_version'], '4.7-alpha', '>=' ) ) {
// 			$urls[] = array(
// 				'href' => 'https://fonts.gstatic.com',
// 				'crossorigin',
// 			);
// 		} else {
// 			$urls[] = 'https://fonts.gstatic.com';
// 		}
// 	}

// 	return $urls;
// }
// add_filter( 'wp_resource_hints', 'LevelUp_resource_hints', 10, 2 );

// function LevelUp_post_nav_background() {
// 	if ( ! is_single() ) {
// 		return;
// 	}

// 	$previous = ( is_attachment() ) ? get_post( get_post()->post_parent ) : get_adjacent_post( false, '', true );
// 	$next     = get_adjacent_post( false, '', false );
// 	$css      = '';

// 	if ( is_attachment() && 'attachment' == $previous->post_type ) {
// 		return;
// 	}

// 	wp_add_inline_style( 'LevelUp-style', $css );
// }
// add_action( 'wp_enqueue_scripts', 'LevelUp_post_nav_background' );


// function LevelUp_nav_description( $item_output, $item, $depth, $args ) {
// 	if ( 'primary' == $args->theme_location && $item->description ) {
// 		$item_output = str_replace( $args->link_after . '</a>', '<div class="menu-item-description">' . $item->description . '</div>' . $args->link_after . '</a>', $item_output );
// 	}
// 	return $item_output;
// }
// add_filter( 'walker_nav_menu_start_el', 'LevelUp_nav_description', 10, 4 );

// function LevelUp_search_form_modify( $html ) {
// 	return str_replace( 'class="search-submit"', 'class="search-submit screen-reader-text"', $html );
// }
// add_filter( 'get_search_form', 'LevelUp_search_form_modify' );

function LevelUp_widget_tag_cloud_args( $args ) {
	$args['largest']  = 9;
	$args['smallest'] = 9;
	$args['unit']     = 'pt';
	$args['format']   = 'list';

	return $args;
}
add_filter( 'widget_tag_cloud_args', 'LevelUp_widget_tag_cloud_args' );

function _SmrkvLib_GetCourse ($atts = array(), $content = null, $tag)
{
	global $wpdb;
	$result =
		$wpdb->get_results('SELECT * FROM smrkv_courses WHERE url like "'.$atts['cource'].'%"');
	$dat_res = get_object_vars($result[0]);
	return $dat_res[$atts['field']];
}
add_shortcode( 'SmrkCourse', '_SmrkvLib_GetCourse' );

// function include_file($atts) {
//      extract(
//           shortcode_atts(
//                array(
//                     'filepath' => 'NULL',
//                     'key1' => 'NULL'
//                ), $atts
//           )
//      );

//      if(strpos($filepath,"?")) {
//           $query_string_pos = strpos($filepath,"?");
//           global $query_string;
//           $query_string = substr($filepath,$query_string_pos + 1);
//           $clean_file_path = substr($filepath,0,$query_string_pos);
//      } else {
//           $clean_file_path = $filepath;
//      }
//      if ($filepath != 'NULL' && file_exists(TEMPLATEPATH.$clean_file_path)){
//           ob_start();
//           include(TEMPLATEPATH.$clean_file_path);
//           $content = ob_get_clean();
//           return $content;
//      }
// }
//register the Shortcode handler
// add_shortcode('include', 'include_file');


add_action( 'admin_init', 'my_remove_menu_pages' );
function my_remove_menu_pages() {

global $user_ID;

if ( current_user_can( 'manager' ) ) {
    remove_menu_page( 'plugins.php' );
    remove_menu_page( 'index.php' );
        remove_menu_page( 'edit-comments.php' );
         remove_menu_page( 'admin.php?page=wpcf7' );
         remove_menu_page( 'edit.php?post_type=rl_gallery' );
         remove_menu_page( 'wpcf7' );
         remove_menu_page( 'tools.php' );
         remove_menu_page( 'Media' );
         remove_menu_page( 'edit.php' );
         remove_menu_page( 'profile.php' );
         remove_menu_page( 'upload.php' );
    }
}
register_nav_menus(array(
	'mibile_nav'    => 'Мобильная навигация',
	'full_nav_1'    => 'Основное меню (Шапка)',
	'full_nav_0'    => 'Меню #1 (Базовое)',
	'full_nav_2'    => 'Меню #2 (Все курсы)',
	'full_nav_3'    => 'Меню #3 (Программирование)',
	'full_nav_4'    => 'Меню #4 (Дизайн и верстка)',
	'full_nav_5'    => 'Меню #5 (Маркетинг и IT-менеджмент)',
	'full_nav_6'    => 'Меню #6 (Поддержка и аналитика)',
	'full_nav_7'    => 'Меню #7 (Индивидуальные курсы)',
));

function add_additional_class_on_li($classes, $item, $args) {
    if($args->add_li_class) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

function add_menu_link_class( $atts, $item, $args ) {
  if($args->link_class) {
    $atts['class'] = $args->link_class;
  }
  return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_menu_link_class', 1, 3 );


/** чтоб РЕДАКТОР не удалял теги span без атрибутов */
function override_mce_options($initArray) {
    $opts = '*[*]';
    $initArray['valid_elements'] = $opts;
    $initArray['extended_valid_elements'] = $opts;
    return $initArray;
}
add_filter('tiny_mce_before_init', 'override_mce_options');
/** чтоб РЕДАКТОР не удалял теги span без атрибутов */

remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );

add_filter( 'the_content', 'LevelUp_autop' );
function LevelUp_autop($content) {
    $post = get_post();
    if($post->post_type != 'post') return $content; // if not a post, leave $content untouched
    return wpautop($content);
}
// require get_template_directory() . '/inc/custom-header.php';
require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/customizer.php';


function admin_favicon() {
    echo '<link rel="Shortcut Icon" type="image/svg+xml"
	      href="https://levelup.ua/wp-content/themes/LevelUp/img/favicon_admin.svg" />';
}
add_action('admin_head', 'admin_favicon');

add_action( 'admin_bar_menu', 'my_admin_bar_menu', 90 );
function my_admin_bar_menu( $wp_admin_bar ) {
	$wp_admin_bar->add_menu( array(
		'id'    => 'shortcodes',
		'title' => '<span class="ab-icon"></span><span class="ab-label">'.__( 'Курсы Level Up', 'some-textdomain' ).'</span>',
		'href'  => '/wp-admin/admin.php?page=shortcodes',
        'meta' => array(
                'target' => '_blank', // Change to _blank for launching in a new window
                'class' => 'shortcodes-link', // Add a class to your link
        )
	) );
};

if( !function_exists('_add_my_quicktags') ){

function _add_my_quicktags()
{ ?>

<?php }
add_action('admin_print_footer_scripts', '_add_my_quicktags');
}

add_action( 'admin_print_footer_scripts', 'test_callback' );
    function test_callback() {
    if ( wp_script_is('quicktags') ) :
    ?>
    <?php endif;
}

add_filter( 'category_link', function($a){
	return str_replace( 'category/', '', $a );
}, 99 );



add_filter('single_template', create_function(
	'$the_template',
	'foreach( (array) get_the_category() as $cat ) {
		if ( file_exists(TEMPLATEPATH . "/single-{$cat->slug}.php") )
			return TEMPLATEPATH . "/single-{$cat->slug}.php"; }
		return $the_template;' )
);


function shortcode_button_script()
{
    if(wp_script_is("quicktags"))
    {
        ?>
            <script type="text/javascript">
                function getSel()
                {
                    var txtarea = document.getElementById("content");
                    var start = txtarea.selectionStart;
                    var finish = txtarea.selectionEnd;
                    return txtarea.value.substring(start, finish);
                }

                QTags.addButton(
                    "video_shortcode",
                    "Видео",
                    callback
                );

                function callback()
                {
                    var selected_text = getSel();
                    QTags.insertContent('<div class="youtube-player" data-id="Ar2IEc7iiTk">' +  selected_text + '</div>');
                }
            </script>
        <?php
    }
}

add_action("admin_print_footer_scripts", "shortcode_button_script");


// Загрузка SVG
function my_myme_types($mime_types){
    $mime_types['svg'] = 'image/svg+xml'; // поддержка SVG
    return $mime_types;
}
add_filter('upload_mimes', 'my_myme_types', 1, 1);

/**
 * Add svg MIME type support
 *
 * @param $mimes
 *
 * @author fadupla
 * @return mixed
 */
function fadupla_mime_types( $mimes ) {
	$mimes['svg'] = 'image/svg+xml';

	return $mimes;
}

add_filter( 'upload_mimes', 'fadupla_mime_types' );

/**
 * Enqueue SVG javascript and stylesheet in admin
 * @author fadupla
 */

function fadupla_svg_enqueue_scripts( $hook ) {
	wp_enqueue_style( 'fadupla-svg-style', get_theme_file_uri( '/assets/svg.css' ) );
	wp_enqueue_script( 'fadupla-svg-script', get_theme_file_uri( '/js/svg.js' ), 'jquery' );
	wp_localize_script( 'fadupla-svg-script', 'script_vars',
		array( 'AJAXurl' => admin_url( 'admin-ajax.php' ) ) );
}

add_action( 'admin_enqueue_scripts', 'fadupla_svg_enqueue_scripts' );


/**
 * Ajax get_attachment_url_media_library
 * @author fadupla
 */
function fadupla_get_attachment_url_media_library() {

	$url          = '';
	$attachmentID = isset( $_REQUEST['attachmentID'] ) ? $_REQUEST['attachmentID'] : '';
	if ( $attachmentID ) {
		$url = wp_get_attachment_url( $attachmentID );
	}

	echo $url;

	die();
}

add_action( 'wp_ajax_svg_get_attachment_url', 'fadupla_get_attachment_url_media_library' );

// END Загрузка SVG
function php_in_widgets($widget_content) {
	if (strpos($widget_content, '<' . '?') !== false) {
		ob_start();
		eval('?' . '>' . $widget_content);
		$widget_content = ob_get_contents();
		ob_end_clean();
	}
	return $widget_content;
}

add_filter('widget_text', 'php_in_widgets', 99);

function wpdocs_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );


// Replaces the excerpt "Read More" text by a link
function new_excerpt_more($more) {
       global $post;
	return '<a class="moretag" href="'. get_permalink($post->ID) . '"> Подробнее...</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');



function search_filter ($query) {
if ($query->is_search)
$query->set('cat', '1, 32');
return $query;
}
add_filter('pre_get_posts', 'search_filter');
add_theme_support ('align-wide');
add_theme_support( 'editor-color-palette', array(
	array(
		'name'  => __( 'LevelUp blue', 'genesis-sample' ),
		'slug'  => 'LevelUp-blue',
		'color'	=> '#15acf2',
	),
	array(
		'name'  => __( 'LevelUp pink', 'genesis-sample' ),
		'slug'  => 'LevelUp-pink',
		'color' => '#ff1569',
	),
	array(
		'name'  => __( 'Dark gray', 'genesis-sample' ),
		'slug'  => 'dark-gray',
		'color' => '#333',
       ),

	array(
		'name'  => __( 'High blue', 'genesis-sample' ),
		'slug'  => 'dark-blue',
		'color' => '#0E71F3',
    ),
) );
function LevelUp_gutenberg_editor_styles() {
    wp_enqueue_style( 'LevelUp-block-editor-styles', get_theme_file_uri( '/css/style-editor.css' ), false, '1.0', 'all' );
}

add_action( 'enqueue_block_editor_assets', 'LevelUp_gutenberg_editor_styles' );


// function column_block_cgb_editor_assets(){
//     wp_enqueue_script(
//         'column_block-cgb-block-js',
//         plugins_url('/dist/blocks.build.js', dirname(__FILE__)),
//         array('wp-blocks', 'wp-i18n', 'wp-element')
//     );

//     wp_enqueue_style(
//         'column_block-cgb-block-editor-css',
//         plugins_url('dist/blocks.editor.build.css', dirname(__FILE__)),
//         array('wp-edit-blocks')
//     );
// }

// add_action('enqueue_block_editor_assets', 'column_block_cgb_editor_assets');


// function my_mario_block_category( $categories, $post ) {
// 	return array_merge(
// 		$categories,
// 		array(
// 			array(
// 				'slug' => 'mario-blocks',
// 				'title' => __( 'Mario Blocks', 'mario-blocks' ),
// 			),
// 		)
// 	);
// }
// add_filter( 'block_categories', 'my_mario_block_category', 10, 2);

function replace_core_jquery_version() {
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', "https://code.jquery.com/jquery-2.2.4.js", array(), '2.2.4' );
}
add_action( 'wp_enqueue_scripts', 'replace_core_jquery_version' );

function my_stylesheet1(){
    wp_enqueue_style("style-admin",get_bloginfo('stylesheet_directory')."/assets/for_admin.css");
}
add_action('admin_head', 'my_stylesheet1');


// recent posts shortcode
// // @ https://digwp.com/2018/08/shortcode-display-recent-posts/
function shapeSpace_recent_posts_shortcode($atts, $content = null) {

	global $post;

	extract(shortcode_atts(array(
		'cat'     => '',
		'num'     => '5',
		'order'   => 'DESC',
		'orderby' => 'post_date',
	), $atts));

	$args = array(
		'cat'            => $cat,
		'posts_per_page' => $num,
		'order'          => $order,
		'orderby'        => $orderby,
	);

	$var = '';

	$posts = get_posts($args);
	ob_start();
	foreach($posts as $post) {

		setup_postdata($post);
		get_template_part( 'template-parts/widget', get_post_format() );

	}

	wp_reset_postdata();
	$var = ob_get_contents();
	ob_end_clean();
	return '<div class="events_block last-mini">'. $var .'</div>';

}
add_shortcode('recent_posts', 'shapeSpace_recent_posts_shortcode');
