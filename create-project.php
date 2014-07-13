<?php include ('shared/header.php') ?>
<div class="container">
	<div class="row">
		<div class="col-sm-6 create-project-form">
			<h1>Create Project</h1>
			<form role="form">
				<div class="form-group">
					<label for="exampleInputEmail1">Name</label>
					<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter full name">
				</div>
				<div class="row">
					<div class="col-sm-6">
						<label for="exampleInputEmail1">Budget (Optional)</label>
					</div>
					<div class="col-sm-6">
						<div class="input-group">
							<div class="input-group-addon">$</div>
							<input class="form-control" type="email" placeholder="0.00">
						</div>
					</div>
				</div>
				<button type="submit" class="btn btn-default">Create new project</button>
			</form>
		</div>
		<div class="col-sm-6 tips-panel">
			<h1>Tips</h1>
			<ul>
				<li>Tip 1</li>
				<li>Tip 2</li>
				<li>Tip 3</li>
			</ul>
		</div>
	</div>

</div><!-- /.container -->
<?php include ('shared/footer.php') ?>