<?php
/**
 * The template part for displaying a message that posts cannot be found
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

<section class="no-results not-found">
	<header class="page-header">
		<h4 class="tc page-title" style="padding: 0;"><?php _e( 'Ничего не найдено', 'LevelUp' ); ?></h4>
	</header><!-- .page-header -->

	<div class="tc page-content">

		<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<p class="tc"><?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'LevelUp' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

		<?php elseif ( is_search() ) : ?>

			<p class="tc"><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'LevelUp' ); ?></p>
			<?php get_search_form(); ?>

		<?php else : ?>

			<p class="tc"><?php _e( 'Кажется, мы не можем найти то, что вы ищете. Возможно, поиск может помочь.', 'LevelUp' ); ?></p>
			<?php get_search_form(); ?>

		<?php endif; ?>

	</div><!-- .page-content -->
</section><!-- .no-results -->
