<div class="container">

	<!-- block -->
	<div class="block" style="width: 400px; height: 200px;">
		<?php
		if (!empty($this->session->flashdata('error'))) {
			echo "<div class='alert alert-danger'>"
				. "<strong>" . $this->session->flashdata('error') . "</strong>"
				. "</div>";
		}
		?>
		<form class="form-group" action="add" method="post" enctype="multipart/form-data">
			<fieldset>
				<legend><?= $page_heading; ?></legend>
				<?php if ($this->session->userdata('user_data')['role_id'] != 2) { ?>
					<div class="control-group">
						<label class="lable-info" for="focusedInput">Menter</label>
						<div class="controls">
							<select class="form-control" name="menter_id" required="" style="color:green;">
								<option value=""> Select Menter</option>
								<?php foreach ($menter_list as $menter) { ?>
									<option value="<?= $menter['user_id']; ?>"> <?= $menter['full_name'] ? $menter['full_name'] : $menter['email']; ?></option>
								<?php } ?>
							</select>
						</div>
					</div>
				<?php } else { ?>
					<input class="form-control" type="hidden" value="<?= $this->session->userdata('user_data')['user_id'] ?>" name="menter_id" required="" style="color:green;">
				<?php 	} ?>

				<div class="control-group">
					<label class="lable-info" for="focusedInput">Course</label>
					<div class="controls">
						<select class="form-control" name="course_id" required style="color:green;">
							<option value=""> Select Course</option>
							<?php foreach ($course_list as $course) { ?>
								<option value="<?= $course['course_id']; ?>"> <?= $course['title']; ?></option>
							<?php } ?>
						</select>
					</div>
				</div>
				<div class="control-group">
					<label class="lable-info" for="focusedInput">Title</label>
					<div class="controls">
						<input class="form-control" type="text" value="" placeholder="Title" name="title" required="" style="color:green;">
					</div>
				</div>
				<div class="control-group">
					<label class="lable-info" for="focusedInput">Price</label>
					<div class="controls">
						<input class="form-control" type="text" value="" placeholder="Price" name="price" required="" style="color:green;">
					</div>
				</div>
				<div class="control-group">
					<label class="lable-info" for="focusedInput">Details</label>
					<div class="controls">
						<input class="form-control" type="text" value="" placeholder="Details" name="description" required="" style="color:green;">
					</div>
				</div>

				<div class="control-group">
					<label class="lable-info" for="focusedInput">Select PDF</label>
					<div class="controls">
						<input type="file" name="material_file" required="" />
					</div>
				</div>
				<hr>
				<div class="form-group">
					<button type="submit" value="sub" class="btn btn-primary" name="sub">Add</button>
					<button type="reset" class="btn btn-danger">Cancel</button>
				</div>
			</fieldset>
		</form>

	</div>
</div>


<!-- /block -->
