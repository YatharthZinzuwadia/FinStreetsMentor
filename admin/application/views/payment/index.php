<div class="container">
	<div class="row-fluid">
		<div class="span9">

			<!-- block -->
			<div class="block">
				<div class="navbar navbar-inner block-header">
					<div class="muted pull-left">
						<h3>Payment DETAILS</h3>
					</div>
					<div class="" style="padding-left: 1000px;">
					</div>
				</div>
				<?php
				//print_r($result);
				?>
				<div class="block-content collapse in">
					<table class="table table-striped" id="myTable">
						<thead>
							<tr>
								<th>#</th>
								<th>Name</th>
								<th>Package</th>
								<th>Amount</th>
								<th>Date</th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($result as $c => $val) : ?>
								<tr>
									<td><?= $c + 1; ?></td>
									<td><?= $val['full_name']; ?></td>
									<td><?= $val['package_id']; ?></td>
									<td><?= $val['ammount']; ?></td>
									<td><?= $val['created_on']; ?></td>
									<td><?= $val['status'] == 1 ? 'Success' : 'Failed '; ?></td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
			<!-- /block -->
		</div>

		<!-- block -->

	</div>
</div>
