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

<!-- <script>
    new WOW().init();
</script> -->

<div class="event_img-input" style="display:none">[text text-744 id:event_img]</div>
<div class="link_liqpay-input" style="display:none">[text text-745 id:link_liqpay]</div>
<div class="price-input" style="display:none">[text text-746 id:event_price]</div>
<div class="date-input" style="display:none">[text text-747 id:event_date]</div>

<!-- Мероприятия -->
<script type="text/javascript">
</script>


<!--Конец Мероприятия -->
</body>
</html>
