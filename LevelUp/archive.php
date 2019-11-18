<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

// Получаем данные текущего термина (рубрики)
$term = get_queried_object();

// Получаем значения произвольных полей
$this_catname = get_field('zagolovok_kategorii', $term);
$this_description = get_field('opisanie_kategorii', $term);
$this_sidebar = get_field('sajdbar_dlya_dannoj_kategorii', $term);


get_header(); ?>










	<section id="primary" class="content-area archive-php">
		<main id="main" class="site-main" role="main">

<?php if( $this_catname){ ?>
    <div class="page-title tc">
        <h2><?php echo $this_catname ?></h2>
        <?php if( $this_description ){ ?>
            <p><?php echo $this_description ?></p>
        <?php } ?>
    </div>
<?php } ?>


<div class="posts_page <?php echo esc_attr( get_post_meta( get_the_ID(), '_lvl_meta_sidebar', true ) ); ?>">
    <div class="container">
        <div class="content">
            <div class="news">




		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php
			// Start the Loop.
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/archive', get_post_format() );

			// End the loop.
			endwhile;

			// Previous/next page navigation.
			the_posts_pagination( array(
				'prev_text'          => __( 'Previous page', 'LevelUp' ),
				'next_text'          => __( 'Next page', 'LevelUp' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'LevelUp' ) . ' </span>',
			) );

		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'content', 'none' );

		endif;
		?>


            </div>
            <div class="sidebar">

<?php if($this_sidebar == 'sidebar_for_news'){
        if ( function_exists('dynamic_sidebar') ) dynamic_sidebar('news-sidebar');
} elseif ($level_sidebar == 'blog-sidebar') {
        if ( function_exists('dynamic_sidebar') ) dynamic_sidebar('blog-sidebar');
 } else {

} ?>


                <?php echo $this_sidebar ?>
            </div>



        </div>
    </div>
</div>

		</main><!-- .site-main -->
	</section><!-- .content-area -->

<?php get_footer(); ?>
