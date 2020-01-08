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
<?php if ( get_field( 'blok_home' ) == 1 ) { ?>
<div>
<div class="course_card" id="block-course-<?php the_ID(); ?>">
	<div class="front">
	    <div>
	        <div class="img"><img src="<?php the_field( 'logo_url' ); ?>" alt=""></div>
	        <h6>
            <?php if(pll_current_language() == 'ru'){ ?>
                <?php if ( have_rows( 'nazvanie_kursa' ) ) : ?>
                    <?php while ( have_rows( 'nazvanie_kursa' ) ) : the_row(); ?>
                        <?php the_sub_field( 'rus' ); ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            <?php } else { ?>
                <?php if ( have_rows( 'nazvanie_kursa' ) ) : ?>
                    <?php while ( have_rows( 'nazvanie_kursa' ) ) : the_row(); ?>
                        <?php the_sub_field( 'ukr' ); ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            <?php } ?>
            </h6>
	    </div>
	</div>
	<div class="back">
    <?php $course_places = get_field( 'kol-vo_svobodnyh_mest' ); ?>
        <?php if( $course_places ){ ?>
            <div class="places">
                <div class="icon"><img src="https://levelup.ua/wp-content/uploads/2019/11/kreslo.svg" alt=""></div>
                <div class="num"><?php the_field( 'kol-vo_svobodnyh_mest' ); ?></div>
            </div>
    <?php } ?>
	    <div>
            <?php if ( have_rows( 'data_raspisanie_grafik' ) ) : ?>
                <?php while ( have_rows( 'data_raspisanie_grafik' ) ) : the_row(); ?>


                <?php if(pll_current_language() == 'ru'){ ?>
                            <ul class="course-info">

                            <?php if ( have_rows( 'date_start' ) ) : ?>
                                <?php while ( have_rows( 'date_start' ) ) : the_row(); ?>

                                <li><i class="fa fa-rocket" aria-hidden="true"></i><span><?php the_sub_field( 'start_rus' ); ?></span></li>

                                    <?php endwhile; ?>
                            <?php endif; ?>

                            <?php if ( have_rows( 'duration' ) ) : ?>
                                <?php while ( have_rows( 'duration' ) ) : the_row(); ?>
                                <li><i class="fa fa-clock-o" aria-hidden="true"></i><span><?php the_sub_field( 'duration_rus' ); ?></span></li>
                                <?php endwhile; ?>
		                    <?php endif; ?>

                            <?php if ( have_rows( 'schedule' ) ) : ?>
                                <?php while ( have_rows( 'schedule' ) ) : the_row(); ?>
                                <li><i class="fa fa-calendar" aria-hidden="true"></i><span><?php the_sub_field( 'schedule_rus' ); ?></span></li>
                                <?php endwhile; ?>
		                    <?php endif; ?>

                            </ul>

                            <?php } else { ?>
                                <ul class="course-info">

                                <?php if ( have_rows( 'date_start' ) ) : ?>
                                    <?php while ( have_rows( 'date_start' ) ) : the_row(); ?>

                                    <li><i class="fa fa-rocket" aria-hidden="true"></i><span><?php the_sub_field( 'start_ukr' ); ?></span></li>

                                        <?php endwhile; ?>
                                <?php endif; ?>

                                <?php if ( have_rows( 'duration' ) ) : ?>
                                    <?php while ( have_rows( 'duration' ) ) : the_row(); ?>
                                    <li><i class="fa fa-clock-o" aria-hidden="true"></i><span><?php the_sub_field( 'duration_ukr' ); ?></span></li>
                                    <?php endwhile; ?>
                                <?php endif; ?>

                                <?php if ( have_rows( 'schedule' ) ) : ?>
                                    <?php while ( have_rows( 'schedule' ) ) : the_row(); ?>
                                    <li><i class="fa fa-calendar" aria-hidden="true"></i><span><?php the_sub_field( 'schedule_ukr' ); ?></span></li>
                                    <?php endwhile; ?>
                                <?php endif; ?>

                                </ul>
                            <?php } ?>
                <?php endwhile; ?>
            <?php endif; ?>
	    </div>
	    <div class="lvl-btn yw"><a href="<?php the_field( 'vybrat_kurs' ); ?>"><?php pll_e('show_more_text','LevelUp'); ?></a></div>
    </div>
</div></div>

<?php } else {

} ?>
