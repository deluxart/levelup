<?php
    add_action( 'admin_init', 'event_options_init' );
    add_action( 'admin_menu', 'event_options_add_page' );

function event_options_init(){
    register_setting( 'event_options', 'event_modal_options');
}

function event_options_add_page() {
    add_menu_page( __( 'Event Modal', 'WP-Unique' ), __( 'Event Modal', 'WP-Unique' ), 'edit_theme_options', 'event_modal_options', 'event_options_do_page', 'dashicons-align-center', 4 );
}

// jQuery
wp_enqueue_script('jquery');
wp_enqueue_media();

function load_wp_media_files() {
    wp_enqueue_media();
}
add_action( 'admin_enqueue_scripts', 'load_wp_media_files' );


// add_shortcode('event_form', 'shortcode_event_form' );
// function shortcode_event_form($atts){
//     $options_modal = get_option( 'event_modal_options' );
//         $output = '<div>' . $options_modal['contact_form'] . '</div>';
//     return $output;
// }



function event_options_do_page() { global $select_options; if ( ! isset( $_REQUEST['settings-updated'] ) ) $_REQUEST['settings-updated'] = false;
    // here we adding our custom meta box
?>

<div class="wrap">
<?php screen_icon(); echo "<h2>". __( 'Настройка всплывающей модалки', 'WP-Unique' ) . "</h2>"; ?>

    <?php if (!empty($notice)): ?>
    <div id="notice" class="error"><p><?php echo $notice ?></p></div>
    <?php endif;?>
    <?php if (!empty($message)): ?>
    <div id="message" class="updated"><p><?php echo $message ?></p></div>
    <?php endif;?>

<!--

<?php if ( false !== $_REQUEST['settings-updated'] ) : ?>
<div id="message" class="updated">
<p><strong><?php _e( 'Настройки сохранены', 'WP-Unique' ); ?></strong></p>
</div>
<?php endif; ?>
-->
</div>
 <div class="wrap">
<form method="post" action="options.php" id="form">
<?php settings_fields( 'event_options' ); ?>
<?php $options_modal = get_option( 'event_modal_options' ); ?>


        <div class="metabox-holder" id="poststuff">
            <div id="post-body">
                <div id="post-body-content">


<div class="postbox">
<div class="inside">
<table cellspacing="2" cellpadding="5" style="width: 100%;" class="form-table">
<tr style="border-bottom: 1px solid #f1f1f1;">
    <th scope="row">Включить модальное окно мероприятия</th>
        <td>
            <fieldset>
            <legend class="screen-reader-text"><span>Активировать модальное окно</span></legend>
                <label for="blog_public">
                <input name="event_modal_options[ativate_event_modal]" type="checkbox" id="event_modal_options[ativate_event_modal]" value="1" <?php checked( "1" == $options_modal['ativate_event_modal'] ); ?>>
                Включить всплывающее модальное окно мероприятия</label>
                <p class="description">Будет ли всплывать модальное окно у посетителей сайта</p>
            </fieldset>
        </td>
</tr>



<tr class="form-field" style="border-bottom: 1px solid #f1f1f1;">
     <th valign="top" scope="row">
        <label>Ссылка на картинку</label>
      </th>
     <td>
        <div class="g_one_auto">
          <input id="image_url" name="event_modal_options[image_url]" type="text" style="width: 100%" value="<?php echo $options_modal[image_url];?>" class="code" required="">
          <input type="button" name="upload-btn" id="upload-btn" class="button-secondary" value="Выбрать картинку">
        </div>
        <div id="wpss_upload_image_thumb" class="wpss-file"><div id="event_modal_options[image_thumb_url]">
            <?php if(isset($options_modal[image_url]) && $options_modal[image_url] !='') { ?>
            <img src="<?php echo $options_modal[image_url];?>"  width="120"/><?php } else { echo $defaultImage; } ?>
            </div>
        </div>
      </td>
</tr>


<tr class="form-field editor_for_event" style="border-bottom: 1px solid #f1f1f1;">
        <th valign="top" scope="row">
            <label>Заголовок модалки:</label>
        </th>
        <td>
<?php
$content =  $options_modal['event_modal_title'];
$editor_id = 'event_modal_title';

$settings =   array(
        'wpautop' => false,
        'media_buttons' => false,
        'textarea_name' => 'event_modal_options[event_modal_title]', //You can use brackets here !
        'textarea_rows' => get_option('default_post_edit_rows', 10),
        'tabindex' => '323',
        'textarea_rows' => 4,
        'editor_css'    => '',
        'editor_class'  => '',
        'teeny'         => 0,
        'dfw'           => 0,
        'tinymce'       => 0,
        'quicktags' => array(
            'buttons' => 'strong,link'
        )
);
wp_editor( $content , $editor_id, $settings  );
?>
        </td>
</tr>




<tr class="form-field" style="border-bottom: 1px solid #f1f1f1;">
     <th valign="top" scope="row">
        <label>Задержка</label>
      </th>
     <td>
            <input type="number" id="event_modal_options[modal_delay]" name="event_modal_options[modal_delay]" class="large-text code" min="1" max="100" value="<?php echo $options_modal[modal_delay];?>">
            <p class="description">Задайте количество <strong>секунд</strong> задержки до появления модального окна</p>
      </td>
</tr>





<tr class="form-field" style="border-bottom: 1px solid #f1f1f1;">
     <th valign="top" scope="row">
        <label>Контактная форма</label>
      </th>
     <td>
            <textarea name="event_modal_options[contact_form]" id="event_modal_options[contact_form]" class="large-text code" rows="2" placeholder="Здесь код контактной формы"><?php echo $options_modal[contact_form];?></textarea>
            <p class="description">Вставьте шорткод контактной формы.<br/>Управление формами - <a href="admin.php?page=wpcf7">здесь</a></p>
      </td>
</tr>















<!-- <tr class="form-field">
        <th valign="top" scope="row">
            <label>Контентная часть:</label>
        </th>
        <td>
            <textarea name="event_modal_options[event_modal_code]" id="event_modal_options[event_modal_code]" class="large-text code" rows="8" placeholder="Здесь код модалки"><?php echo $options_modal[event_modal_code];?></textarea>
        </td>
</tr> -->
</table>




    </div>
    </div>

<p class="submit"><input type="submit" name="submit" id="submit" class="button button-primary" value="Сохранить изменения"></p>


                </div>
            </div>
        </div>
</form>
 </div>






<style>
    .editor_for_event .wp-editor-area { border: 0 !important; }
    .editor_for_event #qt_event_modal_title_my_prompt, .editor_for_event #qt_event_modal_title_video_shortcode { display: none; }
    .g_one_auto { display: grid; grid-template-columns: 1fr auto; grid-column-gap: 10px; }
</style>
<script type="text/javascript">
    jQuery(document).ready(function($){
        $('#upload-btn').click(function(e) {
            e.preventDefault();
            var image = wp.media({
                title: 'Выбрать картинку',
                multiple: false
            }).open()
            .on('select', function(e){
                var uploaded_image = image.state().get('selection').first();
                // console.log(uploaded_image);
                var image_url = uploaded_image.toJSON().url;
                jQuery('#image_url').val(image_url);
                jQuery('#wpss_upload_image_thumb').html("<img height='120' src='"+image_url+"'/>");
            });
        });
    });
</script>




<?php
}
?>
