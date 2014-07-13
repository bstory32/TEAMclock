<?php include ('shared/header.php') ?>
<div class="container">
	<div class="row manage-project-panel">
		<div class="col-sm-6">
			<h1>Manage Project</h1>
			<ul>
				<li>Initial Budget: $5000</li>
				<li>Budget Spent: $2000</li>
				<hr>
				<li>Budget Remaining: $3000</li>
			</ul>
		</div>
		<div class="col-sm-6">
			<h2>Project Name: Name of project</h2>
			<h2>Team Member Information</h2>
			<label for="">Add User to project: <input type="text" placeholder="Enter email"></label>
			<table class="table table-striped">
				<thead>
					<tr>
						<th>#</th>
						<th>First Name</th>
						<th>Last Name</th>
						<th>Username</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>1</td>
						<td>Mark</td>
						<td>Otto</td>
						<td>@mdo</td>
					</tr>
					<tr>
						<td>2</td>
						<td>Jacob</td>
						<td>Thornton</td>
						<td>@fat</td>
					</tr>
					<tr>
						<td>3</td>
						<td>Larry</td>
						<td>the Bird</td>
						<td>@twitter</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>

</div><!-- /.container -->
<?php include ('shared/footer.php') ?>