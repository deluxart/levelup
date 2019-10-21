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


function event_options_do_page() { global $select_options; if ( ! isset( $_REQUEST['settings-updated'] ) ) $_REQUEST['settings-updated'] = false;
    // here we adding our custom meta box
?>

<div class="wrap">
<?php screen_icon(); echo "<h2>". __( 'Основные настройки сайта', 'WP-Unique' ) . "</h2>"; ?>

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


<h2 class="title">Настройка всплывающей модалки:</h2>



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


<div id="wpss_upload_image_thumb" class="wpss-file">
    <?php if(isset($record->security_image) && $record->security_image !='') { ?>
       <img src="<?php echo $record->security_image;?>"  width="65"/><?php } else { echo $defaultImage; } ?>
</div>


          <input id="image_url" name="event_modal_options[image_url]" type="text" style="width: 95%" value="<?php echo $options_modal[image_url];?>" size="50" class="code" required="">
          <input type="button" name="upload-btn" id="upload-btn" class="button-secondary" value="Выбрать картинку">
          <script type="text/javascript">
jQuery(document).ready(function($){
    $('#upload-btn').click(function(e) {
        e.preventDefault();
        var image = wp.media({
            title: 'Upload Image',
            // mutiple: true if you want to upload multiple files at once
            multiple: false
        }).open()
        .on('select', function(e){
            // This will return the selected image from the Media Uploader, the result is an object
            var uploaded_image = image.state().get('selection').first();
            // We convert uploaded_image to a JSON object to make accessing it easier
            // Output to the console uploaded_image
            console.log(uploaded_image);
            var image_url = uploaded_image.toJSON().url;
            // Let's assign the url value to the input field
            $('#image_url').val(image_url);
        });
    });
});



window.send_to_editor = function(html) {
 imgurl = jQuery('img',html).attr('src');
 jQuery('#wpss_upload_image').val(imgurl);
 tb_remove();

 jQuery('#wpss_upload_image_thumb').html("<img height='65' src='"+imgurl+"'/>");
}


</script>
      </td>
</tr>

<tr class="form-field">
        <th valign="top" scope="row">
            <label>Контентная часть:</label>
        </th>
        <td>
            <textarea name="event_modal_options[event_modal_code]" id="event_modal_options[event_modal_code]" class="large-text code" rows="8" placeholder="Здесь код модалки"><?php echo $options_modal[event_modal_code];?></textarea>
        </td>
    </tr>
</table>




    </div>
    </div>

<p class="submit"><input type="submit" name="submit" id="submit" class="button button-primary" value="Сохранить изменения"></p>


                </div>
            </div>
        </div>



</form>
 </div>
<?php
}
?>
