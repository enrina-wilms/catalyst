<!-- Modal -->
<div class="modal fade" id="addEducation" tabindex="-1" role="dialog" aria-labelledby="addEducationTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="addEducationTitle">Add Experience</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form id="createProfileForm" method="post" action="">
					<div class="form-row">
						<div class="form-group col-md-12">
							<label for="school">School</label>
							<input type="text" class="form-control" id="school" name="school" placeholder="School">
						</div>
						<div class="form-group col-md-12">
							<label for="degree">Degree</label>
							<input type="text" class="form-control" id="degree" name="degree" placeholder="Degree">
						</div>
						<div class="form-group col-md-12">
							<label for="field">Field</label>
							<input type="text" class="form-control" id="field" name="field" placeholder="Field">
						</div>
						<div class="form-group col-md-12">
							<label for="description">Description</label>
							<textarea id="description" name="description" class="form-control" aria-label="With textarea" placeholder="description" row="2">
						</textarea>
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
						<button id="addEducation" name="addEducation" type="submit" class="btn btn-primary createProfile-button">Add Education</button>
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Discard</button>
					</div>
				</form>

			</div>
		</div>
	</div>
</div>
