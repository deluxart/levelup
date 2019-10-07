<?php
/*
Template Name: Questions
*/

get_header(); ?>
<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/circle.css" rel="stylesheet">
<div class="quest_content">	<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the page content template.
			get_template_part( 'content', 'page' );

		// End the loop.
		endwhile;
		?>
</div>

<script>
jQuery(".c100").each(function() {
    var text = jQuery(this).html();
    text = text.replace("<span>00%</span>", "<span>0%</span>");
    jQuery(this).html(text);
});
</script>
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

<?php wp_footer(); ?>

<script type="text/javascript"> jQuery(document).ready(function () {
   if(window.location.href.indexOf("#open-reg") > -1) {
    jQuery("#open-reg .sg-show-popup").click();
  }
}); </script>
<!-- Start обратный звонок binotel -->

<!-- End обратный звонок binotel -->
<script scr="<?php echo get_template_directory_uri(); ?>/video-js/videojs-background.js"></script>
<script scr="<?php echo get_template_directory_uri(); ?>/video.min.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/scripts.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/imagesloaded.pkgd.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/slick/slick.min.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/slick_slides.js"></script>
<!-- Мероприятия -->
<!--Конец Мероприятия -->
</body>
</html>

