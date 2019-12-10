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




<?php if ( have_rows( 'otkryt_nabor' ) ) : ?>
	<?php while ( have_rows( 'otkryt_nabor' ) ) : the_row(); ?>
		<?php if ( get_sub_field( 'nabor_otkryt' ) == 1 ) {  ?>


    <div class="course-block" id="course-<?php the_ID(); ?>">
		<div class="m_head"><div class="icon"><img src="<?php the_field( 'logo_url' ); ?>" /></div>
		<div class="name"><h4><?php the_title(); ?></h4><p><?php the_field( 'description' ); ?></p></div></div>
		<div class="date">
			<span class="title">Старт:</span>
            <?php if ( have_rows( 'data_raspisanie_grafik' ) ) : ?>
                <?php while ( have_rows( 'data_raspisanie_grafik' ) ) : the_row(); ?>

                    <?php if ( have_rows( 'date_start' ) ) : ?>
                        <?php while ( have_rows( 'date_start' ) ) : the_row(); ?>

                        <h5><?php the_sub_field( 'start_rus' ); ?></h5>
                        <p class="schedulle"><?php the_sub_field( 'schedule' ); ?></p>
                        <?php endwhile; ?>
                    <?php endif; ?>

                <?php endwhile; ?>
            <?php endif; ?>
		</div>
		<div class="price">
			<span class="title">Цена:</span>
                <?php if ( have_rows( 'stoimost_kursa' ) ) : ?>
                    <?php while ( have_rows( 'stoimost_kursa' ) ) : the_row(); ?>
                            <p><?php the_sub_field( 'before_price' ); ?></p>
                            <h5><?php the_sub_field( 'price_course' ); ?>

                            <?php if ( get_sub_field( 'units' ) == 'грн за курс' ) { ?>
                                <span class="price-block"><?php the_sub_field( 'units' ); ?></span>
                            <?php } else { ?>
                                <span><?php the_sub_field( 'units' ); ?></span>
                            <?php } ?>

                            </h5>
                    <?php endwhile; ?>
                <?php endif; ?>
		</div>
		<a href="<?php the_field( 'vybrat_kurs' ); ?>" class="more-link">
			<span>Подробнее</span>
		</a>
</div>

<?php
		} else {
		 // echo 'false';
		} ?>
	<?php endwhile; ?>
<?php endif; ?>
