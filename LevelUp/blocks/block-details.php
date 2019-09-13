<div class="meet-reg" style="margin-bottom: <?php block_field( 'margin-bottom' ); ?>px">
	<h3 class="center-text blue-text"><?php block_field( 'block-name' ); ?></h3>
	<div class="meet-info"><img src="/wp-content/themes/LevelUp/img/Icon-News-Timer.png" alt="">
		<div>
			<p><b><?php block_field( 'date-title' ); ?></b></p>
			<p><span class="event_date"><?php block_field( 'date' ); ?></span> <span class="event_time"><?php block_field( 'time' ); ?></span></p>
		</div>
	</div>

	<div class="meet-info">
		<img src="/wp-content/themes/LevelUp/img/Icon-News-Map.png" alt="">
		<div>
			<p><b><?php block_field( 'location-title' ); ?></b></p>
			<p><?php block_field( 'location' ); ?></p>
		</div>
	</div>


	<div class="meet-info">
		<img src="/wp-content/themes/LevelUp/img/Icon-News-Cost.png" alt="">
		<div>
			<p><b><?php block_field( 'price-title' ); ?></b></p>
			<p><span class="event_price"><?php block_field( 'price' ); ?></span></p>
		</div>
	</div>
</div>


<?php
if ( block_value( 'discont' ) ) {
	echo "<style>.meet-reg .event_price:after { content: '*' }</style>";
}
?>