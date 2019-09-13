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
?>
<?php $options = get_option( 'levelup_theme_options' ); ?>
<!DOCTYPE html>
<html lang="ru-RU" prefix="og: http://ogp.me/ns#" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://ogp.me/ns/fb#">
<head>
	<meta name="google-site-verification" content="wlhz5ESa9pz3ZH9FbWKSDfOWbg3hCS_SXwIAhHXs5Q4" />
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta content="text/html;charset=<?php bloginfo( 'charset' ); ?>" http-equiv="Content-Type">
    <meta content="<?php bloginfo( 'charset' ); ?>" http-equiv="encoding">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, maximum-scale=1.0,  user-scalable=no">

	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.png">

    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/slick/slick-theme.css?3">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/slick/slick.css?3">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/video-js/video-js.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/bootstrap/bootstrap.min.css?1">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/font-awesome.min.css?1">

    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=cyrillic,cyrillic-ext,latin-ext,vietnamese" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/dist/styles-all.min.css?<?php echo date(get_option('date_format')); ?>2">

    <?php wp_head(); ?>

    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/fullstack.css">

    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/greensock.js?ver=1.19.0"></script>
    <?php echo $options[gtm_code];?>

</head>

<body <?php body_class(); ?>>
<?php echo $options[gtm_code_n];?>

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
        <?php echo $options[jivosite_code];?>
        <?php echo $options[binotel_code];?>

        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/wow.min.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/scripts.js?<?php echo date(get_option('date_format')); ?>"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/imagesloaded.pkgd.min.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/popper.min.js" crossorigin="anonymous"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js" crossorigin="anonymous"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.maskedinput.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/slick/slick.min.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/slick_slides.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.mCustomScrollbar.concat.min.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.spincrement.min.js"></script>
        <script type="text/javascript" scr="<?php echo get_template_directory_uri(); ?>/js/video.min.js"></script>
        <script type="text/javascript" scr="<?php echo get_template_directory_uri(); ?>/js/videojs-background.js"></script>

        <div class="event_img-input" style="display:none">[text text-744 id:event_img]</div>
        <div class="link_liqpay-input" style="display:none">[text text-745 id:link_liqpay]</div>
        <div class="price-input" style="display:none">[text text-746 id:event_price]</div>
        <div class="date-input" style="display:none">[text text-747 id:event_date]</div>

        <script>
            jQuery(function(){
            jQuery('a[href^="#"]').on('click', function(event) {
                event.preventDefault();
                var sc = jQuery(this).attr("href"),
                    dn = jQuery(sc).offset().top;
                jQuery('html, body').animate({scrollTop: dn - 150}, 1000);
            });
            });
        </script>
</body>
</html>
