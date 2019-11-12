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
    <meta name="ahrefs-site-verification" content="8c6072e9fe510b7809a1bc29015d0411211e6b0e3e40c08ce4eae395875e9e63">
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
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/dist/styles-all.min.css?123444111<?php echo date(get_option('date_format')); ?>3">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/new_home.css?11131231<?php echo date(get_option('date_format')); ?>3">
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


<!-- <button style="border: 0; background: none; display: none;" class="action action--menu no-open"><span style="float: left; line-height: 38px; padding: 0 6px; font-size: 14px; font-weight: 600; text-transform: uppercase; color: #fff;">Меню</span><svg class="icon icon--menu" style="float: right;height: 38px !important;"><use xlink:href="#icon-menu"></use></svg></button> -->
                <!-- <nav style="display: none;" class="menu">
                <div class="menu__item menu__item--1" data-direction="bt">
                    <div class="menu__item-inner">
                        <div class="mainmenu">
							<div>
		  						<div class="cat_menu_title cat_1">Программирование</div>

							</div>
								<div>
		  						<div class="cat_menu_title cat_2">Дизайн и верстка</div>

							</div>
								<div>
		  						<div class="cat_menu_title cat_3">Маркетинг и IT-менеджмент</div>

								</div>
								<div>
		  						<div class="cat_menu_title cat_4">Поддержка и аналитика</div>

								</div>

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
            </nav> -->

            <div class="lux_search">
                <div class="button"><span><i class="fa fa-search" aria-hidden="true"></i></span></div>
            </div>
  </div>
</nav>
</header>





<div class="lvl-menu">
	<div class="lvl-menu-content">
		<div class="lvl-menu-header">

				<a href="/" class="lvl-menu-logo"><img src="https://levelup.ua/wp-content/uploads/2019/11/level_up-1.svg" alt="Level Up"></a>
				<a href="#" class="lvl-menu-close">&nbsp;</a>

		</div>
		<div class="lvl-menu-left-side">

				<ul class="socials">
					<li><a href="https://www.instagram.com/levelup_ua/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					<li><a href="https://www.youtube.com/channel/UCDV6GGLn2dZHOiF9Bs3YGRQ" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
					<li><a href="https://www.facebook.com/levelupdpua/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="https://t.me/levelupit" target="_blank"><i class="fa fa-paper-plane" aria-hidden="true"></i></a></li>
				</ul>
				<div class="v-line"></div>
				<div class="vertical-text">мы в сети</div>

		</div>
		<div class="lvl-menu-block-content">

			<div class="menu-left">
				<div>
					<div class="menu-name">
						<div class="nav-icon"><img src="https://levelup.ua/wp-content/uploads/2019/11/lvl_menu_code.svg" alt=""></div><span>Программирование  ПО</span>
					</div>
					<!-- <ul class="menu-list">
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
					</ul> -->
                    <?php
                                $menuParameters = array(
                                //     Основы программирования
                                    'menu'            => '25',
                                    'container'       => false,
                                    'items_wrap'      => '<ul class="menu-list">%3$s</ul>',
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

					<div class="menu-name">
						<div class="nav-icon"><img src="https://levelup.ua/wp-content/uploads/2019/11/lvl_menu_smm.svg" alt=""></div><span>Дизайн и компьютерная графика</span>
					</div>
					<!-- <ul class="menu-list">
						<li><a href="#">Основы графического дизайна</a></li>
						<li><a href="#">Web UI/UX дизайн</a></li>
						<li><a href="#">3D-моделирование</a></li>
						<li><a href="#">WEB-дизайн</a></li>
						<li><a href="#">HTML5, CSS3, JS и CMS</a></li>
						<li><a href="#">Front End разработка</a></li>
					</ul> -->
                    <?php
                                $menuParameters = array(
                                //     Дизайн и верстка
                                    'menu'            => '26',
                                    'container'       => false,
                                    'items_wrap'      => '<ul class="menu-list">%3$s</ul>',
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

					<div class="menu-name">
						<div class="nav-icon"><img src="https://levelup.ua/wp-content/uploads/2019/11/lvl_menu_cogs.svg" alt=""></div><span>Маркетинг и менеджмент</span>
					</div>
					<!-- <ul class="menu-list">
						<li><a href="#">Интернет-маркетинг</a></li>
						<li><a href="#">SMM</a></li>
						<li><a href="#">Создание и продвижение видеоконтента</a></li>
						<li><a href="#">Project management</a></li>
						<li><a href="#">IT-Английский</a></li>
						<li><a href="#">HR — инструкция по применению</a></li>
					</ul> -->
                    <?php
                                $menuParameters = array(
                                //     Маркетинг и IT-менеджмент
                                    'menu'            => '27',
                                    'container'       => false,
                                    'items_wrap'      => '<ul class="menu-list">%3$s</ul>',
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

			<div class="menu-right">

				<div>
					<!-- <ul class="big-menu">
						<li><a href="#">Открыт набор</a></li>
						<li><a href="#">О нас</a></li>
						<li><a href="#">События</a></li>
						<li><a href="#">Вакансии</a></li>
					</ul> -->
                    <?php
                                $menuParameters = array(
                                //     Индивидуальные курсы
                                'menu'            => '2638',
                                'container'       => false,
                                'items_wrap'      => '<ul class="big-menu">%3$s</ul>',
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
					<div class="menu-title">проекты</div>
                    <?php
                                $menuParameters = array(
                                //     Индивидуальные курсы
                                'menu'            => '3560',
                                'container'       => false,
                                'items_wrap'      => '<ul class="medium-menu">%3$s</ul>',
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
					<!-- <ul class="medium-menu">
						<li><a href="#">Открыт набор</a></li>
						<li><a href="#">О нас</a></li>
						<li><a href="#">События</a></li>
						<li><a href="#">Вакансии</a></li>
					</ul> -->
				</div>

			</div>

		</div>

		<div class="lvl-menu-footer">
			<div>
				<ul class="foot-list">
					<li><a href="#"><i class="fa fa-map-marker " aria-hidden="true"></i><span>г. Днепр, ул. Троицкая, 21Г.</span></a></li>
					<li><a href="#"><i class="fa fa-phone" aria-hidden="true"></i><span>+38 (099) 731 83 85, +38 (096) 084 25 13</span></a></li>
					<li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i><span>info@levelup.ua</span></a></li>
				</ul>
			</div>
		</div>

	</div>
</div>







	<div>
