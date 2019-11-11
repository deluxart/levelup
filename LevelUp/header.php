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
    <link rel="icon" type="image/x-icon" href="https://levelup.ua/wp-content/uploads/2019/11/favicon.png">


    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=cyrillic,cyrillic-ext,latin-ext,vietnamese" rel="stylesheet">

    <?php wp_head(); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/dist/styles-all.min.css?123123w1111<?php echo date(get_option('date_format')); ?>3">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/new_home.css?1111<?php echo date(get_option('date_format')); ?>3">
    <!-- <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/3d.css?1<?php echo date(get_option('date_format')); ?>3"> -->

    <?php echo $options['gtm_code'];?>
</head>

<body <?php body_class(); ?>>
<?php echo $options['gtm_code_n'];?>
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

<header id="header" class="fixed-top header-color <?php the_field( 'header_color' ); ?>">
 <nav class="navbar navbar-expand-lg navbar-dark bg-kirpichik static-top">
  <div class="container">
    <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
          <img src="https://levelup.ua/wp-content/uploads/2019/11/level_up-1.svg" class="logo_desktop" alt="LevelUp" />
          <img src="https://levelup.ua/wp-content/uploads/2019/11/logo_mobile.svg" class="logo_mobile" alt="LevelUp" />
          <img src="https://levelup.ua/wp-content/uploads/2019/11/level_up-1.svg" class="dev-logo" alt="LevelUp" />
    </a>

	  <div class="header-phone">
	<i class="fa fa-phone" aria-hidden="true"></i> <a href="tel:+380960842513">(096) 084 25 13</a>
		  <div class="header-phone_last"><i class="fa fa-phone" aria-hidden="true"></i> <a href="tel:+380997318385">(099) 731 83 85</a></div>
	  </div>
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


<div class="modal fade" id="all_courses" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
		  <h5 class="modal-title reviews_name" id="exampleModalCenterTitle">Все курсы Level Up</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		  						<div class="cat_menu_title cat_1">Программирование</div>
                                <?php
                                $menuParameters = array(
                                //     Основы программирования
                                    'menu'            => '25',
                                    'container'       => false,
                                    'items_wrap'      => '<ul class="f_nav">%3$s</ul>',
                                    'depth'           => 0,
                                    'echo'            => true,
                                    'before'          => '',
                                    'after'           => '',
                                    'link_before'     => '',
                                    'link_after'      => '',
                                    'walker'          => '',
                                    'walker_nav_menu_start_el'          => '',
                                );
                                echo strip_tags(wp_nav_menu( $menuParameters ), '<a>' );
                                ?>

		  						<div class="cat_menu_title cat_2">Дизайн и верстка</div>
                                <?php
                                $menuParameters = array(
                                //     Дизайн и верстка
                                    'menu'            => '26',
                                    'container'       => false,
                                    'items_wrap'      => '<ul class="f_nav">%3$s</ul>',
                                    'depth'           => 0,
                                    'echo'            => true,
                                    'before'          => '',
                                    'after'           => '',
                                    'link_before'     => '',
                                    'link_after'      => '',
                                    'walker'          => '',
                                    'walker_nav_menu_start_el'          => '',
                                );
                                echo strip_tags(wp_nav_menu( $menuParameters ), '<a>' );
                                ?>

		  						<div class="cat_menu_title cat_3">Маркетинг и IT-менеджмент</div>
		                      <?php
                                $menuParameters = array(
                                //     Маркетинг и IT-менеджмент
                                    'menu'            => '27',
                                    'container'       => false,
                                    'items_wrap'      => '<ul class="f_nav">%3$s</ul>',
                                    'depth'           => 0,
                                    'echo'            => true,
                                    'before'          => '',
                                    'after'           => '',
                                    'link_before'     => '',
                                    'link_after'      => '',
                                    'walker'          => '',
                                    'walker_nav_menu_start_el'          => '',
                                );
                                echo strip_tags(wp_nav_menu( $menuParameters ), '<a>' );
                                ?>
		  						<div class="cat_menu_title cat_4">Поддержка и аналитика</div>
		  		                      <?php
                                $menuParameters = array(
                                //     Поддержка и аналитика
                                    'menu'            => '28',
                                    'container'       => false,
                                    'items_wrap'      => '<ul class="f_nav">%3$s</ul>',
                                    'depth'           => 0,
                                    'echo'            => true,
                                    'before'          => '',
                                    'after'           => '',
                                    'link_before'     => '',
                                    'link_after'      => '',
                                    'walker'          => '',
                                    'walker_nav_menu_start_el'          => '',
                                );
                                echo strip_tags(wp_nav_menu( $menuParameters ), '<a>' );
                                ?>
		  		  						<!-- <div class="cat_menu_title cat_5">Индивидуальные курсы</div>

                                $menuParameters = array(
                                //     Индивидуальные курсы
                                    'menu'            => '29',
                                    'container'       => false,
                                    'items_wrap'      => '<ul class="f_nav">%3$s</ul>',
                                    'depth'           => 0,
                                    'echo'            => true,
                                    'before'          => '',
                                    'after'           => '',
                                    'link_before'     => '',
                                    'link_after'      => '',
                                    'walker'          => '',
                                    'walker_nav_menu_start_el'          => '',
                                );
                                echo strip_tags(wp_nav_menu( $menuParameters ), '<a>' );
                      -->


      </div>
    </div>
  </div>
</div>



    <div class="collapse navbar-collapse" id="navbarResponsive">

            <?php
            wp_nav_menu( array(
                'menu'            => '2',
                'container'       => false,
                'items_wrap'      => '<ul class="navbar-nav ml-auto">%3$s</ul>',
                'depth'           => 0,
                'echo'            => true,
                'before'          => '',
                'after'           => '',
                'link_before'     => '',
                'link_after'      => '',
                'walker'          => '',
                'add_li_class'  => 'nav-item',
                'link_class'   => 'nav-link',
                  'walker_nav_menu_start_el'          => '',
            ) );
            ?>

    </div>


<button style="border: 0; background: none; display: none;" class="action action--menu no-open"><span style="float: left; line-height: 38px; padding: 0 6px; font-size: 14px; font-weight: 600; text-transform: uppercase; color: #fff;">Меню</span><svg class="icon icon--menu" style="float: right;height: 38px !important;"><use xlink:href="#icon-menu"></use></svg></button>
                <nav style="display: none;" class="menu">
                <div class="menu__item menu__item--1" data-direction="bt">
                    <div class="menu__item-inner">
                        <div class="mainmenu">
							<div>
		  						<div class="cat_menu_title cat_1">Программирование</div>
                                <?php
                                $menuParameters = array(
                                //     Основы программирования
                                    'menu'            => '25',
                                    'container'       => false,
                                    'items_wrap'      => '<ul class="f_nav">%3$s</ul>',
                                    'depth'           => 0,
                                    'echo'            => true,
                                    'before'          => '',
                                    'after'           => '',
                                    'link_before'     => '',
                                    'link_after'      => '',
                                    'walker'          => '',
                                    'walker_nav_menu_start_el'          => '',
                                );
                                echo strip_tags(wp_nav_menu( $menuParameters ), '<a>' );
                                ?>
							</div>
								<div>
		  						<div class="cat_menu_title cat_2">Дизайн и верстка</div>
                                <?php
                                $menuParameters = array(
                                //     Дизайн и верстка
                                    'menu'            => '26',
                                    'container'       => false,
                                    'items_wrap'      => '<ul class="f_nav">%3$s</ul>',
                                    'depth'           => 0,
                                    'echo'            => true,
                                    'before'          => '',
                                    'after'           => '',
                                    'link_before'     => '',
                                    'link_after'      => '',
                                    'walker'          => '',
                                    'walker_nav_menu_start_el'          => '',
                                );
                                echo strip_tags(wp_nav_menu( $menuParameters ), '<a>' );
                                ?>
							</div>
								<div>
		  						<div class="cat_menu_title cat_3">Маркетинг и IT-менеджмент</div>
		                      <?php
                                $menuParameters = array(
                                //     Маркетинг и IT-менеджмент
                                    'menu'            => '27',
                                    'container'       => false,
                                    'items_wrap'      => '<ul class="f_nav">%3$s</ul>',
                                    'depth'           => 0,
                                    'echo'            => true,
                                    'before'          => '',
                                    'after'           => '',
                                    'link_before'     => '',
                                    'link_after'      => '',
                                    'walker'          => '',
                                    'walker_nav_menu_start_el'          => '',
                                );
                                echo strip_tags(wp_nav_menu( $menuParameters ), '<a>' );
                                ?>
								</div>
								<div>
		  						<div class="cat_menu_title cat_4">Поддержка и аналитика</div>
		  		                      <?php
                                $menuParameters = array(
                                //     Поддержка и аналитика
                                    'menu'            => '28',
                                    'container'       => false,
                                    'items_wrap'      => '<ul class="f_nav">%3$s</ul>',
                                    'depth'           => 0,
                                    'echo'            => true,
                                    'before'          => '',
                                    'after'           => '',
                                    'link_before'     => '',
                                    'link_after'      => '',
                                    'walker'          => '',
                                    'walker_nav_menu_start_el'          => '',
                                );
                                echo strip_tags(wp_nav_menu( $menuParameters ), '<a>' );
                                ?>
								</div>
							<!-- <div>

		  		  						<div class="cat_menu_title cat_5">Индивидуальные курсы</div>

                                $menuParameters = array(
                                //     Индивидуальные курсы
                                    'menu'            => '29',
                                    'container'       => false,
                                    'items_wrap'      => '<ul class="f_nav">%3$s</ul>',
                                    'depth'           => 0,
                                    'echo'            => true,
                                    'before'          => '',
                                    'after'           => '',
                                    'link_before'     => '',
                                    'link_after'      => '',
                                    'walker'          => '',
                                    'walker_nav_menu_start_el'          => '',
                                );
                                echo strip_tags(wp_nav_menu( $menuParameters ), '<a>' );

							</div> -->
                        </div>
                        <p class="label label--topleft label--vert-mirror">Учебный IT-центр Level Up</p>
                        <p class="label label--bottomright label--vert">Профессиональная IT-подготовка</p>
                    </div>
                </div>
                <div class="menu__item menu__item--2" data-direction="lr">
                    <div class="menu__item-inner">
						<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2645.8589966414834!2d35.039444!3d48.4592349!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40dbe2dfeea55555%3A0xb4637f658c8cf549!2z0KPRh9C10LHQvdGL0LkgSVQt0YbQtdC90YLRgCBMZXZlbCBVcA!5e0!3m2!1sru!2sua!4v1544525641874" width="600" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="menu__item menu__item--3" data-direction="bt">
                    <div class="menu__item-inner">
                        <p class="label label--topleft label--line">Основное меню</p>

						<div class="menu__item-link">
                            <?php
                                $menuParameters = array(
                                //     Индивидуальные курсы
                                'menu'            => '2638',
                                'container'       => false,
                                'items_wrap'      => '<ul class="basic_links">%3$s</ul>',
                                'depth'           => 0,
                                'echo'            => true,
                                'before'          => '',
                                'after'           => '',
                                'link_before'     => '',
                                'link_after'      => '',
                                'walker'          => '',
                                'walker_nav_menu_start_el'          => '',
                                );
                                echo strip_tags(wp_nav_menu( $menuParameters ), '<a>' );
                            ?>
                        </div>

                    </div>
                </div>
                <div class="menu__item menu__item--4" data-direction="rl">
                    <div class="menu__item-inner">
                        <p class="label label--topleft label--line">Мы в сети</p>

                        <div class="menu__item-link" style="transform: matrix(1, 0, 0, 1, 0, 0);">
                            <div class="sidemenu">
                                <ul>
                                <li><a href="https://www.instagram.com/levelup_ua/" class="sidemenu__item"><span class="sidemenu__item-inner"><i class="fa fa-instagram" aria-hidden="true"></i> instagram</span></a></li>
                                <li><a href="https://t.me/levelupit" class="sidemenu__item"><span class="sidemenu__item-inner"><i class="fa fa-telegram" aria-hidden="true"></i> telegram</span></a></li>
                                <li><a href="https://www.facebook.com/levelupdpua/" class="sidemenu__item"><span class="sidemenu__item-inner"><i class="fa fa-facebook" aria-hidden="true"></i> facebook</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="menu__item menu__item--5" data-direction="tb">
                    <div class="menu__item-inner">
                        <p class="label label--topleft label--line">Наши контакты</p>
                        <ul class="full_contacts">
                            <li><i class="fa fa-location-arrow" aria-hidden="true"></i> г. Днепр, ул. Троицкая, 21Г.,</li>
                            <li><i class="fa fa-phone" aria-hidden="true"></i> +38 (099) 731 83 85, +38 (096) 084 25 13</li>
                            <li><i class="fa fa-envelope" aria-hidden="true"></i> info@levelup.ua</li>
                            <li class="read-link"><a href="<?php echo esc_url( home_url( '/' ) ); ?>kontakty/">Подробнее</a></li>
                        </ul>
                    </div>
                </div>
                <button class="action action--menu" style="border: 0; background: none;"><span class="">Меню</span><svg class="icon icon--menu"><use xlink:href="#icon-menu"></use></svg></button>
                <button class="action action--close"><svg class="icon icon--close"><use xlink:href="#icon-close"></use></svg></button>
            </nav>

            <div class="lux_search">
                <div class="button"><span><i class="fa fa-search" aria-hidden="true"></i></span></div>
            </div>
  </div>
</nav>
</header>








<div class="lvl-menu" id="modal_menu">
		<div class="lvl-menu-top">
			<div class="container">
				<a href="/" class="lvl-menu-logo">Logo++</a>
				<a href="#" class="lvl-menu-close">&nbsp;</a>
			</div>
		</div>
		<div class="lvl-menu-wrapper">
			<div class="left-side-menu">
				<ul class="socials">
					<li><a href="https://www.instagram.com/levelup_ua/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					<li><a href="https://www.youtube.com/channel/UCDV6GGLn2dZHOiF9Bs3YGRQ" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
					<li><a href="https://www.facebook.com/levelupdpua/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="https://t.me/levelupit" target="_blank"><i class="fa fa-paper-plane" aria-hidden="true"></i></a></li>
				</ul>
				<div class="v-line"></div>
				<div class="vertical-text">мы в сети</div>
			</div>
			<div class="container">
				<div class="lvl-menu-content">
					<div class="menu-left">
						<div>
<div class="menu-name">
	<div class="nav-icon">
	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 83.24 48.83"><path d="M16.84,41.25a4.25,4.25,0,0,1-3-1.24L1.25,27.42a4.22,4.22,0,0,1,0-6l0,0L13.83,8.82a4.25,4.25,0,0,1,6,6L10.25,24.4,19.84,34a4.25,4.25,0,0,1-3,7.25Z"></path><path d="M66.38,41.25a4.25,4.25,0,0,1-3-7.25L73,24.42l-9.58-9.58a4.25,4.25,0,0,1,6-6L82,21.41a4.26,4.26,0,0,1,0,6L69.38,40A4.25,4.25,0,0,1,66.38,41.25Z"></path><path d="M31.75,48.83a4.17,4.17,0,0,1-1.81-.41,4.24,4.24,0,0,1-2-5.65h0L47.05,2.43a4.25,4.25,0,1,1,7.68,3.65L35.6,46.4A4.25,4.25,0,0,1,31.75,48.83Z"></path></svg>
	</div>
	<span>Программирование  ПО</span>
</div>
<ul class="menu-list">
	<li><a href="#">Основы программирования</a></li>
	<li><a href="#">Программирование на Java</a></li>
	<li><a href="#">JavaScript</a></li>
	<li><a href="#">Разработка на C# под .NET</a></li>
	<li><a href="#">Программирование на 1С</a></li>
	<li><a href="#">Программирование на Python</a></li>
	<li><a href="#">Full Stack разработка</a></li>
	<li><a href="#">Программирование PНР</a></li>
	<li><a href="#">Разработка iOS приложений</a></li>
	<li><a href="#">Программирование под Android</a></li>
	<li><a href="#">Разработка игр на Unreal Engine 4</a></li>
	<li><a href="#">Разработка игр на Unity</a></li>
	<li><a href="#">Разработка баз данных SQL</a></li>
	<li><a href="#">Тестирование ПО</a></li>
</ul>

						</div>
						<div>



<div class="menu-name">
	<div class="nav-icon">
	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 459 459"><path d="M229.5,0C102,0,0,102,0,229.5S102,459,229.5,459c20.4,0,38.25-17.85,38.25-38.25,0-10.2-2.55-17.85-10.2-25.5-5.1-7.65-10.2-15.3-10.2-25.5,0-20.4,17.85-38.25,38.25-38.25h45.9C402.9,331.5,459,275.4,459,204,459,91.8,357,0,229.5,0ZM89.25,229.5C68.85,229.5,51,211.65,51,191.25S68.85,153,89.25,153s38.25,17.85,38.25,38.25S109.65,229.5,89.25,229.5Zm76.5-102c-20.4,0-38.25-17.85-38.25-38.25S145.35,51,165.75,51,204,68.85,204,89.25,186.15,127.5,165.75,127.5Zm127.5,0c-20.4,0-38.25-17.85-38.25-38.25S272.85,51,293.25,51,331.5,68.85,331.5,89.25,313.65,127.5,293.25,127.5Zm76.5,102c-20.4,0-38.25-17.85-38.25-38.25S349.35,153,369.75,153,408,170.85,408,191.25,390.15,229.5,369.75,229.5Z"></path></svg>
	</div>
	<span>Дизайн и компьютерная графика</span>
</div>
<ul class="menu-list">
	<li><a href="#">Основы графического дизайна</a></li>
	<li><a href="#">Web UI/UX дизайн</a></li>
	<li><a href="#">3D-моделирование</a></li>
	<li><a href="#">WEB-дизайн</a></li>
	<li><a href="#">HTML5, CSS3, JS и CMS</a></li>
	<li><a href="#">Front End разработка</a></li>
</ul>

<div class="menu-name">
	<div class="nav-icon">
	                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 932.18 922.71"><path d="M61.2,336.8A227,227,0,0,0,81.5,385L57,415.9a25.36,25.36,0,0,0,1.9,33.6l42.2,42.2a25.25,25.25,0,0,0,33.6,1.9l30.7-24.3a223.1,223.1,0,0,0,50.1,21.2l4.6,39.5a25.3,25.3,0,0,0,25.1,22.4h59.7A25.3,25.3,0,0,0,330,530l4.4-38.1a225.61,225.61,0,0,0,53.7-21.7l29.7,23.5a25.36,25.36,0,0,0,33.6-1.9l42.2-42.2a25.25,25.25,0,0,0,1.9-33.6l-23.1-29.3a220.36,220.36,0,0,0,22.1-52.8l35.6-4.1a25.3,25.3,0,0,0,22.4-25.1V245a25.3,25.3,0,0,0-22.4-25.1L495,215.8a221.72,221.72,0,0,0-21.2-52.2l21.6-27.3a25.36,25.36,0,0,0-1.9-33.6L451.4,60.6a25.25,25.25,0,0,0-33.6-1.9l-26.5,21a222.54,222.54,0,0,0-54.9-23l-4-34.3A25.3,25.3,0,0,0,307.3,0H247.6a25.3,25.3,0,0,0-25.1,22.4l-4,34.3a221.63,221.63,0,0,0-56.3,23.8L134.7,58.7a25.36,25.36,0,0,0-33.6,1.9L58.9,102.8A25.25,25.25,0,0,0,57,136.4l23,29.1a217.54,217.54,0,0,0-20.8,52.7l-36.8,4.2A25.3,25.3,0,0,0,0,247.5v59.7a25.3,25.3,0,0,0,22.4,25.1ZM277.5,175.3A98.7,98.7,0,1,1,178.8,274,98.84,98.84,0,0,1,277.5,175.3Z"></path><path d="M867.7,351.5l-31.5-26.6a24.92,24.92,0,0,0-33.2.9l-17.4,16.3a179.88,179.88,0,0,0-46.4-15l-4.9-24a25.15,25.15,0,0,0-26.6-20l-41.1,3.5a25,25,0,0,0-22.9,24.1l-.8,24.4a180.36,180.36,0,0,0-44.3,23.3l-20.8-13.8a25,25,0,0,0-32.9,4.7L518.3,381a24.92,24.92,0,0,0,.9,33.2l18.2,19.4A186.47,186.47,0,0,0,524,478l-26,5.3a25.15,25.15,0,0,0-20,26.6l3.5,41.1a25,25,0,0,0,24.1,22.9l28.1.9a183.52,183.52,0,0,0,19.9,38l-15.7,23.7a25,25,0,0,0,4.7,32.9L574.1,696a24.92,24.92,0,0,0,33.2-.9l20.6-19.3a180.57,180.57,0,0,0,42.3,13.8l5.7,28.2a25.15,25.15,0,0,0,26.6,20l41.1-3.5a25,25,0,0,0,22.9-24.1l.9-27.6a184.81,184.81,0,0,0,42.3-21.4l22.7,15a25,25,0,0,0,32.9-4.7L891.9,640a24.92,24.92,0,0,0-.9-33.2l-18.3-19.4a180.22,180.22,0,0,0,14.4-44.6l25-5.1a25.15,25.15,0,0,0,20-26.6L928.6,470a25,25,0,0,0-24.1-22.9l-25.1-.8a181.5,181.5,0,0,0-20.9-41.2l13.7-20.6A24.86,24.86,0,0,0,867.7,351.5ZM712.8,589.1a80.79,80.79,0,1,1,73.7-87.3A80.8,80.8,0,0,1,712.8,589.1Z"></path><path d="M205,699.7a25,25,0,0,0-22.4,24.6l-.3,25.3a24.92,24.92,0,0,0,21.8,25.1l18.6,2.4a144.3,144.3,0,0,0,13.2,32.3l-12,14.8a24.93,24.93,0,0,0,1.5,33.2l17.7,18.1a25,25,0,0,0,33.2,2.3l14.9-11.5a146.09,146.09,0,0,0,33.2,14.5l2,19.2A25,25,0,0,0,351,922.4l25.3.3a24.92,24.92,0,0,0,25.1-21.8l2.3-18.2a150.24,150.24,0,0,0,36-14l14,11.3a24.93,24.93,0,0,0,33.2-1.5L505,860.8a25,25,0,0,0,2.3-33.2l-10.7-13.9a145,145,0,0,0,15.2-35l16.6-1.7a25,25,0,0,0,22.4-24.6l.3-25.3A24.92,24.92,0,0,0,529.3,702l-16.2-2.1a150.66,150.66,0,0,0-13.7-35l10.1-12.4a24.93,24.93,0,0,0-1.5-33.2l-17.7-18.1a25,25,0,0,0-33.2-2.3L445,608.2a147.1,147.1,0,0,0-36.4-15.8L407,576.7a25,25,0,0,0-24.6-22.4l-25.3-.3A24.92,24.92,0,0,0,332,575.8l-2,15.6a151,151,0,0,0-37.7,15.4l-12.5-10.2a24.93,24.93,0,0,0-33.2,1.5l-18.2,17.8a25,25,0,0,0-2.3,33.2l10.7,13.8a146.38,146.38,0,0,0-14.3,35Zm163.3-28.6a65.8,65.8,0,1,1-66.6,65A65.86,65.86,0,0,1,368.3,671.1Z"></path></svg>
	</div>
	<span>Маркетинг и менеджмент</span>
</div>
<ul class="menu-list">
<li><a href="#">Интернет-маркетинг</a></li>
<li><a href="#">SMM</a></li>
<li><a href="#">Создание и продвижение видеоконтента</a></li>
<li><a href="#">Project management</a></li>
<li><a href="#">IT-Английский</a></li>
<li><a href="#">HR — инструкция по применению</a></li>
</ul>


						</div>
					</div>

					<div class="menu-right">
						<div>

						<ul class="big-menu">
							<li><a href="#">Открыт набор</a></li>
							<li><a href="#">О нас</a></li>
							<li><a href="#">События</a></li>
							<li><a href="#">Вакансии</a></li>
						</ul>

						</div>
						<div>
							<div class="menu-title">проекты</div>
						<ul class="medium-menu">
							<li><a href="#">Открыт набор</a></li>
							<li><a href="#">О нас</a></li>
							<li><a href="#">События</a></li>
							<li><a href="#">Вакансии</a></li>
						</ul>
						</div>
					</div>
				</div>
			</div>


<div class="modal-footer">
	<div>
	<ul class="foot-list">
		<li><a href="#"><i class="fa fa-location" aria-hidden="true"></i><span>г. Днепр, ул. Троицкая, 21Г.</span></a></li>
		<li><a href="#"><i class="fa fa-phone" aria-hidden="true"></i><span>+38 (099) 731 83 85, +38 (096) 084 25 13</span></a></li>
		<li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i><span>+38 (099) 731 83 85, +38 (096) 084 25 13</span></a></li>
	</ul>
	</div>
</div>



		</div>
	</div>







	<div>
