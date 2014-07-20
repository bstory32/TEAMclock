<?php include ('shared/header.php') ?>
<div class="container">
	<div class="row">
		<div class="col-sm-6">
			<div class="registration-panel">
				<h1>Register new Account</h1>
				<form role="form">
					<div class="form-group">
						<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox"> Stay logged in
						</label>
					</div>
					<a href="project-overview.php" class="btn btn-default">Register</a>
				</form>
			</div>

			

		</div>
		<div class="col-sm-6">

			<div class="existing-member-panel">
				<h1>Already a Member?</h1>
				<a href="login.php" class="btn btn-primary">Sign In</a>
			</div>

		</div>
		
	</div>


</div><!-- /.container -->
<?php include ('shared/footer.php') ?>