<div class="wraper">
	<!-- Start Content-->
	<div class="container-fluid">

		<!-- start page title -->
		<div class="row">
			<div class="col-12">
				<div class="page-title-box">
					<div class="page-title-right">
						<ol class="breadcrumb m-0">
							<li class="breadcrumb-item"><a href="javascript: void(0);">Hyper</a></li>
							<li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
							<li class="breadcrumb-item active">Basic Tables</li>
						</ol>
					</div>
					<h4 class="page-title">Basic Tables</h4>
				</div>
			</div>
		</div>     
		<!-- end page title --> 


		<div class="card">
			<div class="card-header">
				<h3>Employees</h3>
			</div>
			<div class="card-body">
				<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add-modal">Add Employees</button>
				<table class="table table-centered mb-0">
					<thead>
						<tr>
							<th>Name</th>
							<th>Username</th>
							<th>Email</th>
							<th>Pictures</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($employees as $emp_value):?>
							<tr>
								<td><?=$emp_value->full_name?></td>
								<td><?=$emp_value->username?></td>
								<td><?=$emp_value->email?></td>
								<td>
									<img src="<?=$emp_value->pic?>" alt="">
								</td>
								<td>
									<div class="btn-group">
										<button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#edit-modal"><i class="fa fa-pencil"></i></button>
										<button class="btn btn-danger"><i class="fa fa-trash"></i></button>
									</div>
								</td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<!-- Modal Create -->


<div id="add-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<form>
				<div class="modal-header">
					<h4 class="modal-title" id="standard-modalLabel">Add Employees</h4>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
				</div>
				<div class="modal-body">
					<!-- Modal Body -->
					<div class="row g-2">
						<div class="mb-3 col-6">
							<label for="username" class="form-label">Username</label>
							<input type="text" id="username" class="form-control" autocomplete="off">
						</div>
						<div class="mb-3 col-6">
							<label for="full_name" class="form-label">Full Name</label>
							<input type="text" id="full_name" class="form-control" autocomplete="off">
						</div>
					</div>
					<div class="mb-3">
						<label for="email" class="form-label">Email</label>
						<input type="email" id="email" class="form-control">
					</div>
					<div class="mb-3">
						<label for="password" class="form-label">Password</label>
						<input type="password" id="password" class="form-control">
					</div>
					<div class="mb-3">
						<label for="confirm_password" class="form-label">Confirm Password</label>
						<input type="confirm_password" id="confirm_password" class="form-control">
					</div>
					<div class="mb-3">
						<label for="pic" class="form-label">Pictures</label>
						<input type="file" id="pic" class="form-control">
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Save changes</button>
				</div>
			</form>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- Modal Edit -->
<div id="edit-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<form>
				<div class="modal-header">
					<h4 class="modal-title" id="standard-modalLabel">Edit Employees</h4>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
				</div>
				<div class="modal-body">
					<!-- Modal Body -->
					<div class="row g-2">
						<div class="mb-3 col-6">
							<label for="username" class="form-label">Username</label>
							<input type="text" id="username" class="form-control" autocomplete="off">
						</div>
						<div class="mb-3 col-6">
							<label for="full_name" class="form-label">Full Name</label>
							<input type="text" id="full_name" class="form-control" autocomplete="off">
						</div>
					</div>
					<div class="mb-3">
						<label for="email" class="form-label">Email</label>
						<input type="email" id="email" class="form-control">
					</div>
					<div class="mb-3">
						<label for="password" class="form-label">Password</label>
						<input type="password" id="password" class="form-control">
					</div>
					<div class="mb-3">
						<label for="confirm_password" class="form-label">Confirm Password</label>
						<input type="confirm_password" id="confirm_password" class="form-control">
					</div>
					<div class="mb-3">
						<label for="pic" class="form-label">Pictures</label>
						<input type="file" id="pic" class="form-control">
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Save changes</button>
				</div>
			</form>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

