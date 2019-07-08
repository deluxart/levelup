<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?> 
<div class="container">
	<div class="row">
		<main id="main" class="site-main" role="main" style="width: 100%;">
<div id="pageNotFound" class="page-not-found-container container" >

		<div class="pnf-left" style="width:50%; float:left; text-align:center;">
			<img src="https://levelup.ua/wp-content/uploads/2018/10/404-man.png" style="width:50%;margin-bottom:-7px;">
		</div>

		<div class="pnf-right">
			<img src="https://levelup.ua/wp-content/uploads/2018/10/oy-min.png">
			   <div class="textpnf">
			        <h2 style="color: #808080; font-weight: 500;"><?php _e( 'ЧТО-ТО ПОШЛО НЕ ТАК!', 'gdlr_translate' ); ?></h2>

			        <p style="font-size: 20px;"><?php _e( 'НЕПРАВИЛЬНО НАБРАН АДРЕС</br> ИЛИ СТРАНИЦА БЫЛА УДАЛЕНА', 'gdlr_translate' ); ?></p>
			        <p><?php _e( 'Спокойно и без паники переходим</br> на <a href="/">главную страничку</a>', 'gdlr_translate' ); ?></p>
			   </div>
		</div>
	</div>

		</main><!-- .site-main -->
</div>
</div>

<?php get_footer(); ?>
