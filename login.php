<?php include ('shared/header.php') ?>
<div class="container">
	<div class="row">
		<div class="col-sm-12 login-panel-header">
			<h1>TEAM<span>clock</span></h1>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6 login-panel">
			<h1>Sign in to your Account</h1>
			<hr>
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
					<button type="button" class="btn btn-primary btn-lg">Login</button>
				</form>
			</div>
		</div>
		<div class="col-sm-6 not-registered-panel">
			<h1>Not a Member?</h1>
			<button type="button" class="btn btn-primary">Get registered today!</button>
		</div>
	</div>


</div><!-- /.container -->
<?php include ('shared/footer.php') ?>