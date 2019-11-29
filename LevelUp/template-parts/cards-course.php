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

<div class="course_card" id="block-course-<?php the_ID(); ?>">
	<div class="front">
	    <div>
	        <div class="img"><img src="<?php the_field( 'logo_url' ); ?>" alt=""></div>
	        <h6><?php the_title(); ?></h6>
	    </div>
	</div>
	<div class="back">
	    <div>
            <?php if ( have_rows( 'data_raspisanie_grafik' ) ) : ?>
                <?php while ( have_rows( 'data_raspisanie_grafik' ) ) : the_row(); ?>
                    <ul class="course-info">
                        <li><i class="fa fa-rocket" aria-hidden="true"></i><span><?php the_sub_field( 'date_start' ); ?></span></li>
                        <li><i class="fa fa-clock-o" aria-hidden="true"></i><span><?php the_sub_field( 'duration' ); ?></span></li>
                        <li><i class="fa fa-calendar" aria-hidden="true"></i><span><?php the_sub_field( 'schedule' ); ?></span></li>
                    </ul>
                <?php endwhile; ?>
            <?php endif; ?>
	    </div>
	    <div class="lvl-btn yw"><a href="<?php the_field( 'vybrat_kurs' ); ?>">Подробнее</a></div>
    </div>
</div>

<?php } else {
 // echo 'false';
} ?>
