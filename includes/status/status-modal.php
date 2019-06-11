
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalCenterTitle">
					What's on your mind <?= $profile->fname?>? &nbsp;Share It!
				</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body status-modal-body">
				<form class="form-status" method="post" action="">
					<div class="input-group mb-3">
						<label for="content" class="sr-only">Status</label>
						<textarea id="content" name="content" class="form-control" aria-label="With textarea" placeholder="What's on your mind?Share It!" row="2">
						</textarea>

						<br>
						<div class="modal-footer status-modal-footer">
							<button id="addStatus" name="addStatus" class="btn btn-outline-dark btn-block status-addStatus" type="submit" style="background:#E74C3C;">Post Status</button>
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Discard</button>
						</div>
					</div>
				</form>
				<!-- CONTAINER FOR MESASGE ERROR IF INPUT FILED IS EMPTY-->
<!--
				<div>
					<span class="status-error"><?php echo $statErr; ?></span>
				</div>
-->
			</div>
		</div>
	</div>
</div>
