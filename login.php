<?php include ('shared/header.php') ?>
<div class="container">
	<div class="row">
		<div class="col-sm-6 login-panel">
			<h1>Sign in to your Account</h1>
			<form role="form">
				<div class="form-group">
					<label for="exampleInputEmail1">Email address</label>
					<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Password</label>
					<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter password">
				</div>
				<div class="checkbox">
					<label>
						<input type="checkbox"> Stay logged in
					</label>
				</div>
				<button type="submit" class="btn btn-default">Login</button>
			</form>
		</div>
		<div class="col-sm-6">
			<h1>Not a Member?</h1>
			<button type="button" class="btn btn-primary">Register a new Account</button>
			<p>TEAMclock makes it super easy to manage a team that submit hours against a project</p>
			<ul>
				<li>Manage Your Project Budget</li>
				<li>Log Hours to a Project</li>
			</ul>
		</div>
	</div>


</div><!-- /.container -->
<?php include ('shared/footer.php') ?>