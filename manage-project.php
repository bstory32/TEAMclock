<?php include ('shared/header.php') ?>
<div class="container">
	<div class="row">
		<div class="col-xs-12">
			<h1 class="manage-project-header">Manage ProjectName</h1>
		</div>
	</div>
	<div class="row manage-project-panel">
		<div class="col-sm-6">
			<ul>
				<li>Initial Budget: <span class="budget">$5000</span></li>
				<li>Budget Spent: <span class="budget-spent">$2000</span></li>
				<hr>
				<li>Budget Remaining: <span class="budget">$3000</span></li>
			</ul>
		</div>
		<div class="col-sm-6">
			<h2>Team Member Information</h2>
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addMemberModal">Add Project Member</button>
			<table class="table table-striped">
				<thead>
					<tr>
						<th>First Name <br> <span class="job-title">Job Title</span></th>
						<th>Hours</th>
						<th>Hourly Rate</th>
						<th>Budget Used</th>
						<th>Edit</th>
					</tr>
				</thead>
				<tbody>
					<tr class="row-odd">
						<td>Brian Story <br><span class="job-title">Project Manager</span></td>
						<td>20 hrs</td>
						<td>$13.5 / hr</td>
						<td>$200</td>
						<td><a href="#">Edit</a></td>
					</tr>

					<tr class="row-even">
						<td>Rafal Radulski <br><span class="job-title">Back End Developer</span></td>
						<td>35 hrs</td>
						<td>$130 / hr</td>
						<td>$200</td>
						<td><a href="#">Edit</a></td>
					</tr>
					
					<tr class="row-even">
						<td>Neil Sammons <br><span class="job-title">Front End Developer</span></td>
						<td>35 hrs</td>
						<td>$10 / hr</td>
						<td>$200</td>
						<td><a href="#">Edit</a></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>

</div><!-- /.container -->

<!-- Modal -->
<div class="modal fade" id="addMemberModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title" id="myModalLabel">Add Team Member to projectName</h4>
			</div>
			<div class="modal-body">
				<form role="form">
					<div class="form-group">
						<label for="exampleInputEmail1">Email address</label>
						<input type="email" class="form-control" id="email" placeholder="Enter Members Email Address">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Hourly Rate</label>
						<input type="email" class="form-control" id="hourly" placeholder="Enter Hourly Rate">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Job Title</label>
						<input type="email" class="form-control" id="email" placeholder="Enter Job Title">
					</div>
				</form>     
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
				<button type="button" class="btn btn-primary">Add Team Member to Project</button>
			</div>
		</div>
	</div>
</div>
<?php include ('shared/footer.php') ?>