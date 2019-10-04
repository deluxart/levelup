<div class="post-company-block <?php block_field( 'block-color' ); ?>" style="margin-bottom: <?php block_field( 'margin-bottom' ); ?>px">
    <h4 class="tc"><?php block_field( 'title' ); ?></h4>
	<div class="content">
        <div class="text">
            <?php block_field( 'text-content' ); ?>
        </div>
        <div><i class="fa fa-play" aria-hidden="true"></i></div>
        <div class="classic-btn btn-blue">
			<a href="#" data-toggle="modal" class="sg-show-popup" data-target="#<?php block_field( 'id-modal' ); ?>"><?php block_field( 'text-btn' ); ?></a>
		</div>
    </div>
</div>

<!-- Модалка -->
<div class="modal fade" id="<?php block_field( 'id-modal' ); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title reviews_name" id="exampleModalCenterTitle"><?php block_field( 'title-modal' ); ?></h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>

			</div>
			<div class="modal-body sg-popup-content"><?php block_field( 'content-modal' ); ?></div>
		</div>
	</div>
</div>
