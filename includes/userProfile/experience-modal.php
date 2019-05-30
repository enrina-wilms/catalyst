<!-- Modal -->
<div class="modal fade" id="addExperience" tabindex="-1" role="dialog" aria-labelledby="addExperienceTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="addExperienceTitle">Add Experience</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form id="createProfileForm" method="post" action="">
					<div class="form-row">
						<div class="form-group col-md-12">
							<label for="position">Postion</label>
							<input type="text" class="form-control" id="position" name="position" class="fname" placeholder="Position">
						</div>
						<div class="form-group col-md-12">
							<label for="company">Company</label>
							<input type="text" class="form-control" id="company" name="company" placeholder="Company">
						</div>
						<div class="form-group col-md-6">
							<label for="sDate">Start Date</label>
							<input type="date" class="form-control" id="sDate" name="sDate" placeholder="yyyy-mm-dd">
						</div>
						<div class="form-group col-md-6">
							<label for="eDate">End Date</label>
							<input type="date" class="form-control" id="eDate" name="eDate" placeholder="yyyy-mm-dd">
						</div>
					</div>

					<div class="modal-footer status-modal-footer">
						<button id="addExperience" name="addExperience" type="submit" class="btn btn-primary createProfile-button">Add Experience</button>
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Discard</button>
					</div>
				</form>

			</div>
		</div>
	</div>
</div>
