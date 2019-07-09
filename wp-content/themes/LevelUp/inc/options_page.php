<?php
add_action( 'admin_init', 'theme_options_init' );
add_action( 'admin_menu', 'theme_options_add_page' );

function theme_options_init(){
register_setting( 'levelup_options', 'levelup_theme_options');
}

function theme_options_add_page() {
add_menu_page( __( 'Основные настройки', 'WP-Unique' ), __( 'Основные настройки', 'WP-Unique' ), 'edit_theme_options', 'price_options', 'theme_options_do_page', 'dashicons-editor-kitchensink', 4 );
}
function theme_options_do_page() { global $select_options; if ( ! isset( $_REQUEST['settings-updated'] ) ) $_REQUEST['settings-updated'] = false;
    // here we adding our custom meta box
?>

<div class="wrap">
<?php screen_icon(); echo "<h2>". __( 'Создать халат - настройка цен', 'WP-Unique' ) . "</h2>"; ?>

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
<?php settings_fields( 'levelup_options' ); ?>
<?php $options = get_option( 'levelup_theme_options' ); ?>


        <div class="metabox-holder" id="poststuff">
            <div id="post-body">
                <!-- <div id="post-body-content">


<div class="postbox">
<div class="inside">
<table cellspacing="2" cellpadding="5" style="width: 100%;" class="form-table">
    <tbody>

    <tr class="form-field">
        <th valign="top" scope="row">
            <label>Стоимость от <strong>42</strong> до <strong>46</strong> размера</label>
        </th>
        <td>
           <input id="levelup_theme_options[price_1]" name="levelup_theme_options[price_1]" type="text" style="width: 95%" value="<?php echo $options[price_1];?>" size="50" class="code" placeholder="Введите стоимость" required="">
        </td>
    </tr>


    <tr class="form-field">
        <th valign="top" scope="row">
            <label>Стоимость от <strong>48</strong> до <strong>54</strong> размера</label>
        </th>
        <td>
           <input id="levelup_theme_options[price_2]" name="levelup_theme_options[price_2]" type="text" style="width: 95%" value="<?php echo $options[price_2];?>" size="50" class="code" placeholder="Введите стоимость" required="">
        </td>
    </tr>

    <tr class="form-field">
        <th valign="top" scope="row">
            <label>Стоимость от <strong>42</strong> до <strong>56</strong> размера</label>
        </th>
        <td>
           <input id="levelup_theme_options[price_3]" name="levelup_theme_options[price_3]" type="text" style="width: 95%" value="<?php echo $options[price_3];?>" size="50" class="code" placeholder="Введите стоимость" required="">
        </td>
    </tr>

    <tr class="form-field">
        <th valign="top" scope="row">
            <label>Стоимость от <strong>58</strong> до <strong>60</strong> размера</label>
        </th>
        <td>
           <input id="levelup_theme_options[price_4]" name="levelup_theme_options[price_4]" type="text" style="width: 95%" value="<?php echo $options[price_4];?>" size="50" class="code" placeholder="Введите стоимость" required="">
        </td>
    </tr>


    </tbody>
    </table>
    </div>
    </div>

<p class="submit"><input type="submit" name="submit" id="submit" class="button button-primary" value="Сохранить изменения"></p>


                </div> -->
            </div>
        </div>



</form>
 </div>
<?php
}
?>