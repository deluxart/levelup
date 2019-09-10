<?php
/*
    Plugin Name: Управление шорткодами (Курсы)
    Description: Плагин для создания/редактирования шорткодов.
    Plugin URI: https://levelup.ua/
    Author URI: https://levelup.ua/
    Author: Aleksandr Osadchyy
    License: Public Domain
    Version: 1.0.0
    Date: 20.11.2018
*/


global $custom_table_example_db_version;
$custom_table_example_db_version = '1.1'; // version changed from 1.0 to 1.1


if ( ! defined( 'ABSPATH' ) ) exit;

class SMRK_RPW {


    /**
     * Constructor method.
     */
    public function __construct() {

        // Set the constants needed by the plugin.
        add_action( 'plugins_loaded', array( &$this, 'constants' ), 1 );

        // Internationalize the text strings used.
        add_action( 'plugins_loaded', array( &$this, 'i18n' ), 2 );

        // Load the functions files.
        add_action( 'plugins_loaded', array( &$this, 'includes' ), 3 );

        // Load the admin style and script.
        add_action( 'admin_enqueue_scripts', array( &$this, 'admin_scripts' ) );
        add_action( 'customize_controls_enqueue_scripts', array( &$this, 'admin_scripts' ) );

        // Register widget.
        add_action( 'widgets_init', array( &$this, 'register_widget' ) );

        // Enqueue the front-end styles.
        add_action( 'wp_enqueue_scripts', array( &$this, 'plugin_style' ), 99 );

    }


    /**
     * Defines constants used by the plugin.
     */
    public function constants() {

        // Set constant path to the plugin directory.
        define( 'SMRK_DIR', trailingslashit( plugin_dir_path( __FILE__ ) ) );

        // Set the constant path to the plugin directory URI.
        define( 'SMRK_URI', trailingslashit( plugin_dir_url( __FILE__ ) ) );

        // Set the constant path to the includes directory.
        // define( 'SMRK_INCLUDES', SMRK_DIR . trailingslashit( 'includes' ) );

        // Set the constant path to the assets directory.
        define( 'SMRK_ASSETS', SMRK_URI . trailingslashit( 'assets' ) );

    }

    /**
     * Loads the translation files.
     */
    // public function i18n() {
    //     load_plugin_textdomain( 'smart-recent-posts-widget', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
    // }

    /**
     * Register custom style and script for the widget settings.
     */
    public function admin_scripts() {
        wp_enqueue_style( 'smrk-admin-style', trailingslashit( SMRK_ASSETS ) . 'css/smrk-admin.css', null, null );
        wp_enqueue_script( 'smrk-script', trailingslashit( SMRK_ASSETS ) . 'js/smrk-scripts.js', array( 'jquery-ui-tabs' ) );
    }


}

new SMRK_RPW;








function custom_table_example_install()
{
    global $wpdb;
    global $custom_table_example_db_version;

    $table_name = 'smrkv_courses'; // do not forget about tables prefix
//    $table_name = $wpdb->prefix . 'smrkv_courses'; // do not forget about tables prefix

    $sql = "CREATE TABLE " . $table_name . " (
        ID int(11) NOT NULL,
        url varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
        title varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
        title_ua varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
        dateStart varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
        dateStart_ua varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
        dateEnd varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
        dateEnd_ua varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
        price_before varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
        price_before_ua varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
        price varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
        newPrice varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
        Units varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
        schedulle varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
        schedulle_ua varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
        duration varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
        duration_ua varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
        sortOrder varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
        disp varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
        Timer varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
        Sold int(11) NOT NULL DEFAULT '0'
    );";

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);

    add_option('custom_table_example_db_version', $custom_table_example_db_version);

    $installed_ver = get_option('custom_table_example_db_version');
    if ($installed_ver != $custom_table_example_db_version) {
        $sql = "CREATE TABLE " . $table_name . " (
        ID int(11) NOT NULL,
        url varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
        title varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
        title_ua varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
        dateStart varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
        dateStart_ua varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
        dateEnd varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
        dateEnd_ua varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
        price_before varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
        price_before_ua varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
        price varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
        newPrice varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
        Units varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
        schedulle varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
        schedulle_ua varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
        duration varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
        duration_ua varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
        sortOrder varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
        disp varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
        Timer varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
        Sold int(11) NOT NULL DEFAULT '0'
        );";

        require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
        dbDelta($sql);

        update_option('custom_table_example_db_version', $custom_table_example_db_version);
    }
}

register_activation_hook(__FILE__, 'custom_table_example_install');


function custom_table_example_install_data()
{
    global $wpdb;

    $table_name = 'smrkv_courses'; // do not forget about tables prefix
//    $table_name = $wpdb->prefix . 'smrkv_courses'; // do not forget about tables prefix

    $wpdb->insert($table_name, array(
            'url' => 'kurs-razrabotki-na-c-i-microsoft-net',
            'title' => 'C# и ООП',
            'title_ua' => 'C# и ООП',
            'dateStart' => '16 января',
            'dateStart_ua' => '16 січня',
            'dateEnd' => ' - 26 июня',
            'dateEnd_ua' => ' - 26 червня',
            'price_before' => '',
            'price_before_ua' => '',
            'price' => '2390',
            'newPrice' => '2690',
            'Units' => 'грн в мес',
            'schedulle' => 'Ср 17:00-21:00',
            'schedulle_ua' => 'Ср 17:00-21:00',
            'duration' => '88 часов, 22 недели',
            'duration_ua' => '88 годин, 22 тижня',
            'sortOrder' => 'data-date="2019/01/16"',
            'disp' => '',
            'Timer' => '',
            'Sold' => '7'
    ));
    $wpdb->insert($table_name, array(
            'url' => 'kurs-razrabotki-na-c-i-microsoft-net',
            'title' => 'C# и ООП',
            'title_ua' => 'C# и ООП',
            'dateStart' => '16 января',
            'dateStart_ua' => '16 січня',
            'dateEnd' => ' - 26 июня',
            'dateEnd_ua' => ' - 26 червня',
            'price_before' => '',
            'price_before_ua' => '',
            'price' => '2390',
            'newPrice' => '2690',
            'Units' => 'грн в мес',
            'schedulle' => 'Ср 17:00-21:00',
            'schedulle_ua' => 'Ср 17:00-21:00',
            'duration' => '88 часов, 22 недели',
            'duration_ua' => '88 годин, 22 тижні',
            'sortOrder' => 'data-date="2019/01/16"',
            'disp' => '',
            'Timer' => '',
            'Sold' => '7'
    ));

    $wpdb = wp_unslash( $wpdb );
}

register_activation_hook(__FILE__, 'custom_table_example_install_data');

function custom_table_example_update_db_check()
{
    global $custom_table_example_db_version;
    if (get_site_option('custom_table_example_db_version') != $custom_table_example_db_version) {
        custom_table_example_install();
    }
}

add_action('plugins_loaded', 'custom_table_example_update_db_check');

if (!class_exists('WP_List_Table')) {
    require_once(ABSPATH . 'wp-admin/includes/class-wp-list-table.php');
}

class Custom_Table_Example_List_Table extends WP_List_Table
{

    function __construct()
    {
        global $status, $page;

        parent::__construct(array(
            'singular' => 'shortcode',
            'plural' => 'shortcodes',
        ));
    }

    function column_default($item, $column_id)
    {
        return $item[$column_id];
    }

    function column_url($item)
    {
        return '<input class="link_copy" type="text" value="' . $item['url'] . '" readonly>';
    }

    /**
        * [OPTIONAL] this is example, how to render column with actions,
        * when you hover row "Edit | Delete" links showed
        *
        * @param $item - row (key, value array)
        * @return HTML
        */
    function column_title($item)
    {

        $actions = array(
            'edit' => sprintf('<a href="?page=shortcodes_form&id=%s"><strong>%s</strong></a>', $item['ID'], __('Изменить', 'custom_table_example')),
//            'delete' => sprintf('<a href="?page=%s&action=delete&id=%s">%s</a>', $_REQUEST['page'], $item['ID'], __('Удалить', 'custom_table_example')),
        );

        return sprintf('%s %s',
           '<strong>' . $item['title'] . '</strong><input class="link_copy" type="text" value="' . $item['url'] . '" readonly>',
            // '<strong>' . $item['title'] . '</strong>',
            $this->row_actions($actions)
        );
    }

    function column_sortOrder($item)
    {
        $item['sortOrder'] = preg_replace('/[^0-9,[^\/]+/', '', $item['sortOrder']);
        return $item['sortOrder'];
    }

    function column_disp($item)
    {
        $item['disp'] = str_replace('style="display: none"', '<span style="background: #fe5151;border-radius: 30px; padding: 3px 6px;color: #fff;">Скрыто</span>', $item['disp']);
        return $item['disp'];
    }



    function column_price($item)
    {


        $item['price'] = $item['price']. ' ' .$item['units'];

        return $item['price'];

    }



//    function column_cb($item)
//    {
//        return sprintf(
//            '<input type="checkbox" name="id[]" value="%s" />',
//            $item['ID']
//        );
//    }

    function get_columns()
    {
        $columns = array(
//            'cb' => '<input type="checkbox" />', //Render a checkbox instead of text
//            'id' => __('id', 'custom_table_example'),
            'title' => __('Название', 'custom_table_example'),
            // 'url' => __('url', 'custom_table_example'),
            'dateStart' => __('Старт', 'custom_table_example'),
            'dateEnd' => __('Окончание', 'custom_table_example'),
            'price' => __('Цена', 'custom_table_example'),
            'newPrice' => __('Новая цена', 'custom_table_example'),
//            'units' => __('Значение', 'custom_table_example'),
            'schedulle' => __('Расписание', 'custom_table_example'),
//            'duration' => __('Длительность', 'custom_table_example'),
            'sortOrder' => __('Сортировка', 'custom_table_example'),
            'disp' => __('Открыт набор', 'custom_table_example'),
//            'Timer' => __('Таймер', 'custom_table_example'),
//            'Sold' => __('Sold', 'custom_table_example'),
        );
        return $columns;
    }

    function get_sortable_columns()
    {
        $sortable_columns = array(
        'id' => array('id', true),
        // 'url' => array('url', true),
        'title' => array('title', false),
        'dateStart' => array('dateStart', false),
        'dateEnd' => array('dateEnd', false),
        'price' => array('price', false),
        'newPrice' => array('newPrice', false),
        'units' => array('units', false),
        'schedulle' => array('schedulle', false),
        'duration' => array('duration', false),
        'sortOrder' => array('sortOrder', false),
        'disp' => array('disp', false),
        'Timer' => array('Timer', false),
        'Sold' => array('Sold', false),
        );
        return $sortable_columns;
    }

//    function get_bulk_actions()
//    {
//        $actions = array(
//            'delete' => 'Удалить',
//        );
//        return $actions;
//    }

    function process_bulk_action()
    {
        global $wpdb;
        $table_name = 'smrkv_courses'; // do not forget about tables prefix
//        $table_name = $wpdb->prefix . 'smrkv_courses'; // do not forget about tables prefix

        if ('delete' === $this->current_action()) {
            $ids = isset($_REQUEST['id']) ? $_REQUEST['id'] : array();
            if (is_array($ids)) $ids = implode(',', $ids);

            if (!empty($ids)) {
                $wpdb->query("DELETE FROM $table_name WHERE ID IN($ids)");
            }
        }
    }



    function prepare_items()
    {
        global $wpdb;
        $table_name = 'smrkv_courses'; // do not forget about tables prefix
//        $table_name = $wpdb->prefix . 'smrkv_courses'; // do not forget about tables prefix

        $per_page = 140; // constant, how much records will be shown per page

        $columns = $this->get_columns();
        $hidden = array();
        $sortable = $this->get_sortable_columns();

        $this->_column_headers = array($columns, $hidden, $sortable);

        $this->process_bulk_action();

        $total_items = $wpdb->get_var("SELECT COUNT(ID) FROM $table_name");


        $paged = isset($_REQUEST['paged']) ? ($per_page * max(0, intval($_REQUEST['paged']) - 1)) : 0;
        $orderby = (isset($_REQUEST['orderby']) && in_array($_REQUEST['orderby'], array_keys($this->get_sortable_columns()))) ? $_REQUEST['orderby'] : 'id';
        $order = (isset($_REQUEST['order']) && in_array($_REQUEST['order'], array('asc', 'desc'))) ? $_REQUEST['order'] : 'asc';

        $this->items = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name ORDER BY $orderby $order LIMIT %d OFFSET %d", $per_page, $paged), ARRAY_A);

        $this->set_pagination_args(array(
            'total_items' => $total_items, // total items defined above
            'per_page' => $per_page, // per page constant defined at top of method
            'total_pages' => ceil($total_items / $per_page) // calculate pages count
        ));
    }







}










function custom_table_example_admin_menu()
{

    add_menu_page(__('Курсы Level Up', 'custom_table_example'), __('Курсы Level Up', 'custom_table_example'), 'activate_plugins', 'shortcodes', 'custom_table_example_shortcodes_page_handler', 'dashicons-list-view', 4);


//    add_menu_page(__('Курсы Level Up', 'custom_table_example'), __('Курсы Level Up', 'custom_table_example'), 'activate_plugins', 'shortcodes', 'custom_table_example_shortcodes_page_handler', 'dashicons-list-view');
    add_submenu_page('shortcodes', __('Курсы Level Up', 'custom_table_example'), __('Список курсов', 'custom_table_example'), 'activate_plugins', 'shortcodes', 'custom_table_example_shortcodes_page_handler');
    // add new will be described in next part
    add_submenu_page('shortcodes', __('Добавить новый', 'custom_table_example'), __('Добавить новый', 'custom_table_example'), 'activate_plugins', 'shortcodes_form', 'custom_table_example_shortcodes_form_page_handler', 'manage_options');
}

add_action('admin_menu', 'custom_table_example_admin_menu' );


function custom_table_example_shortcodes_page_handler()
{
    global $wpdb;

    $table = new Custom_Table_Example_List_Table();
    $table->prepare_items();

    $message = '';
    if ('delete' === $table->current_action()) {
        $message = '<div class="updated below-h2" id="message"><p>' . sprintf(__('Всего удалено: %d', 'custom_table_example'), count($_REQUEST['id'])) . '</p></div>';
    }
    ?>
<div class="wrap">



    <div class="icon32 icon32-posts-post" id="icon-edit"><br></div>
    <h2><?php _e('Список курсов', 'custom_table_example')?> <a class="add-new-h2"
                                    href="<?php echo get_admin_url(get_current_blog_id(), 'admin.php?page=shortcodes_form');?>"><?php _e('Добавить новый', 'custom_table_example')?></a>
    </h2>
    <?php echo $message; ?>
    <form id="shortcodes-table" method="GET">
        <input type="hidden" name="page" value="<?php echo $_REQUEST['page'] ?>"/>
        <?php $table->display() ?>
    </form>


</div>
<?php
}

function custom_table_example_shortcodes_form_page_handler()
{
    global $wpdb;
    $table_name = 'smrkv_courses'; // do not forget about tables prefix
//    $table_name = $wpdb->prefix . 'smrkv_courses'; // do not forget about tables prefix

    $message = '';
    $notice = '';

    // this is default $item which will be used for new records

    $default = array(
        'ID' => 0,
        'url' => '',
        'title' => '',
        'title_ua' => '',
        'dateStart' => '',
        'dateStart_ua' => '',
        'dateEnd' => '',
        'dateEnd_ua' => '',
        'price_before' => '',
        'price_before_ua' => '',
        'price' => '',
        'newPrice' => '',
        'units' => '',
        'schedulle' => '',
        'schedulle_ua' => '',
        'duration' => '',
        'duration_ua' => '',
        'disp' => '',
        'Timer' => '',
        'sortOrder' => '',
        'Sold' => '',
    );

    if (wp_verify_nonce($_REQUEST['nonce'], basename(__FILE__))) {
        $item = shortcode_atts($default, $_REQUEST);
        $item = wp_unslash( $item );
        $item_valid = custom_table_example_validate_shordcode($item);


//        $item['sortOrder'] = $item['sortOrder']

        $item['sortOrder'] = 'data-date="' . $item['sortOrder'] . '"';



        if ($item_valid === true) {
            if ($item['ID'] == 0) {
                $result = $wpdb->insert($table_name, $item);
                $item['ID'] = $wpdb->insert_id;
                if ($result) {
                    $message = __('Элемент успешно создан', 'custom_table_example');
                } else {
                    $notice = __('При сохранении информации произошла ошибка.', 'custom_table_example');
                }
            } else {
                $result = $wpdb->update($table_name, $item, array('ID' => $item['ID']));
                if ($result) {
                    $message = __('Информация обновлена успешно', 'custom_table_example');
                } else {
                    $notice = __('При обновлении информации произошла ошибка', 'custom_table_eattsxample');
                }
            }
        } else {
            // if $item_valid not true it contains error message(s)
            $notice = $item_valid;
        }
    }
    else {
        // if this is not post back we load item to edit or give new one to create
        $item = $default;
        if (isset($_REQUEST['id'])) {
            $item = $wpdb->get_row($wpdb->prepare("SELECT * FROM $table_name WHERE ID = %d", $_REQUEST['id']), ARRAY_A);
            if (!$item) {
                $item = $default;
                $notice = __('Item not found', 'custom_table_example');
            }
        }
    }

    // here we adding our custom meta box
    add_meta_box('shortcodes_form_meta_box', 'Детали курса', 'custom_table_example_shortcodes_form_meta_box_handler', 'shortcode', 'normal', 'default');

    ?>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


<div class="wrap">
    <div class="icon32 icon32-posts-post" id="icon-edit"><br></div>
    <div class="of">
        <div class="fl">
            <h2><span class="new_course"><?php _e('Добавление нового курса', 'custom_table_example')?> </span><?php echo esc_attr($item['title'])?> <a class="add-new-h2"
                                href="<?php echo get_admin_url(get_current_blog_id(), 'admin.php?page=shortcodes');?>"><?php _e('Назад к списку', 'custom_table_example')?></a></h2>
        </div>

        <div class="fr">
            <button class="button-primary table-show">Показать шорткоды</button>

        </div>
    </div>

    <div class="table-out" style="display:none;">
        <table width="100%" class="info-table" cellspacing="0" cellpadding="0">
            <tr>
              <td width="20%" align="center">title</td>
              <td width="30%">Заголовок курса (<?php echo esc_attr($item['title'])?>)</td>
              <td width="50%"><input class='link_copy' type='text' value='[SmrkCourse cource="<?php echo esc_attr($item['url'])?>" field="title"]' readonly></td>
            </tr>

            <tr>
              <td width="20%" align="center">dateStart</td>
              <td width="30%">Дата старта (<?php echo esc_attr($item['dateStart'])?>)</td>
              <td width="50%"><input class='link_copy' type='text' value='[SmrkCourse cource="<?php echo esc_attr($item['url'])?>" field="dateStart"]' readonly></td>
            </tr>

            <tr>
              <td width="20%" align="center">dateEnd</td>
              <td width="30%">Дата окончания (<?php echo esc_attr($item['dateEnd'])?>)</td>
              <td width="50%"><input class='link_copy' type='text' value='[SmrkCourse cource="<?php echo esc_attr($item['url'])?>" field="dateEnd"]' readonly></td>
            </tr>

            <tr>
              <td width="20%" align="center">price_before</td>
              <td width="30%">Приставка к цене (<?php echo esc_attr($item['price_before'])?>)</td>
              <td width="50%"><input class='link_copy' type='text' value='[SmrkCourse cource="<?php echo esc_attr($item['url'])?>" field="price_before"]' readonly></td>
            </tr>

            <tr>
              <td width="20%" align="center">price</td>
              <td width="30%">Стоимость (<?php echo esc_attr($item['price'])?>)</td>
              <td width="50%"><input class='link_copy' type='text' value='[SmrkCourse cource="<?php echo esc_attr($item['url'])?>" field="price"]' readonly></td>
            </tr>

            <tr>
              <td width="20%" align="center">units</td>
              <td width="30%">Юниты (<?php echo esc_attr($item['units'])?>)</td>
              <td width="50%"><input class='link_copy' type='text' value='[SmrkCourse cource="<?php echo esc_attr($item['url'])?>" field="units"]' readonly></td>
            </tr>


            <tr>
              <td width="20%" align="center">schedulle</td>
              <td width="30%">Расписание (<?php echo esc_attr($item['schedulle'])?>)</td>
              <td width="50%"><input class='link_copy' type='text' value='[SmrkCourse cource="<?php echo esc_attr($item['url'])?>" field="schedulle"]' readonly></td>
            </tr>

            <tr>
              <td width="20%" align="center">duration</td>
              <td width="30%">Длительность курса (<?php echo esc_attr($item['duration'])?>)</td>
              <td width="50%"><input class='link_copy' type='text' value='[SmrkCourse cource="<?php echo esc_attr($item['url'])?>" field="duration"]' readonly></td>
            </tr>


            <tr>
              <td width="20%" align="center">sortOrder</td>
              <td width="30%">Сортировка (<?php echo esc_attr($item['sortOrder'])?>)</td>
              <td width="50%"><input class='link_copy' type='text' value='[SmrkCourse cource="<?php echo esc_attr($item['url'])?>" field="sortOrder"]' readonly></td>
            </tr>


            <tr>
              <td width="10%" align="center">disp</td>
              <td width="30%">Открыт набор (<pre style="display: inline-block;"><?php echo esc_attr($item['disp'])?></pre>)</td>
              <td width="50%"><input class='link_copy' type='text' value='[SmrkCourse cource="<?php echo esc_attr($item['url'])?>" field="disp"]' readonly></td>
            </tr>


            <tr>
              <td width="20%" align="center">Timer</td>
              <td width="30%">Таймер до даты старта (<?php echo esc_attr($item['Timer'])?>)</td>
              <td width="50%"><input class='link_copy' type='text' value='[SmrkCourse cource="<?php echo esc_attr($item['url'])?>" field="Timer"]' readonly></td>
            </tr>


            <tr>
              <td width="20%" align="center">Sold</td>
              <td width="30%">Кол-во проданных мест (<?php echo esc_attr($item['Sold'])?>)</td>
              <td width="50%"><input class='link_copy' type='text' value='[SmrkCourse cource="<?php echo esc_attr($item['url'])?>" field="Sold"]' readonly></td>
            </tr>
        </table>
    </div>




    <?php if (!empty($notice)): ?>
    <div id="notice" class="error"><p><?php echo $notice ?></p></div>
    <?php endif;?>
    <?php if (!empty($message)): ?>
    <div id="message" class="updated"><p><?php echo $message ?></p></div>
    <?php endif;?>




    <form id="form" method="POST">
        <input type="hidden" name="nonce" value="<?php echo wp_create_nonce(basename(__FILE__))?>"/>
        <?php /* NOTICE: here we storing id to determine will be item added or updated */ ?>
        <input type="hidden" name="ID" value="<?php echo $item['ID'] ?>"/>

        <div class="metabox-holder" id="poststuff">
            <div id="post-body">
                <div id="post-body-content">
                    <?php /* And here we call our custom meta box */ ?>
                    <?php

        $item = wp_unslash( $item );
        do_meta_boxes('shortcode', 'normal', $item); ?>
                    <div class="foot-form"><input type="submit" value="<?php _e('Сохранить', 'custom_table_example')?>" id="submit" class="button-primary" name="submit"></div>



<br/>
<br/>

Здесь будет подробная инструкция<br/>... а пока она <a href="https://docs.google.com/document/d/1xNHtTcegRhNpA7injc3rkMjC2WsQt-8dHx0Ch1AUmKI/edit" target="_blank">здесь</a>



                </div>
            </div>
        </div>
    </form>
</div>
<?php
}

function custom_table_example_shortcodes_form_meta_box_handler($item)
{
    ?>




<table cellspacing="2" cellpadding="5" style="width: 100%;" class="form-table">
    <tbody>

    <tr class="form-field url_link">
        <th valign="top" scope="row">
            <label for="name"><?php _e('URL', 'custom_table_example')?></label>
        </th>
        <td>
            <input id="url" name="url" type="text" style="width: 100%" value="<?php echo esc_attr($item['url'])?>"
                    size="50" class="code" placeholder="<?php _e('Введите url', 'custom_table_example')?>" required>
            <p class="description">url шорткода</p>
        </td>
    </tr>


    <tr class="form-field" style="border-bottom: 1px solid #eee;">
        <th valign="top" scope="row">
            <label for="name"><?php _e('Название', 'custom_table_example')?></label>
        </th>
        <td>
            <div class="lang-inputs">
                <div class="one-input">
                    <span class="lang-ru">RUS</span>
                    <input id="title" name="title" type="text" style="width: 100%" value="<?php echo esc_attr($item['title'])?>"
                    size="50" class="code" placeholder="<?php _e('Введите название курса', 'custom_table_example')?>" required>
                </div>
                
                <div class="one-input">
                    <span class="lang-ua">UA</span>
                    <input id="title_ua" name="title_ua" type="text" style="width: 100%" value="<?php echo esc_attr($item['title_ua'])?>"
                    size="50" class="code" placeholder="<?php _e('Введіть назву курсу', 'custom_table_example')?>" required>
                </div>
            </div>
            <p class="description">Название курса</p>
        </td>
    </tr>


        <tr class="form-field" style="border-bottom: 1px solid #eee;">
        <th valign="top" scope="row">
            <label for="name"><?php _e('Дата старта', 'custom_table_example')?></label>
        </th>
        <td>

            <div class="lang-inputs">
                <div class="one-input">
                    <span class="lang-ru">RUS</span>
                    <input id="dateStart" name="dateStart" type="text" style="width: 100%" value="<?php echo esc_attr($item['dateStart'])?>"
                    size="50" class="code" placeholder="<?php _e('Введите дату старта', 'custom_table_example')?>" required>
                </div>
                
                <div class="one-input">
                    <span class="lang-ua">UA</span>
                    <input id="dateStart_ua" name="dateStart_ua" type="text" style="width: 100%" value="<?php echo esc_attr($item['dateStart_ua'])?>"
                    size="50" class="code" placeholder="<?php _e('Введіть дату старту', 'custom_table_example')?>" required>
                </div>
            </div>
            <p class="description">Дата начала курса</p>
        </td>
    </tr>

    <tr class="form-field" style="border-bottom: 1px solid #eee;">
        <th valign="top" scope="row">
            <label for="name"><?php _e('Дата окончания', 'custom_table_example')?></label>
        </th>
        <td>
            <div class="lang-inputs">
                <div class="one-input">
                    <span class="lang-ru">RUS</span>
                    <input id="dateEnd" name="dateEnd" type="text" style="width: 100%" value="<?php echo esc_attr($item['dateEnd'])?>"
                    size="50" class="code" placeholder="<?php _e('Введите дату окончания', 'custom_table_example')?>" >
                </div>
                
                <div class="one-input">
                    <span class="lang-ua">UA</span>
                    <input id="dateEnd_ua" name="dateEnd_ua" type="text" style="width: 100%" value="<?php echo esc_attr($item['dateEnd_ua'])?>"
                    size="50" class="code" placeholder="<?php _e('Введіть дату закінчення', 'custom_table_example')?>" >
                </div>
            </div>
             <p class="description">Дата окончания курса</p>
        </td>
    </tr>

    <tr class="form-field" style="border-bottom: 1px solid #eee;">
        <th valign="top" scope="row">
            <label for="name"><?php _e('Приставка к цене', 'custom_table_example')?></label>
        </th>
        <td>
            <div class="lang-inputs">
                <div class="one-input">
                    <span class="lang-ru">RUS</span>
                    <input id="price_before" name="price_before" type="text" style="width: 100%" value="<?php echo esc_attr($item['price_before'])?>"
                    size="50" class="code" placeholder="<?php _e('Введите приставку к стоимости', 'custom_table_example')?>" >
                </div>
                
                <div class="one-input">
                    <span class="lang-ua">UA</span>
                    <input id="price_before_ua" name="price_before_ua" type="text" style="width: 100%" value="<?php echo esc_attr($item['price_before_ua'])?>"
                    size="50" class="code" placeholder="<?php _e('Введіть приставку до вартості', 'custom_table_example')?>" >
                </div>
            </div>
             <p class="description">Пример "12 платежей по"</p>
        </td>
    </tr>


    <tr class="form-field">
        <th valign="top" scope="row">
            <label for="name"><?php _e('Стоимость', 'custom_table_example')?></label>
        </th>
        <td>
            <input id="price" name="price" type="text" style="width: 100%" value="<?php echo esc_attr($item['price'])?>"
                    size="50" class="code" placeholder="<?php _e('Введите стоимость', 'custom_table_example')?>" required>
            <p class="description">Текущая стоимость</p>
        </td>
    </tr>

    <tr class="form-field">
        <th valign="top" scope="row">
            <label for="name"><?php _e('Новая цена', 'custom_table_example')?></label>
        </th>
        <td>
            <input id="newPrice" name="newPrice" type="text" style="width: 100%" value="<?php echo esc_attr($item['newPrice'])?>"
                    size="50" class="code" placeholder="<?php _e('Введите новую стоимость', 'custom_table_example')?>" >
        </td>
    </tr>

    <tr class="form-field" style="border-bottom: 1px solid #eee;">
        <th valign="top" scope="row">
            <label for="name"><?php _e('Значение цены', 'custom_table_example')?></label>
        </th>
        <td>
            <input id="units" name="units" type="text" style="width: 100%" value="<?php echo esc_attr($item['units'])?>"
                    size="50" class="code" placeholder="<?php _e('грн за курс', 'custom_table_example')?>" >
                        <p class="description" style="display: inline-block;"><pre style="background: #e7e7e7;
                padding: 3px 5px;display: inline-block;font-size: 12px;margin-bottom: 0;margin-right: 10px;cursor: pointer;" id="place">грн за курс</pre>, <pre style="background: #e7e7e7;
                padding: 3px 5px;display: inline-block;margin-left: 10px;margin-right: 10px;font-size: 12px;margin-bottom: 0;cursor: pointer;" id="place_two">грн</pre></p>
        </td>
    </tr>



    <tr class="form-field" style="border-bottom: 1px solid #eee;">
        <th valign="top" scope="row">
            <label for="name"><?php _e('Расписание', 'custom_table_example')?></label>
        </th>
        <td>
            <div class="lang-inputs">
                <div class="one-input">
                    <span class="lang-ru">RUS</span>
                    <input id="schedulle" name="schedulle" type="text" style="width: 100%" value="<?php echo esc_attr($item['schedulle'])?>"
                    size="50" class="code" placeholder="<?php _e('Укажите расписание занятий', 'custom_table_example')?>" >
                </div>
                
                <div class="one-input">
                    <span class="lang-ua">UA</span>
                    <input id="schedulle_ua" name="schedulle_ua" type="text" style="width: 100%" value="<?php echo esc_attr($item['schedulle_ua'])?>"
                    size="50" class="code" placeholder="<?php _e('Вкажіть розклад занять', 'custom_table_example')?>" >
                </div>
            </div>
            <p class="description">График занятий</p>
        </td>
    </tr>



    <tr class="form-field" style="border-bottom: 1px solid #eee;">
        <th valign="top" scope="row">
            <label for="name"><?php _e('Длительность курса', 'custom_table_example')?></label>
        </th>
        <td>
            <div class="lang-inputs">
                <div class="one-input">
                    <span class="lang-ru">RUS</span>
                    <input id="duration" name="duration" type="text" style="width: 100%" value="<?php echo esc_attr($item['duration'])?>"
                    size="50" class="code" placeholder="<?php _e('Укажите длительность курса', 'custom_table_example')?>" >
                </div>
                
                <div class="one-input">
                    <span class="lang-ua">UA</span>
                    <input id="duration_ua" name="duration_ua" type="text" style="width: 100%" value="<?php echo esc_attr($item['duration_ua'])?>"
                    size="50" class="code" placeholder="<?php _e('Вкажіть тривалість курсу', 'custom_table_example')?>" >
                </div>
            </div>
        </td>
    </tr>



    <tr class="form-field">
        <th valign="top" scope="row">
            <label for="name"><?php _e('Сортировка', 'custom_table_example')?></label>
        </th>
        <td>





<?php
    $item['sortOrder'] = preg_replace('/[^0-9,[^\/]+/', '', $item['sortOrder']);
?>


            <input id="sortOrder" name="sortOrder" type="text" class="disp" style="width: 100%" value="<?php echo esc_attr($item['sortOrder'])?>"
                    size="50" class="code" placeholder="<?php _e('Сортировка', 'custom_table_example')?>" >
            <p class="description" style="display: inline-block;">Сортировка курсов на странице <strong>Открыт набор</strong> - (Ближайшая дата = вверх списка)</p>
        </td>
    </tr>

    <tr class="form-field">
        <th valign="top" scope="row">
            <label for="name"><?php _e('Отображение', 'custom_table_example')?></label>
        </th>
        <td>

<!--
<select id="disp" name="disp" >
  <option value="style='display: none'">Скрыть</option>
  <option value="">Показать</option>
</select>

-->
            <input id="disp" name="disp" type="text" style="width: 100%" value="<?php echo esc_attr($item['disp'])?>"
                    size="50" class="code" placeholder="<?php _e('Отображается', 'custom_table_example')?>" >
            <p class="description" style="display: inline-block;">Скрываем на странице <strong>Открыт набор</strong> - если скрываем? - <pre style="background: #e7e7e7;
                padding: 3px 5px;display: inline-block;margin-left: 10px;font-size: 12px;margin-bottom: 0;cursor: pointer;margin-bottom: 0;" id="place_style">style="display: none"</pre><span style="background: #fe5151;
                padding: 3px 5px;color: #fff;display: inline-block;margin-left: 10px;font-size: 12px;margin-bottom: 0;cursor: pointer;margin-bottom: 0;" id="clear">очистить</span></p>
        </td>
    </tr>



    <tr class="form-field" style="display: none;">
        <th valign="top" scope="row">
            <label for="name"><?php _e('Таймер', 'custom_table_example')?></label>
        </th>
        <td>
            <input id="Timer" name="Timer" type="text" style="width: 100%" value="<?php echo esc_attr($item['Timer'])?>"
                    size="50" class="code" placeholder="November 23 2018 00:00:00 GMT+0300" >
                        <p class="description" style="display: inline-block;">Пример заполнения поля - <pre style="background: #e7e7e7;
                padding: 3px 5px;display: inline-block;margin-left: 10px;font-size: 12px;margin-bottom: 0;cursor: pointer;margin-bottom: 0;" id="place_timer">November 23 2018 00:00:00 GMT+0300</pre><span style="background: #fe5151;
                padding: 3px 5px;color: #fff;display: inline-block;margin-left: 10px;font-size: 12px;margin-bottom: 0;cursor: pointer;margin-bottom: 0;" id="clear_two">очистить</span></p>
                <p class="description">
                    <style>
                    .month-table { margin-top: 12px; }
                        .month-table td {
                            border-bottom: 1px solid #fff;
                             line-height: 0.3;
                    }

                    </style>
                    <table width="100%" class="month-table" cellspacing="0" cellpadding="4" border="0">
<tbody><tr><td width="50%" bgcolor="#e7e7e7"><b>    <center>    Месяц   </center>   </b></td><td width="50%" bgcolor="#e7e7e7"><center><b>  Перевод</b></center><b>  </b></td></tr>
<tr><td bgcolor="#f8f8f8"><b>   январь  </b></td>    <td>   <b>January</b> </td>    </tr>
<tr><td bgcolor="#f8f8f8"><b>   февраль </b></td>    <td>   <b>February</b></td>    </tr>
<tr><td bgcolor="#f8f8f8"><b>   март    </b></td>    <td>   <b>March</b> </tr>
<tr><td bgcolor="#f8f8f8"><b>   апрель  </b></td>    <td>   <b>April </b> </tr>
<tr><td bgcolor="#f8f8f8"><b>   май </b></td>    <td>   <b>May </b></td>    </tr>
<tr><td bgcolor="#f8f8f8"><b>   июнь    </b></td>    <td>   <b>June </b></td>    </tr>
<tr><td bgcolor="#f8f8f8"><b>   июль    </b></td>    <td>   <b>July</b></td>    </tr>
<tr><td bgcolor="#f8f8f8"><b>   август  </b></td>    <td>   <b>August</b></td>    </tr>
<tr><td bgcolor="#f8f8f8"><b>   сентябрь    </b></td>    <td>   <b>September</b></td>    </tr>
<tr><td bgcolor="#f8f8f8"><b>   октябрь </b></td>    <td>   <b>October</b></td>    </tr>
<tr><td bgcolor="#f8f8f8"><b>   ноябрь  </b></td>    <td>   <b>November</b></td>    </tr>
<tr><td bgcolor="#f8f8f8"><b>   декабрь </b></td>    <td>   <b>December</b></td>    </tr>
</tbody></table>
<div id="darkness"></div>



                </p>
        </td>
    </tr>


    <tr class="form-field" style="display: none;">
        <th valign="top" scope="row">
            <label for="name"><?php _e('Занятые места', 'custom_table_example')?></label>
        </th>
        <td>
            <input id="Sold" name="Sold" type="text" style="width: 100%" value="<?php echo esc_attr($item['Sold'])?>"
                    size="50" class="code" placeholder="<?php _e('сколько мест занято...', 'custom_table_example')?>" >
        </td>
    </tr>




    </tbody>
</table>
<?php
}

function custom_table_example_validate_shordcode($item)
{

    $messages = array();

//    if (empty($item['Title'])) $messages[] = __('Name is required', 'custom_table_example');
//    if (!empty($item['url']) && !is_email($item['email'])) $messages[] = __('E-Mail is in wrong format', 'custom_table_example');
//    if (!ctype_digit($item['ID'])) $messages[] = __('Age in wrong format', 'custom_table_example');
    //if(!empty($item['age']) && !absint(intval($item['age'])))  $messages[] = __('Age can not be less than zero');
    //if(!empty($item['age']) && !preg_match('/[0-9]+/', $item['age'])) $messages[] = __('Age must be number');
    //...

   // if (empty($item['title_ua'])) $messages[] = __('Введіть назву українською мовою', 'custom_table_example');


    if (empty($messages)) return true;
    return implode('<br />', $messages);
}

function custom_table_example_languages()
{
    load_plugin_textdomain('custom_table_example', false, dirname(plugin_basename(__FILE__)));
}

add_action('init', 'custom_table_example_languages');
