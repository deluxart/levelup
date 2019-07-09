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
<?php $options = get_option( 'levelup_theme_options' ); ?>
	</div><!-- .site-content -->

	<footer id="footer" class="site-footer">

    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-4">

                    <?php
                    if ( function_exists('dynamic_sidebar') )
                        dynamic_sidebar('footer-1');
                    ?>

            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 col-footer-2">

                    <?php
                    if ( function_exists('dynamic_sidebar') )
                        dynamic_sidebar('footer-2');
                    ?>

            </div>
            <div class="col-sm-12 col-md-6 col-lg-4">

                    <?php
                    if ( function_exists('dynamic_sidebar') )
                        dynamic_sidebar('footer-3');
                    ?>

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

</body>
</html>
