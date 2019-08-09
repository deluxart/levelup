<?php
/*
Template Name: Страница всех новостей
*/

get_header(); ?>
<div class="open-courses course"><div class="col tc"><h1>Новости и мероприятия</h1></div></div>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

<div class="posts_page">
	<div class="container">

		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the page content template.
			get_template_part( 'content', 'page' );

		// End the loop.
		endwhile;
		?>

	<div class="content">

		<div class="news">
			<?php echo do_shortcode('[the_grid name="Last News"]'); ?>
		</div>
		<div class="sidebar">


<?php
	if ( function_exists('dynamic_sidebar') )
		dynamic_sidebar('news-sidebar');
?>
		</div>


	</div>
</div>
</div>


		</main><!-- .site-main -->
	</div>

<?php get_footer(); ?>
