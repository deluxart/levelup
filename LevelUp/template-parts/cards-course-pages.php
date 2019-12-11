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





<div>
    <div class="course_card_block tc">
        <img src="<?php the_field( 'logo_url' ); ?>" alt="" />
        <h4>Разработка под Android</h4>

        <?php if ( have_rows( 'data_raspisanie_grafik' ) ) : ?>
                <?php while ( have_rows( 'data_raspisanie_grafik' ) ) : the_row(); ?>
                            <?php if ( have_rows( 'date_start' ) ) : ?>
                                <?php while ( have_rows( 'date_start' ) ) : the_row(); ?>
                                <p<?php the_sub_field( 'start_rus' ); ?></p>
                                    <?php endwhile; ?>
                            <?php endif; ?>
                <?php endwhile; ?>
            <?php endif; ?>

            <div class="price">
            <span>Цена</span>
            [SmrkCourse cource="java-programmirovanie-pod-android" field="price"] [SmrkCourse cource="java-programmirovanie-pod-android" field="units"]
            </div>
        <div class="col tc"><a href="https://levelup.ua/portfolios/java-programmirovanie-pod-android/" class="btn buttonLight black" role="button" aria-pressed="true">Подробнее</a></div>
    </div>
</div>











<?php if ( get_field( 'blok_home' ) == 1 ) { ?>

<div class="course_card" id="block-course-<?php the_ID(); ?>">
	<div class="front">
	    <div>
	        <div class="img"><img src="<?php the_field( 'logo_url' ); ?>" alt=""></div>
	        <h6><?php the_title(); ?></h6>
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


                        <h5><?php the_sub_field( 'start_rus' ); ?></h5>
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
                <?php endwhile; ?>
            <?php endif; ?>
	    </div>
	    <div class="lvl-btn yw"><a href="<?php the_field( 'vybrat_kurs' ); ?>"><?php pll_e('show_more_text','LevelUp'); ?></a></div>
    </div>
</div>

<?php } else {
 // echo 'false';
} ?>
