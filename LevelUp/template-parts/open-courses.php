<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */




?>


<?php if ( get_field( 'otobrazhenie' ) == 1 ) { ?>


<?php } else { ?>
    <div class="course-block" id="course-<?php the_ID(); ?>">
		<div class="m_head"><div class="icon"><img src="<?php the_field( 'logo_url' ); ?>" /></div>
		<div class="name"><h4><?php the_title(); ?></h4><p style="font-style: italic;">Сортировка: <?php the_field( 'sort_courses' ); ?></p></div></div>
		<div class="date">
			<span class="title">Старт:</span>
			<h5><?php the_field( 'data_starta' ); ?></h5>
			<p class="schedulle"><?php the_field( 'grafik_zanyatij' ); ?></p>
		</div>
		<div class="price">
			<span class="title">Цена:</span>
			<p><?php the_field( 'price_before' ); ?></p>
			<h5><?php the_field( 'stoimost' ); ?><span><?php the_field( 'znachenie_czeny' ); ?></span></h5>
		</div>
		<a href="/kurs-razrabotki-na-c-i-microsoft-net/" class="more-link">
			<span>Подробнее</span>
		</a>
</div>

<?php } ?>
