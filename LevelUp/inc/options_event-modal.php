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
// wp_enqueue_script('jquery');


// wp_enqueue_media();

// function load_wp_media_files() {
//     wp_enqueue_media();
// }
// add_action( 'admin_enqueue_scripts', 'load_wp_media_files' );

// function add_admin_iris_scripts( $hook ){
//     wp_enqueue_script( 'wp-color-picker' );
//     wp_enqueue_style( 'wp-color-picker' );
// }
// add_action( 'admin_enqueue_scripts', 'add_admin_iris_scripts' );




function event_options_do_page() { global $select_options; if ( ! isset( $_REQUEST['settings-updated'] ) ) $_REQUEST['settings-updated'] = false;
    // here we adding our custom meta box
?>

<div class="wrap">
<h2>Настройка всплывающей модалки</h2>

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
            <div class="g_one_auto">
                <fieldset>
                <legend class="screen-reader-text"><span>Активировать модальное окно</span></legend>
                    <label for="blog_public">
                    <input name="event_modal_options[ativate_event_modal]" type="checkbox" id="event_modal_options[ativate_event_modal]" value="1" <?php checked( "1" == $options_modal['ativate_event_modal'] ); ?>>
                    Включить всплывающее модальное окно мероприятия</label>
                    <p class="description">Будет ли всплывать модальное окно у посетителей сайта</p>
                </fieldset>
                <input type="button" name="preview-btn" id="preview-btn" class="button-secondary flat" value="Предпросмотр">
            </div>
        </td>
</tr>



<tr class="form-field" style="border-bottom: 1px solid #f1f1f1;">
     <th valign="top" scope="row">
        <label>Ссылка на картинку</label>
      </th>
     <td>
        <div class="g_one_auto">
          <input id="image_url" name="event_modal_options[image_url]" type="text" style="width: 100%" value="<?php echo $options_modal['image_url'];?>" class="code" required="">
          <input type="button" name="upload-btn" id="upload-btn" class="button-secondary" value="Выбрать фон">
        </div>
        <div id="wpss_upload_image_thumb" class="wpss-file"><div id="event_modal_options[image_thumb_url]">
            <?php if(isset($options_modal['image_url']) && $options_modal['image_url'] !='') { ?>
            <img src="<?php echo $options_modal['image_url'];?>" width="150"/><?php } else { echo $defaultImage; } ?>
            </div>
        </div>
      </td>
</tr>

<tr class="form-field" style="border-bottom: 1px solid #f1f1f1;">
     <th valign="top" scope="row">
        <label>Фоновая картинка</label>
      </th>
     <td>
        <div class="g_one_auto">
          <input id="background_url" name="event_modal_options[background_url]" type="text" style="width: 100%" value="<?php echo $options_modal['background_url'];?>" class="code" required="">
          <input type="button" name="upload-bg-btn" id="upload-bg-btn" class="button-secondary" value="Выбрать картинку">
        </div>
        <div id="wpss_upload_bg_image_thumb" class="wpss-file"><div id="event_modal_options[background_thumb_url]">
            <?php if(isset($options_modal['background_url']) && $options_modal['background_url'] !='') { ?>
            <img src="<?php echo $options_modal['background_url'];?>" width="350"/><?php } else { echo $defaultbg; } ?>
            </div>
        </div>
      </td>
</tr>

<tr class="form-field" style="border-bottom: 1px solid #f1f1f1;">
     <th valign="top" scope="row">
        <label>Ключевые цвета</label>
      </th>
     <td>

        <div class="g_one_one colors">
            <div>
                <input id="event_modal_options[button_color]" name="event_modal_options[button_color]" type="text" value="<?php echo $options_modal['button_color'];?>" class="code" required="">
                <p class="description">Цвет кнопки в модалке</p>
            </div>
            <div>
                <input id="event_modal_options[link_color]" name="event_modal_options[link_color]" type="text" value="<?php echo $options_modal['link_color'];?>" class="code" required="">
                <p class="description">Цвет ссылок в модалке</p>
            </div>
            <div style="padding-top: 15px;">
                <input id="event_modal_options[button_text_color]" name="event_modal_options[button_text_color]" type="text" value="<?php echo $options_modal['button_text_color'];?>" class="code" required="">
                <p class="description">Цвет текста на кнопке в модалке</p>
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
        'textarea_rows' => 2,
        'editor_css'    => '',
        'editor_class'  => '',
        'teeny'         => 0,
        'dfw'           => 0,
        'tinymce'       => 0,
        'quicktags' => array(
            'buttons' => 'strong,em,link,close'
        )
);
wp_editor( $content , $editor_id, $settings  );
?>
        </td>
</tr>


<tr class="form-field" style="border-bottom: 1px solid #f1f1f1;">
    <th valign="top" scope="row">
          <label>Дата / Время / Локация</label>
    </th>
    <td>
        <div class="g_one_one">
            <div><input id="event_modal_options[event_date]" name="event_modal_options[event_date]" type="text" style="width: 100%" value="<?php echo $options_modal['event_date'];?>" class="code" placeholder="Дата и время мероприятия" required=""></div>
            <div><input id="event_modal_options[event_location]" name="event_modal_options[event_location]" type="text" style="width: 100%" value="<?php echo $options_modal['event_location'];?>" class="code" placeholder="Локация мероприятия" required=""></div>
        </div>
    </td>
</tr>

<tr class="form-field" style="border-bottom: 1px solid #f1f1f1;">
     <th valign="top" scope="row">
        <label>Задержка</label>
      </th>
     <td>
            <input type="number" id="event_modal_options[modal_delay]" name="event_modal_options[modal_delay]" class="large-text code" style="width: 100%;" min="1" max="100" value="<?php echo $options_modal['modal_delay'];?>">
            <p class="description">Задайте количество <strong>секунд</strong> задержки до появления модального окна</p>
      </td>
</tr>

<tr class="form-field">
     <th valign="top" scope="row">
        <label>Контактная форма</label>
      </th>
     <td>
            <textarea name="event_modal_options[contact_form]" id="event_modal_options[contact_form]" class="large-text code" style="width: 100%;" rows="1" placeholder="Здесь код контактной формы"><?php echo $options_modal['contact_form'];?></textarea>
            <p class="description">Вставьте шорткод контактной формы.<br/>Управление формами - <a href="admin.php?page=wpcf7" target="_blank">здесь</a></p>
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


<div class="event_modal <?php echo $options_modal['modal_delay']; ?>" style="background: url(<?php echo $options_modal['background_url'];?>) center no-repeat; background-size: cover;">
    <div class="cont">
        <div><img src="<?php echo $options_modal['image_url'];?>" alt=""></div>
        <div class="content">
            <h4><?php echo $options_modal['event_modal_title']; ?></h4>
            <div class="date-block">
                <div><strong><?php echo $options_modal['event_date']; ?></strong><?php echo $options_modal['event_location']; ?></div>
                <div class="date-icon"><img src="https://levelup.ua/wp-content/uploads/2019/07/event-date-and-time-symbol.svg" alt=""></div>
            </div>
            <div class="feed-form">
                <?php echo do_shortcode( wp_unslash($options_modal['contact_form']) ); ?>
            </div>
        </div>
    </div>

    <div id="setCookie" class="close-icon">
        <img src="https://levelup.ua/wp-content/uploads/2019/07/cancel-1.svg" alt="">
    </div>
</div>
<div class="event_modal-bg"></div>


<style>
    .post-body-content img { display: block; }
    .wp-core-ui .button-secondary.flat { outline: none; background: #45526E; transition: .2s ease-out; color: #fff; border-radius: 2px; box-shadow: 0 2px 5px 0 rgba(0,0,0,.16), 0 2px 10px 0 rgba(0,0,0,.12) !important; border: 0; }
    .wp-core-ui .button-secondary.flat:hover { background-color: #4f5e7e!important; box-shadow: 0 5px 11px 0 rgba(0,0,0,.18), 0 4px 15px 0 rgba(0,0,0,.15); border: 0; }
    .wp-core-ui .button-secondary.flat:focus { border: none; }
    .editor_for_event .wp-editor-area { border: 0 !important; }
    .editor_for_event #qt_event_modal_title_my_prompt, .editor_for_event #qt_event_modal_title_video_shortcode { display: none; }
    .g_one_auto { display: grid; grid-template-columns: 1fr auto; grid-column-gap: 10px; }
    .g_one_one { display: grid; grid-template-columns: 1fr 1fr; grid-column-gap: 10px; }

    .event_modal .cont>div>div.feed-form .form input[type=submit] { background: <?php echo $options_modal['button_color']; ?> !important; }
    .event_modal .cont>div.content a { color: <?php echo $options_modal['link_color']; ?> !important; }

/*New desing modal for Open Day*/
.event_modal { background: url(https://levelup.ua/wp-content/uploads/2019/10/bg_career_modal.jpg) center no-repeat; background-size: cover;
    box-shadow: 1.854px 5.706px 76.95px 18.05px rgba(0, 0, 0, 0.32); border-radius: 10px; position: relative; padding: 0px 0px; max-width: 900px; margin: 0 auto;
    z-index: 9999999; position: fixed; top: -50%; left: 50%; transform: translate(-50%,-50%); width: 100%; transition-duration: 500ms; font-family: Montserrat; display: none;
}
.event_modal.open { top: 50%; transition-duration: 500ms; }
.event_modal .cont { display: grid; grid-template-columns: auto 1fr; align-items: center;  grid-column-gap: 40px; }
.event_modal .cont > div > h4 { letter-spacing: normal; font-size: 18px; color: #fff; line-height: normal; margin: 0 0 15px 0; font-weight: 300; }
.event_modal .cont > div > h4 strong { color: #f5f34f; white-space: nowrap; }
.event_modal .cont > div > h4 span { display: inline-block; }
.event_modal .cont > div.content { padding: 50px 50px 50px 0; }
.event_modal .cont > div > img { width: 100%; max-width: 380px; display: block; margin: 0 auto; padding: 40px 0; }
.event_modal .cont > div > h4 a { color: #f5f34f; text-decoration: underline; }
.event_modal .cont > div > div.date-block { display: block;text-align: center;padding: 20px 0; border-radius: 10px; box-shadow: 1.854px 5.706px 32.4px 7.6px rgba(0, 0, 0, 0.28); background: #fff; position: relative; margin-bottom: 25px;  margin-top: 40px; }
.event_modal .cont > div > div.date-block > div { font-size: 15px; color: #868686; padding: 0 15px 0 28px;  }
.event_modal .cont > div > div.date-block strong { display: block; font-size: 18px; color: #000; line-height: normal; }
.event_modal .close-icon { width: 17px; height: 17px; position: absolute; top: 20px; right: 20px; cursor: pointer; opacity: 0.7; }
.event_modal .close-icon:hover { opacity: 1; }

.event_modal .cont > div > div > div.date-icon { border: 5px solid #fff; background: #15acf2; border-radius: 50%; width: 39px; height: 39px; position: absolute;
    left: 50%; top: 0; transform: translate(-50%, -50%); text-align: center; padding: 0; box-sizing: border-box; }

.event_modal .cont > div > div > div.date-icon img { width: 19px; position: relative; top: 5px; }

.event_modal .cont > div > div.feed-form .form > p { display: none !important; }
.event_modal .cont > div > div.feed-form .form { display: grid; grid-row-gap: 15px; }
.event_modal .cont > div > div.feed-form .form input { width: 100%; background: #ffffff2b; border-radius: 30px; height: 42px; color: #fff; font-size: 16px; border: 0; padding: 0 20px; outline: none; box-shadow: none; }
.event_modal .cont > div > div.feed-form .form input::placeholder { color: #fff; }
.event_modal .cont > div > div.feed-form .form input[type="submit"] { background: #f5f34f; color: #000; border: none;  font-weight: bold; }
.event_modal .cont > div > div.feed-form .form > div.last { display: grid; grid-template-columns: 1fr auto; grid-column-gap: 15px; position: relative; }
.event_modal .cont > div > div.feed-form .form > div.last > p { display: none; }
.event_modal .cont > div > div.feed-form .form > div { position: relative; }
.event_modal .cont > div > div.feed-form .form > div > div { position: relative; }
.event_modal .cont > div > div.feed-form .form .ajax-loader { position: absolute; left: 50%; margin: 0; top: 50%; transform: translate(-50%, -50%); background-color: #f5f34f; width: 90%; background-repeat: no-repeat; background-position: center; background-image: url(../img/loading_gray.svg); background-size: 36px 36px; }

.event_modal-bg.open { opacity: 1; z-index: 999999; }
.event_modal-bg { background: #00000070; bottom: 0; left: 0; opacity: 0; position: fixed;
    right: 0; padding: 30px; top: 0; z-index: -1; -webkit-transition: opacity 300ms; transition: opacity 300ms; z-index: 99; display: none; }

.event_modal span.wpcf7-not-valid-tip { margin: 0; top: 0; position: absolute; right: 15px; color: #fff; font-size: 12px; border-radius: 0 10px 10px 0; padding-right: 8px; }
.event_modal div.wpcf7-mail-sent-ok {display: block; background: #5944e84f; color: #fff; bottom: -52px; margin: 0; width: 100%; padding: 14px 15px; font-size: 11px; border: 0; border-radius: 15px 15px 0 0; }
</style>
<script type="text/javascript">

jQuery(document).ready(function($){
    jQuery('.g_one_one.colors input').wpColorPicker();
});

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
                jQuery('#wpss_upload_image_thumb').html("<img width='150' src='"+image_url+"'/>");
            });
        });
    });

    jQuery(document).ready(function($){
        $('#upload-bg-btn').click(function(e) {
            e.preventDefault();
            var image_bg = wp.media({
                title: 'Выбрать фоновую картинку',
                multiple: false
            }).open()
            .on('select', function(e){
                var uploaded_bg_image = image_bg.state().get('selection').first();
                // console.log(uploaded_image);
                var image_bg_url = uploaded_bg_image.toJSON().url;
                jQuery('#background_url').val(image_bg_url);
                jQuery('#wpss_upload_bg_image_thumb').html("<img width='350' src='"+image_bg_url+"'/>");
            });
        });
    });

// For Previev modal
jQuery('#preview-btn').click(function () {
    jQuery('.event_modal').show();
    setTimeout(function(){
        jQuery('.event_modal').addClass("open");
    }, 200);
    jQuery('.event_modal-bg').fadeIn().addClass("open").css({display: 'block'});
});

jQuery(".event_modal .close-icon, .event_modal-bg").click(function () {
    jQuery('.event_modal').removeClass("open");
        setTimeout(function(){
            jQuery('.event_modal').hide();
        }, 100);
    jQuery('.event_modal-bg').removeClass("open");
    jQuery('.event_modal-bg').css({display: 'none'});
});

</script>




<?php
}
?>
