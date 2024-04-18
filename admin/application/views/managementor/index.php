<div class="container">

	<div class="block" style="margin-right: 30px;">
		<div class="navbar navbar-inner block-header">
			<div class="muted pull-left">
				<legend><?= $page_heading; ?></legend>
			</div>
			<div class="pull-right">
				<a href="<?= base_url(); ?>managementor/add" class="btn btn-success">ADD</a>
			</div>
		</div>
		<div class="block-content collapse in">
			<table class="table table-striped" id="myTable">
				<thead>
					<tr>
						<th>#</th>
						<th>Name</th>
						<th>Phone</th>
						<th>Email</th>
						<th>Role</th>
						<th>Action</th>

					</tr>
				</thead>
				<?php foreach ($result as $key => $val) : ?>
					<tr>
						<td><?= $key + 1; ?></td>
						<td><?= $val['full_name']; ?></td>
						<td><?= $val['phone']; ?></td>
						<td><?= $val['email'] ? $val['email'] : $val['username']; ?></td>
						<td><?= $val['role_name']; ?></td>
						<td>
							<a class="btn btn-info" href="<?= base_url(); ?>/managementor/edit/<?= $val['user_id']; ?>">Edit</a>
							<a class="btn btn-danger" href="<?= base_url(); ?>/managementor/delete/<?= $val['user_id']; ?>">Delete</a>
						</td>
					</tr>
				<?php endforeach; ?>


			</table>
		</div>
	</div>
	<!-- /block -->
</div>

<!-- block -->
