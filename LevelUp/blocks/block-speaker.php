<?php
    $block_title = block_field( 'title' );
?>

<div class="block-speaker-lab" style="margin-bottom: <?php block_field( 'margin-bottom' ); ?>px;">

<?php if ( ! empty( $block_title ) ) { ?>
	<h4><?php echo $block_title ?></h4>
<?php } ?>

	<div class="speaker-grid">
		<div>
			<div class="photo">
				<img src="<?php block_field( 'photo' ); ?>" alt="" />
			</div>
		</div>
		<div class="content">
			<h5><?php block_field( 'name' ); ?></h5>
			<div class="activity"><?php block_field( 'activity' ); ?></div>
			<div class="descr"><?php block_field( 'description' ); ?></div>
		</div>

	</div>
</div>
