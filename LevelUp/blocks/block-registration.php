<div class="post-form-block <?php block_field( 'block-color' ); ?>" id="open-reg" style="margin-bottom: <?php block_field( 'margin-bottom' ); ?>px">
	<div id="google">
	<div id="fb">
		<div id="mail">
		<div class="content">
				<div class="post-form-title"><?php block_field( 'title' ); ?></div>
						<div class="post-form-reg">
							<div class="post-tel-reg">
								<p class="post-tel-reg-title"><?php block_field( 'phones-title' ); ?></p>
								<p class="post-tel-reg-phone"><a href="tel:+380997318385">+38 (099) 731 83 85</a></p>
								<p class="post-tel-reg-phone"><a class="binct-phone-number-1" href="tel:+380960842513">+38 (096) 084 25 13</a></p>
							</div>
							<div class="post-btn-reg">
								<p class="post-btn-reg-title"><?php block_field( 'form-title' ); ?></p>
								<div class="classic-btn">
									<a href="#" data-toggle="modal" class="sg-show-popup" data-target="#<?php block_field( 'id-modal' ); ?>"><?php block_field( 'text-btn' ); ?></a>
								</div>


							</div>
						</div>
						<!-- <div class="bottom-post-form-text"><?php block_field( 'end-text' ); ?></div> -->
			</div>
		</div>
	</div>
</div>
	<div class="liqpay hidden"><?php block_field( 'liqpay' ); ?></div>
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
