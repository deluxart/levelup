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
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/dist/styles-all.min.css?31123212321231<?php echo date(get_option('date_format')); ?>3">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/2019/new_home.css?1<?php echo date(get_option('date_format')); ?>3">
    <!-- <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/digital.css?7721371<?php echo date(get_option('date_format')); ?>3"> -->
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/career-consultant.css?7721371<?php echo date(get_option('date_format')); ?>3">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/javascript.css?7721371<?php echo date(get_option('date_format')); ?>3">



    <?php echo $options['gtm_code'];?>
</head>

<body <?php body_class(); ?>>
<?php echo $options['gtm_code_n'];?>


<?php
if (isset($GLOBALS["polylang"])) {

    $translations = $GLOBALS["polylang"]->model->post->get_translations($post->ID);
}
?>


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

<header id="header" class="fixed-top header-color <?php the_field( 'header_color' ); ?> <?php if (count($translations) > 1) { echo 'multilang'; } ?>">
	<div class="content">
		<div class="logo">
		    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
		          <img src="https://levelup.ua/wp-content/uploads/2019/11/level_up-1.svg" class="logo_desktop" alt="LevelUp" />
		          <img src="https://levelup.ua/wp-content/uploads/2019/11/logo_mobile.svg" class="logo_mobile" alt="LevelUp" />
		          <img src="https://levelup.ua/wp-content/uploads/2019/11/level_up-1.svg" class="dev-logo" alt="LevelUp" />
                  <img src="https://levelup.ua/wp-content/uploads/2019/12/color_logo.svg" class="d-none color-logo" alt="LevelUp" alt="" />
                  <img src="https://levelup.ua/wp-content/uploads/2019/12/color_logo_mobile.svg" class="d-none color-logo-mobile" alt="LevelUp" alt="" />
		    </a>
		</div>
        <div class="header-phone">
            <i class="fa fa-phone" aria-hidden="true"></i> <a href="tel:+380960842513">(096) 084 25 13</a>
            <div class="header-phone_last"><i class="fa fa-phone" aria-hidden="true"></i> <a href="tel:+380997318385">(099) 731 83 85</a></div>
        </div>
		<div class="basic-nav">


<?php if ( get_field( 'kastomnoe_menyu' ) == 1 ) { ?>

<?php if ( have_rows( 'menyu_v_shapke' ) ) : ?>
    <?php while ( have_rows( 'menyu_v_shapke' ) ) : the_row(); ?>

<?php if ( have_rows( 'punkty_menyu' ) ) : ?>
    <ul class="basic-menu">
    <?php while ( have_rows( 'punkty_menyu' ) ) : the_row(); ?>
        <?php if ( have_rows( 'punkt_menyu' ) ) : ?>
            <?php while ( have_rows( 'punkt_menyu' ) ) : the_row(); ?>
                <li class="menu-item nav-item"><a href="<?php the_sub_field( 'ssylka' ); ?>"><?php the_sub_field( 'nazvanie' ); ?></a></li>
            <?php endwhile; ?>
        <?php endif; ?>
    <?php endwhile; ?>
    </ul>
<?php else : ?>
    <?php // no rows found ?>
<?php endif; ?>

	<?php endwhile; ?>
<?php endif; ?>



<?php } else { ?>
    <?php
            wp_nav_menu( array(
                'menu'            => '2',
                'container'       => false,
                'items_wrap'      => '<ul class="basic-menu">%3$s</ul>',
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
<?php } ?>



		</div>
		<div class="search">
            <div class="lux_search">
                <div class="button"><span><i class="fa fa-search" aria-hidden="true"></i></span></div>
            </div>
        </div>

        <?php if (count($translations) > 1) { ?>
        <div class="lang-btn">
                <div class="lang-block">
                    <div class="toggle_langs lang-<?php echo pll_current_language(); ?>"><?php echo pll_current_language('name'); ?></div>
                    <?php
                        $args = array(
                            'container' => false,
                            'menu'            => '3622',
                            'menu_class' => 'lang-menu',
                        );
                        wp_nav_menu($args);
                    ?>
                </div>
        </div>
        <?php } ?>

		<div class="menu-btn">
            <button class="head-menu-btn desktop-btn"><i class="fa fa-bars" aria-hidden="true"></i></button>
            <button class="head-menu-btn-mobile mobile-btn"><i class="fa fa-bars" aria-hidden="true"></i></button>
		</div>
    </div>



    <div id="lvl_mobile_menu">
    <div class="lvl_mobile_menu_btn_hide">
        <svg class="icon icon--close"><use xlink:href="#icon-close"></use></svg>
    </div>
    <div class="lvl_mobile_menu-menu text-center">
    <?php
            wp_nav_menu( array(
                'menu'            => '3596',
                'container'       => false,
                'items_wrap'      => '<ul class="mobile-menu">%3$s</ul>',
                'depth'           => 0,
                'echo'            => true,
                'before'          => '',
                'after'           => '',
                'link_before'     => '',
                'link_after'      => '',
                'walker'          => '',
                'add_li_class'    => '',
                'link_class'      => '',
                'walker_nav_menu_start_el'          => '',
            ) );
            ?>
	</div>
</div>


<div class="modal fade" id="all_courses" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
		  <h5 class="modal-title reviews_name" id="exampleModalCenterTitle"><?php pll_e('All Level Up Courses','LevelUp'); ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		  						<div class="cat_menu_title cat_1"><?php pll_e('Programming','LevelUp'); ?></div>
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

		  						<div class="cat_menu_title cat_2"><?php pll_e('Design and layout','LevelUp'); ?></div>
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

		  						<div class="cat_menu_title cat_3"><?php pll_e('Marketing and IT Management','LevelUp'); ?></div>
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
		  						<div class="cat_menu_title cat_4"><?php pll_e('Support and analytics','LevelUp'); ?></div>
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
    </div>
  </div>
</div>
</header>



<div class="lvl-menu">
	<div class="lvl-menu-content">
		<div class="lvl-menu-header">
				<a href="/" class="lvl-menu-logo"><img src="https://levelup.ua/wp-content/uploads/2019/11/level_up-1.svg" alt="Level Up"></a>
                <button class="lvl-menu-close">&nbsp;</button>
		</div>
		<div class="lvl-menu-left-side">

				<ul class="socials">
					<li><a href="https://www.instagram.com/levelup_ua/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					<li><a href="https://www.youtube.com/channel/UCDV6GGLn2dZHOiF9Bs3YGRQ" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
					<li><a href="https://www.facebook.com/levelupdpua/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="https://t.me/levelupit" target="_blank"><i class="fa fa-paper-plane" aria-hidden="true"></i></a></li>
				</ul>
				<div class="v-line"></div>
				<div class="vertical-text"><?php pll_e('we_socials','LevelUp'); ?></div>

		</div>
		<div class="lvl-menu-block-content">

			<div class="menu-left">
				<div>
					<div class="menu-name">
						<div class="nav-icon"><img src="https://levelup.ua/wp-content/uploads/2019/11/lvl_menu_code.svg" alt=""></div><span><?php pll_e('Software programming','LevelUp'); ?></span>
					</div>
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
						<div class="nav-icon"><img src="https://levelup.ua/wp-content/uploads/2019/11/lvl_menu_smm.svg" alt=""></div><span><?php pll_e('Design and computer graphics','LevelUp'); ?></span>
					</div>
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

					<div class="menu-name last-child">
						<div class="nav-icon"><img src="https://levelup.ua/wp-content/uploads/2019/11/lvl_menu_cogs.svg" alt=""></div><span><?php pll_e('Marketing and IT Management','LevelUp'); ?></span>
					</div>
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
					<div class="menu-title"><?php pll_e('projects','LevelUp'); ?></div>
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
				</div>

			</div>

		</div>

		<div class="lvl-menu-footer">
			<div>
				<ul class="foot-list">
					<li><a href="#"><i class="fa fa-map-marker " aria-hidden="true"></i><span><?php pll_e('levelup_location','LevelUp'); ?></span></a></li>
					<li><a href="#"><i class="fa fa-phone" aria-hidden="true"></i><span>+38 (099) 731 83 85, +38 (096) 084 25 13</span></a></li>
					<li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i><span>info@levelup.ua</span></a></li>
				</ul>
			</div>
		</div>

	</div>
</div>

	<div>
