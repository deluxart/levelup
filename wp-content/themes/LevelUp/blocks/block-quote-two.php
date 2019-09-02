<div class="block-quote-two" style="margin-bottom: <?php block_field( 'margin-bottom' ); ?>px; border-color: <?php block_field( 'border-color' ); ?>; font-size: <?php block_field( 'font-size' ); ?>px;color: <?php block_field( 'color' ); ?>">
	<?php block_field( 'content' ); ?>
</div>
<?php
if ( block_value( 'font-italic' ) ) {
	echo "<style>.block-quote-two { font-style: italic !important; }</style>";
}
?>
