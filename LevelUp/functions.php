<?php
/**
 * Twenty Fifteen functions and definitions
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
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 *
 * @since Twenty Fifteen 1.0
 */
if ( ! isset( $content_width ) ) {
	$content_width = 660;
}

/**
 * Twenty Fifteen only works in WordPress 4.1 or later.
 */
if ( version_compare( $GLOBALS['wp_version'], '4.1-alpha', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
}

if ( ! function_exists( 'LevelUp_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 *
 * @since Twenty Fifteen 1.0
 */
function LevelUp_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed at WordPress.org. See: https://translate.wordpress.org/projects/wp-themes/LevelUp
	 * If you're building a theme based on LevelUp, use a find and replace
	 * to change 'LevelUp' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'LevelUp' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * See: https://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 825, 510, true );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		// 'primary' => __( 'Primary Menu',      'LevelUp' ),
		// 'social'  => __( 'Social Links Menu', 'LevelUp' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
	) );


	$color_scheme  = LevelUp_get_color_scheme();
	$default_color = trim( $color_scheme[0], '#' );

	// Setup the WordPress core custom background feature.

	/**
	 * Filter Twenty Fifteen custom-header support arguments.
	 *
	 * @since Twenty Fifteen 1.0
	 *
	 * @param array $args {
	 *     An array of custom-header support arguments.
	 *
	 *     @type string $default-color     		Default color of the header.
	 *     @type string $default-attachment     Default attachment of the header.
	 * }
	 */
	add_theme_support( 'custom-background', apply_filters( 'LevelUp_custom_background_args', array(
		'default-color'      => $default_color,
		'default-attachment' => 'fixed',
	) ) );

	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, icons, and column width.
	 */
	add_editor_style( array( 'assets/genericons/genericons.css', LevelUp_fonts_url() ) );

	// Indicate widget sidebars can use selective refresh in the Customizer.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif; // LevelUp_setup
add_action( 'after_setup_theme', 'LevelUp_setup' );

/**
 * Register widget area.
 *
 * @since Twenty Fifteen 1.0
 *
 * @link https://codex.wordpress.org/Function_Reference/register_sidebar
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
		'after_title'   => '</h2>',
	) );

    register_sidebar( array(
		'name' => "Футер - 2 колонка",
		'id' => 'footer-2',
		'description' => 'Эти виджеты будут показаны в правой колонке сайта',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

    register_sidebar( array(
		'name' => "Футер - 3 колонка",
		'id' => 'footer-3',
		'description' => 'Эти виджеты будут показаны в правой колонке сайта',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
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
/**
 * Register Google fonts for Twenty Fifteen.
 *
 * @since Twenty Fifteen 1.0
 *
 * @return string Google fonts URL for the theme.
 */
function LevelUp_fonts_url() {
	$fonts_url = '';
	$fonts     = array();
	$subsets   = 'latin,latin-ext';


	/*
	 * Translators: To add an additional character subset specific to your language,
	 * translate this to 'greek', 'cyrillic', 'devanagari' or 'vietnamese'. Do not translate into your own language.
	 */
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

/**
 * JavaScript Detection.
 *
 * Adds a `js` class to the root `<html>` element when JavaScript is detected.
 *
 * @since LevelUp 1.1
 */

/**
 * Enqueue scripts and styles.
 *
 * @since Twenty Fifteen 1.0
 */
function LevelUp_scripts() {
	// Add custom fonts, used in the main stylesheet.
	wp_enqueue_style( 'LevelUp-fonts', LevelUp_fonts_url(), array(), null );

	// Add Genericons, used in the main stylesheet.
    wp_enqueue_style( 'genericons', get_template_directory_uri() . '/assets/genericons/genericons.css', array(), '3.2' );


    // Add Slick theme, used in the main stylesheet.
    wp_enqueue_style( 'slick-theme', get_template_directory_uri() . '/assets/slick/slick-theme.css', array(), '3.2' );

	// Add Slick, used in the main stylesheet.
	wp_enqueue_style( 'slick', get_template_directory_uri() . '/assets/slick/slick.css', array(), '3.2' );

    // Add Bootstrap, used in the main stylesheet.
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/bootstrap/bootstrap.min.css', array(), '3.2' );

    // Add Font Awesome, used in the main stylesheet.
	wp_enqueue_style( 'fotnawesome', get_template_directory_uri() . '/assets/font-awesome.min.css', array(), '3.2' );

	// Load our main stylesheet.
	wp_enqueue_style( 'LevelUp-style', get_stylesheet_uri() );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	wp_enqueue_script( 'LevelUp-script', get_template_directory_uri() . '/js/functions.js', array( 'jquery' ), '20150330', true );
}
add_action( 'wp_enqueue_scripts', 'LevelUp_scripts' );

/**
 * Add preconnect for Google Fonts.
 *
 * @since Twenty Fifteen 1.7
 *
 * @param array   $urls          URLs to print for resource hints.
 * @param string  $relation_type The relation type the URLs are printed.
 * @return array URLs to print for resource hints.
 */
function LevelUp_resource_hints( $urls, $relation_type ) {
	if ( wp_style_is( 'LevelUp-fonts', 'queue' ) && 'preconnect' === $relation_type ) {
		if ( version_compare( $GLOBALS['wp_version'], '4.7-alpha', '>=' ) ) {
			$urls[] = array(
				'href' => 'https://fonts.gstatic.com',
				'crossorigin',
			);
		} else {
			$urls[] = 'https://fonts.gstatic.com';
		}
	}

	return $urls;
}
add_filter( 'wp_resource_hints', 'LevelUp_resource_hints', 10, 2 );

/**
 * Add featured image as background image to post navigation elements.
 *
 * @since Twenty Fifteen 1.0
 *
 * @see wp_add_inline_style()
 */
function LevelUp_post_nav_background() {
	if ( ! is_single() ) {
		return;
	}

	$previous = ( is_attachment() ) ? get_post( get_post()->post_parent ) : get_adjacent_post( false, '', true );
	$next     = get_adjacent_post( false, '', false );
	$css      = '';

	if ( is_attachment() && 'attachment' == $previous->post_type ) {
		return;
	}

	wp_add_inline_style( 'LevelUp-style', $css );
}
add_action( 'wp_enqueue_scripts', 'LevelUp_post_nav_background' );


function LevelUp_nav_description( $item_output, $item, $depth, $args ) {
	if ( 'primary' == $args->theme_location && $item->description ) {
		$item_output = str_replace( $args->link_after . '</a>', '<div class="menu-item-description">' . $item->description . '</div>' . $args->link_after . '</a>', $item_output );
	}

	return $item_output;
}
add_filter( 'walker_nav_menu_start_el', 'LevelUp_nav_description', 10, 4 );

/**
 * Add a `screen-reader-text` class to the search form's submit button.
 *
 * @since Twenty Fifteen 1.0
 *
 * @param string $html Search form HTML.
 * @return string Modified search form HTML.
 */
function LevelUp_search_form_modify( $html ) {
	return str_replace( 'class="search-submit"', 'class="search-submit screen-reader-text"', $html );
}
add_filter( 'get_search_form', 'LevelUp_search_form_modify' );

/**
 * Modifies tag cloud widget arguments to display all tags in the same font size
 * and use list format for better accessibility.
 *
 * @since Twenty Fifteen 1.9
 *
 * @param array $args Arguments for tag cloud widget.
 * @return array The filtered arguments for tag cloud widget.
 */
function LevelUp_widget_tag_cloud_args( $args ) {
	$args['largest']  = 9;
	$args['smallest'] = 9;
	$args['unit']     = 'pt';
	$args['format']   = 'list';

	return $args;
}
add_filter( 'widget_tag_cloud_args', 'LevelUp_widget_tag_cloud_args' );

// snj: hallo
// get courses for lvlUp page by id
//global $wpdb2;
//$wpdb2 = new wpdb( 'levelu04_bd', 'pannsxf7', 'levelu04_bd', 'localhost' );
function _SmrkvLib_GetCourse ($atts = array(), $content = null, $tag)
{
	global $wpdb;
	//var_dump($atts);
	//var_dump($wpdb);
	$result =
		$wpdb->get_results('SELECT * FROM smrkv_courses WHERE url like "'.$atts['cource'].'%"');
	$dat_res = get_object_vars($result[0]);


	return $dat_res[$atts['field']];
}
add_shortcode( 'SmrkCourse', '_SmrkvLib_GetCourse' );

//BEGIN amberpanther.com code
function include_file($atts) {
     //if filepath was specified
     extract(
          shortcode_atts(
               array(
                    'filepath' => 'NULL',
                    'key1' => 'NULL'
               ), $atts
          )
     );

     if(strpos($filepath,"?")) {
          $query_string_pos = strpos($filepath,"?");
          //create global variable for query string so we can access it in our included files if we need it
          //also parse it out from the clean file name which we will store in a new variable for including
          global $query_string;
          $query_string = substr($filepath,$query_string_pos + 1);
          $clean_file_path = substr($filepath,0,$query_string_pos);
          //if there isn't a query string
     } else {
          $clean_file_path = $filepath;
     }
     //END modified portion of code

     //var_dump( __DIR__ .$clean_file_path);die;

     //check if the filepath was specified and if the file exists
     if ($filepath != 'NULL' && file_exists(TEMPLATEPATH.$clean_file_path)){
          //turn on output buffering to capture script output
          ob_start();
          //include the specified file
          include(TEMPLATEPATH.$clean_file_path);
          //assign the file output to $content variable and clean buffer
          $content = ob_get_clean();
          //return the $content
          //return is important for the output to appear at the correct position
          //in the content
          return $content;
     }
}
//register the Shortcode handler
add_shortcode('include', 'include_file');


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
         remove_menu_page( 'edit.php' );                   // Записи
         remove_menu_page( 'profile.php' );
         remove_menu_page( 'upload.php' );
    }
}

register_nav_menus(array(
	'mibile_nav'    => 'Мобильная навигация',

// Для полноэкранного меню
	'full_nav_1'    => 'Основное меню (Шапка)',
	'full_nav_0'    => 'Меню #1 (Базовое)',
	'full_nav_2'    => 'Меню #2 (Все курсы)',
	'full_nav_3'    => 'Меню #3 (Программирование)',
	'full_nav_4'    => 'Меню #4 (Дизайн и верстка)',
	'full_nav_5'    => 'Меню #5 (Маркетинг и IT-менеджмент)',
	'full_nav_6'    => 'Меню #6 (Поддержка и аналитика)',
	'full_nav_7'    => 'Меню #7 (Индивидуальные курсы)',
// Для полноэкранного меню
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


/**
 * Implement the Custom Header feature.
 *
 * @since Twenty Fifteen 1.0
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 *
 * @since Twenty Fifteen 1.0
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Customizer additions.
 *
 * @since Twenty Fifteen 1.0
 */
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

                //this function is used to retrieve the selected text from the text editor
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

// Для публикации новостей
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
) );


/**
 * Enqueue Gutenberg block editor style
 */
function LevelUp_gutenberg_editor_styles() {
    wp_enqueue_style( 'LevelUp-block-editor-styles', get_theme_file_uri( '/css/style-editor.css' ), false, '1.0', 'all' );
}

add_action( 'enqueue_block_editor_assets', 'LevelUp_gutenberg_editor_styles' );


function column_block_cgb_editor_assets(){
    // Scripts.
    wp_enqueue_script(
        'column_block-cgb-block-js', // Handle.
        plugins_url('/dist/blocks.build.js', dirname(__FILE__)),
        array('wp-blocks', 'wp-i18n', 'wp-element')
    );

    // Styles.
    wp_enqueue_style(
        'column_block-cgb-block-editor-css', // Handle.
        plugins_url('dist/blocks.editor.build.css', dirname(__FILE__)),
        array('wp-edit-blocks')
    );
} // End function column_block_cgb_editor_assets().

// Hook: Editor assets.
add_action('enqueue_block_editor_assets', 'column_block_cgb_editor_assets');


function my_mario_block_category( $categories, $post ) {
	return array_merge(
		$categories,
		array(
			array(
				'slug' => 'mario-blocks',
				'title' => __( 'Mario Blocks', 'mario-blocks' ),
			),
		)
	);
}
add_filter( 'block_categories', 'my_mario_block_category', 10, 2);


function replace_core_jquery_version() {
    wp_deregister_script( 'jquery' );
    // Change the URL if you want to load a local copy of jQuery from your own server.
    wp_register_script( 'jquery', "https://code.jquery.com/jquery-2.2.4.js", array(), '2.2.4' );
}
add_action( 'wp_enqueue_scripts', 'replace_core_jquery_version' );

function my_stylesheet1(){
    wp_enqueue_style("style-admin",get_bloginfo('stylesheet_directory')."/assets/for_admin.css");
}
add_action('admin_head', 'my_stylesheet1');


// Options page for WP PM 20
require get_template_directory() . '/inc/options_page.php';

// add_action('admin_bar_menu', 'add_toolbar_items', 100);
// function add_toolbar_items($admin_bar){
//     $admin_bar->add_menu( array(
//         'id'    => 'theme_options',
//         'title' => 'Настройка',
//         'href'  => '/wp-admin/admin.php?page=price_options',
//         'meta'  => array(
//             'title' => __('Настройка цен'),
//         ),
//     ));
// }
// End Options page for WP
