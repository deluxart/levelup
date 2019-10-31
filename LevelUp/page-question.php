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
<style>
#loginform { background: #fff; box-shadow: 0px 24px 50px 0px rgba(0, 0, 0, 0.1); padding: 30px; }
#loginform p { position: relative; margin: 20px 0; }
#loginform > p:first-child { margin-top: 0; }
#loginform > p:last-child { margin-bottom: 0; }
#loginform label { padding-bottom: 10px; }
#loginform p input { top: -5px; margin-left: 28px; width: 100%; border: none; position: relative; border-bottom: 1px solid #ddd;
  margin: 0; outline: none; font-size: 16px; background: none;  box-shadow: none; }
#loginform p.login-username:before { content: ''; position: absolute;  left: 0; width: 21px; height: 23px; background: url(https://levelup.ua/wp-content/uploads/2018/06/Icon-Mail-Blue-1.svg) no-repeat;
         background-size: contain; z-index: 99999; bottom: 10px; }

#loginform p input[type="text"], #loginform p input[type="password"] { width: 100%; position: relative; left: 0; padding: 10px 10px 10px 38px; }

p.login-remember { display: none; }

#loginform p.login-password:before { content: ''; bottom: 10px; left: 0; position: absolute; width: 21px; height: 23px; background: url(https://levelup.ua/wp-content/uploads/2019/10/lock.svg) no-repeat;
          background-size: contain; z-index: 99999; }
#loginform input#wp-submit { background: #15acf2; padding: 15px 40px 15px 40px; box-shadow: 0px 0px 6px rgba(0,0,0,.05); font-size: 16px; color: #fff; border: 0; border-radius: 30px;}
#loginform input#wp-submit:hover { background: #2980b9; cursor: pointer; }
</style>
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



</div><!-- .site -->







        <?php wp_footer(); ?>

</body>
</html>
