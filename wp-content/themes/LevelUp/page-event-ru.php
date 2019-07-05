<?php
/*
Template Name: Мероприятие (Event) - Ru
*/
?>



<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage LevelUp
 * @since LevelUp 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" lang="ru-RU" prefix="og: http://ogp.me/ns#" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://ogp.me/ns/fb#">
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" lang="ru-RU" prefix="og: http://ogp.me/ns#" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://ogp.me/ns/fb#">
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html lang="ru-RU" prefix="og: http://ogp.me/ns#" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://ogp.me/ns/fb#">
<!--<![endif]-->
<head>
  <meta name="google-site-verification" content="wlhz5ESa9pz3ZH9FbWKSDfOWbg3hCS_SXwIAhHXs5Q4" />
  <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MPKXSQS');</script>
<!-- End Google Tag Manager -->
  <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MMPZ66C"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
  <link rel="stylesheet"  href="/wp-content/themes/LevelUp/video-js/video-js.min.css">
<!-- <link rel="stylesheet" href="https://levelup.ua/wp-content/themes/LevelUp/css/timeline.min.css"> -->


  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, maximum-scale=1.0,  user-scalable=no">
<!--  <meta http-equiv="cache-control" content="no-cache">
  <meta http-equiv="expires" content="0"> -->
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.png">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/slick/slick-theme.css?3">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/slick/slick.css?3">
  <!--[if lt IE 9]>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
  <![endif]-->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" crossorigin="anonymous">

    <!--Сброс стилей-->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css?3">
    <!--Шрифты Google (Roboto, Montserrat)-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=cyrillic,cyrillic-ext,latin-ext,vietnamese" rel="stylesheet">

    <!--Иконки FontAwesome-->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/guttenberg.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/style.min.css?<?php echo date(get_option('date_format')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/slide.min.css?3">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/navigation.css?3">
      <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/dev.css?<?php echo date(get_option('date_format')); ?>">

      <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/saas-style.css?3">
      <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/search-form.css?3">
      <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/hr-page.css?<?php echo date(get_option('date_format')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/event.css?<?php echo date(get_option('date_format')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/pm.css?<?php echo date(get_option('date_format')); ?>">
      
    <?php wp_head(); ?>
      <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style-editor.css?<?php echo date(get_option('date_format')); ?>">


    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/greensock.js?ver=1.19.0"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/styles.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/animate.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/jquery.mCustomScrollbar.css">
    
</head>

<body <?php body_class(); ?>>

<svg class="hidden">
            <symbol id="icon-menu" viewBox="0 0 119 25">
                <title>menu</title>
                <path d="M36,8 L36,0 L100,0 L100,8 L36,8 Z M0,8 L0,0 L24,0 L24,8 L0,8 Z M0,28 L0,20 L71,20 L71,28 L0,28 Z"/>
            </symbol>
            <symbol id="icon-close" viewBox="0 0 24 24">
                <title>close</title>
                <path d="M24 1.485L22.515 0 12 10.515 1.485 0 0 1.485 10.515 12 0 22.515 1.485 24 12 13.484 22.515 24 24 22.515 13.484 12z"/>
            </symbol>
        </svg>
<div>
<?php if (current_user_can('level_10')) { ?><div class="for_adm"><?php } ?>

<header id="header" class="fixed-top header-color">



 <nav class="navbar navbar-expand-lg navbar-dark bg-kirpichik static-top">
  <div class="container">
    <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
          <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" class="logo_desktop" alt="LevelUp" />
          <img src="<?php echo get_template_directory_uri(); ?>/img/mobile_logo.svg" class="logo_mobile" alt="LevelUp" />
          <img src="<?php echo get_template_directory_uri(); ?>/img/Logo-white.svg" class="dev-logo" alt="LevelUp" />
    </a>


    <button class="navbar-toggler snj_sandwitch_btn_show" type="button">
          <span class="navbar-toggler-icon"></span>
        </button>





<div id="snj_sandwitch"><div class="snj_sandwitch_btn_hide"><svg class="icon icon--close"><use xlink:href="#icon-close"></use></svg>

  </div><div class="snj_sandwitch-menu text-center">
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Главная</a>
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>otkryt-nabor/">Открыт набор</a>
              <a href="#" data-toggle="modal" data-target="#all_courses">Все курсы</a>
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>novosti/">Новости и события</a>
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>blog/">IT-блог</a>
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>kontakty/">Контакты</a>
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>reviews/">Отзывы</a>
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>aboutus/">О нас</a>
            </div>
</div>



    <div class="collapse navbar-collapse" id="navbarResponsive">
<nav class="menu"><div class="action--menu action--close"></div></nav>
<ul class="navbar-nav ml-auto">
  <li><a href="#event-about" class="nav-link">О ивенте</a></li>
  <li><a href="#event-why" class="nav-link">Что ждет</a></li>
  <li><a href="#event-speakers" class="nav-link">Спикер</a></li>
  <!-- <li><a href="#should-two" class="nav-link">Бонуси</a></li> -->
  <li><a href="#contacts" class="nav-link">Регистрация</a></li>
</ul>

    </div>
                
        <!-- Поиск 15.02.2019 by Alexander O. -->
            <div class="lux_search">
                <div class="button"><span><i class="fa fa-search" aria-hidden="true"></i></span></div>
            </div>
        <!-- Поиск 15.02.2019 by Alexander O. -->
  </div>


  
</nav>
</header>
<?php if (current_user_can('level_10')) { ?></div><?php } ?>

  <div>



<main id="main" class="site-main" role="main">
<div class="event-page-level"> <?php
        // Start the loop.
        while ( have_posts() ) : the_post();

            // Include the page content template.
            get_template_part( 'content', 'page' );

        // End the loop.
        endwhile;
        ?>
</div>
</main>







<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage LevelUp
 * @since LevelUp 1.0
 */
?>

    </div><!-- .site-content -->



    <footer id="footer" class="site-footer event">

    <div class="container">
       <div class="content">
           <div class="copy">
               
               <h4>LEVELUP<span>™ 2019</span></h4>
               <span>Учебный IT-центр</span>

           </div>
           <div class="loc">
             <ul>
               <li><span><i class="fa fa-map-marker" aria-hidden="true"></i></span><span><span class="yelow">Центр:</span> ул. Троицкая, 21Г<br/>ТСК «Новий металург», 3 эт.</span></li>
               <li><span><i class="fa fa-clock-o" aria-hidden="true"></i></span><span>Ежедневно: <span class="yelow">09:00 - 19:00</span></span></li>
             </ul>
           </div>
           <div class="rec">
             <ul>
               <li><span><i class="fa fa-envelope" aria-hidden="true"></i></span><span><a class="footer-contacts" href="mailto:info@levelup.ua">info@levelup.ua</a></span></li>
               <li><span><i class="fa fa-phone" aria-hidden="true"></i></span><span><a href="tel:+380997318385" class="footer-contacts phone">(099) 731 83 85</a><br/><a href="tel:+380960842513" class="footer-contacts phone">(096) 084 25 13</a></span></li>
             </ul>
           </div>
           <div>
             <ul class="soc">
               <li><a href="https://www.instagram.com/levelup_ua/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
               <li><a href="https://www.youtube.com/channel/UCDV6GGLn2dZHOiF9Bs3YGRQ" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
               <li><a href="https://www.facebook.com/levelupdpua/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
               <li><a href="https://t.me/levelupit" target="_blank"><i class="fa fa-paper-plane" aria-hidden="true"></i></a></li>
             </ul>
           </div>
       </div>
    </div>
    </footer><!-- .site-footer -->


</div><!-- .site -->


<div class="search-open-bg"></div>
<div id="search-modal" class="search-open">
    <div class="btnClose"></div>
    <div class="close-search"><svg class="icon icon--close"><use xlink:href="#icon-close"></use></svg></div>
    <div class="modalClose"></div>
    <div class="search-modal-inner">
        <p class="text-center">Введите слово, чтобы начать поиск</p>

    <div class="container search">
        <?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?>
    </div>
    </div>
</div>
<?php wp_footer(); ?>
<!-- BEGIN JIVOSITE CODE {literal} -->
<script type='text/javascript'>
(function(){ var widget_id = 'f4dz3607ZA';var d=document;var w=window;function l(){
var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/geo-widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();</script>
<!-- {/literal} END JIVOSITE CODE -->
<script type="text/javascript"> jQuery(document).ready(function () {
   if(window.location.href.indexOf("#open-reg") > -1) {
    jQuery("#open-reg .sg-show-popup").click();
  }
}); </script>
<!-- Start обратный звонок binotel -->
<script type="text/javascript">
  (function(d, w, s) {
 var widgetHash = 'xzxi6kby89na41spr3x7', gcw = d.createElement(s); gcw.type = 'text/javascript'; gcw.async = true;
 gcw.src = '//widgets.binotel.com/getcall/widgets/'+ widgetHash +'.js';
 var sn = d.getElementsByTagName(s)[0]; sn.parentNode.insertBefore(gcw, sn);
  })(document, window, 'script');
</script>
<!-- End обратный звонок binotel -->
<script scr="<?php echo get_template_directory_uri(); ?>/video-js/videojs-background.js"></script>
<script scr="<?php echo get_template_directory_uri(); ?>/video.min.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/scripts.js?<?php echo date(get_option('date_format')); ?>"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/imagesloaded.pkgd.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" crossorigin="anonymous"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/slick/slick.min.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/slick_slides.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/wow.min.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.mCustomScrollbar.concat.min.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.spincrement.min.js"></script>

        <script>
              new WOW().init();
        </script>



<div class="event_img-input" style="display:none">[text text-744 id:event_img]</div>
<div class="link_liqpay-input" style="display:none">[text text-745 id:link_liqpay]</div>
<div class="price-input" style="display:none">[text text-746 id:event_price]</div>
<div class="date-input" style="display:none">[text text-747 id:event_date]</div>




<!-- Мероприятия -->
<script type="text/javascript"> 
jQuery(document).ready(function () {
    var linkReg = window.location.href.indexOf("#open-reg") > -1;
    var linkDou = window.location.href.indexOf("#dou") > -1;
    var linkGl = window.location.href.indexOf("#google") > -1;
    var linkFb = window.location.href.indexOf("#fb") > -1;
    var linkMail = window.location.href.indexOf("#mail") > -1;
    var event_img = jQuery('#big-slider .content .image img').attr('src');
    var event_price = jQuery('.event_price').text();
    var event_date = jQuery('.event_date').text();
    var event_time = jQuery('.event_time').text();
    var link_liqpay = jQuery('.liqpay.hidden').text();

    if (linkFb == true) {
        jQuery("#open-reg .sg-show-popup").click();
        jQuery('#hash').val('Facebook (fb)');
    } else if (linkGl == true) {
        jQuery("#google .sg-show-popup").click();
        jQuery('#hash').val('Google my business (google)');
    } else if (linkDou == true) {
        jQuery("#dou .sg-show-popup").click();
        jQuery('#dou').val('Dou');
    } else if (linkReg == true) {
        jQuery("#open-reg .sg-show-popup").click();
        jQuery('#hash').val('Внешние ресурсы (open-reg)');
    } else if (linkMail == true) {
       jQuery("#open-reg .sg-show-popup").click();
        jQuery('#hash').val('Почтовые рассылки (mail)'); 
    } else {
        jQuery('#hash').val('Со страницы ивента'); 
    }

    jQuery('#event_img').val(event_img);
    jQuery('#link_liqpay').val(link_liqpay);
    jQuery('#event_price').val(event_price);
    jQuery('#event_date').val(event_date);
    jQuery('#event_time').val(event_time);
}); 




jQuery(function(){
  jQuery('a[href^="#"]').on('click', function(event) {
    event.preventDefault();
    
    var sc = jQuery(this).attr("href"),
        dn = jQuery(sc).offset().top;
    
    jQuery('html, body').animate({scrollTop: dn - 150}, 1000);

  });
});




jQuery(function(){
    var trigger_show = jQuery('.snj_sandwitch_btn_show');
    var trigger_hide = jQuery('.snj_sandwitch-menu a');
    var sndwch = jQuery('#snj_sandwitch');

    if ( !sndwch.length ) return;
    jQuery(trigger_show).one('click',function(){
      _showMenu();
    });

    function _showMenu() {
      trigger_show.toggleClass('snj_sandwitch_shown');
      trigger_hide.toggleClass('snj_sandwitch_shown');
      sndwch.stop(1,1).fadeIn(function(){
        jQuery(trigger_hide).one('click',function(){
                _hideMenu();
            });
      });
      _resizeSndwch();
    };

    function _hideMenu() {
      trigger_show.toggleClass('snj_sandwitch_shown');
      trigger_hide.toggleClass('snj_sandwitch_shown');
      sndwch.stop(1,1).fadeOut(function(){
        jQuery(trigger_show).one('click',function(){
                _showMenu();
            });
      });
    };

    function _resizeSndwch() {
        sndwch.find('.snj_sandwitch-menu')
        .css(
          'margin-top',
          ((sndwch.height() - sndwch.find('.snj_sandwitch-menu').height())/2) + "px"
        );
    };
    jQuery(window).resize(_resizeSndwch);
});



jQuery('.snj_sandwitch-menu a').click(function(){
        jQuery( "body" ).removeClass( "snj_nav" );
});

</script>
<!--Конец Мероприятия -->
</body>
</html>
