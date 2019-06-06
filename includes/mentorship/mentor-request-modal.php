<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="message-modal" tabindex="-1" role="dialog" aria-labelledby="messageTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header modal-head">
				<h5 class="modal-title" id="messageTitle">Mentorship Request Message</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form id="requestForm" method="post" action="">
						<div class="form-group col-md-12">
							<textarea id="message" name="message" class="form-control text-left" rows="6" cols="50" readonly>
                            </textarea>
						</div>
					<div class="modal-footer status-modal-footer">
                        <button type="button" class="btn-sm btn-secondary" data-dismiss="modal">Close</button>
					</div>
				</form>

			</div>
		</div>
	</div>
</div>