<?php include ('shared/header.php') ?>
<div class="container">
	<div class="row">
		<div class="col-sm-12 login-panel-header">
			<h1>TEAM<span>clock</span></h1>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6 ">
			
			
			<div class="login-panel">
				<h1>Sign in to your Account</h1>
				<div class="form-container">
					<form role="form">
						<div class="form-group">
							<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
						</div>
						<div class="form-group">
							<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox"> Stay logged in
							</label>
							<a href="#">Forget password?</a>
						</div>
						<a href="project-overview.php" class="btn btn-primary btn-lg">Login</a>
					</form>
				</div>
			</div>
		</div>
		<div class="col-sm-6 ">
			<div class="not-registered-panel">
				<h1>Not a member yet?</h1>
				<a href="registration.php" class="btn btn-primary">Sign up now</a>
			</div>
		</div>
	</div>


</div><!-- /.container -->
<?php include ('shared/footer.php') ?>