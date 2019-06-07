<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="apprentice" tabindex="-1" role="dialog" aria-labelledby="apprenticeTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header modal-head">
				<h5 class="modal-title" id="apprenticeTitle">Request Form</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form id="requestForm" method="post" action="">
						<div class="form-group col-md-12">
							<label for="description" id="mentor-name"></label>
							<textarea id="desc" name="desc" class="form-control" aria-label="With textarea" rows="6" cols="50">
                            </textarea>
                            <input type="hidden" name="mentor_id" id="mentor_id">
                            <input type="hidden" name="apprentice_id" id="apprentice_id">
                            <input type="hidden" name="apprentice_fname" id="apprentice_fname">
                            <input type="hidden" name="apprentice_lname" id="apprentice_lname">
						</div>

					<div class="modal-footer status-modal-footer">
                        <button type="button" class="btn-sm btn-secondary" data-dismiss="modal">Discard</button>
                        <button id="apprentice" name="apprentice" type="submit" class="btn-sm btn-success createProfile-button">Send Request</button>
					</div>
				</form>

			</div>
		</div>
	</div>
</div>