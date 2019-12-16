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



<?php if(pll_current_language() == 'ru'){ ?>


    <div class="course-block" id="course-<?php the_ID(); ?>">
		<div class="m_head"><div class="icon"><img src="<?php the_field( 'logo_url' ); ?>" /></div>
		<div class="name"><h4>

 <?php if ( have_rows( 'nazvanie_kursa' ) ) : ?>
	<?php while ( have_rows( 'nazvanie_kursa' ) ) : the_row(); ?>
		<?php the_sub_field( 'rus' ); ?>
	<?php endwhile; ?>
<?php endif; ?>

        </h4><p>
        <?php if ( have_rows( 'descriptions' ) ) : ?>
            <?php while ( have_rows( 'descriptions' ) ) : the_row(); ?>
                <?php the_sub_field( 'rus' ); ?>
            <?php endwhile; ?>
        <?php endif; ?>
        </p></div></div>
		<div class="date">
			<span class="title">Старт:</span>
            <?php if ( have_rows( 'data_raspisanie_grafik' ) ) : ?>
                <?php while ( have_rows( 'data_raspisanie_grafik' ) ) : the_row(); ?>

                    <?php if ( have_rows( 'date_start' ) ) : ?>
                        <?php while ( have_rows( 'date_start' ) ) : the_row(); ?>
                        <h5><?php the_sub_field( 'start_rus' ); ?></h5>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <?php if ( have_rows( 'schedule' ) ) : ?>
			            <?php while ( have_rows( 'schedule' ) ) : the_row(); ?>
                            <p class="schedulle"><?php the_sub_field( 'schedule_rus' ); ?></p>
                        <?php endwhile; ?>
		            <?php endif; ?>


                <?php endwhile; ?>
            <?php endif; ?>
		</div>
		<div class="price">
			<span class="title">Цена:</span>
                <?php if ( have_rows( 'stoimost_kursa' ) ) : ?>
                    <?php while ( have_rows( 'stoimost_kursa' ) ) : the_row(); ?>

                    <?php if ( have_rows( 'before_price' ) ) : ?>
			            <?php while ( have_rows( 'before_price' ) ) : the_row(); ?>
                            <p><?php the_sub_field( 'before_price_rus' ); ?></p>
                        <?php endwhile; ?>
		            <?php endif; ?>
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

<?php } else { ?>

    <div class="course-block" id="course-<?php the_ID(); ?>">
		<div class="m_head"><div class="icon"><img src="<?php the_field( 'logo_url' ); ?>" /></div>
		<div class="name"><h4>
        <?php if ( have_rows( 'nazvanie_kursa' ) ) : ?>
            <?php while ( have_rows( 'nazvanie_kursa' ) ) : the_row(); ?>
                <?php the_sub_field( 'ukr' ); ?>
            <?php endwhile; ?>
        <?php endif; ?>
        </h4><p>
        <?php if ( have_rows( 'descriptions' ) ) : ?>
            <?php while ( have_rows( 'descriptions' ) ) : the_row(); ?>
                <?php the_sub_field( 'ukr' ); ?>
            <?php endwhile; ?>
        <?php endif; ?>
        </p></div></div>
		<div class="date">
			<span class="title">Старт:</span>
            <?php if ( have_rows( 'data_raspisanie_grafik' ) ) : ?>
                <?php while ( have_rows( 'data_raspisanie_grafik' ) ) : the_row(); ?>

                    <?php if ( have_rows( 'date_start' ) ) : ?>
                        <?php while ( have_rows( 'date_start' ) ) : the_row(); ?>
                        <h5><?php the_sub_field( 'start_ukr' ); ?></h5>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <?php if ( have_rows( 'schedule' ) ) : ?>
			            <?php while ( have_rows( 'schedule' ) ) : the_row(); ?>
                            <p class="schedulle"><?php the_sub_field( 'schedule_ukr' ); ?></p>
                        <?php endwhile; ?>
		            <?php endif; ?>


                <?php endwhile; ?>
            <?php endif; ?>
		</div>
		<div class="price">
			<span class="title">Ціна:</span>
                <?php if ( have_rows( 'stoimost_kursa' ) ) : ?>
                    <?php while ( have_rows( 'stoimost_kursa' ) ) : the_row(); ?>

                    <?php if ( have_rows( 'before_price' ) ) : ?>
			            <?php while ( have_rows( 'before_price' ) ) : the_row(); ?>
                            <p><?php the_sub_field( 'before_price_ukr' ); ?></p>
                        <?php endwhile; ?>
		            <?php endif; ?>
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
			<span>Докладніше</span>
		</a>
</div>

<?php } ?>

<?php
		} else {
		 // echo 'false';
		} ?>
	<?php endwhile; ?>
<?php endif; ?>
