<div class="block-accent-lab" style="margin-bottom: <?php block_field( 'margin-bottom' ); ?>px; background: <?php block_field( 'background' ); ?>;color: <?php block_field( 'color' ); ?>;border-radius: <?php block_field( 'radius' ); ?>px;">
	<?php block_field( 'content' ); ?>
</div>

<?php
if ( block_value( 'shadow' ) ) {
	echo "<style>.block-accent-lab { box-shadow: 0 7px 30px 0 rgba(0,0,0,.1) !important; }</style>";
}
?>