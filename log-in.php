<?php include('shared/header.php'); ?>

<link href="http//:maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">


<div class="container">
	<div class="login-header">
		<div class="row">
			<div class="col-sm-12">
				<h1>Sign up Today</h1>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="signup-section">
		<div class="row">
			<div class="col-sm-6">
				<form role="form">
					<div class="form-group">
						<i class="fa fa-envelope"></i>
						<label for="exampleInputEmail1">Email address</label>
						<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
					</div>
					<div class="form-group">
						<i class="fa fa-lock"></i>
						<label for="exampleInputPassword1">Password</label>
						<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox"> Stay Logged In
						</label>
					</div>
					<button type="submit" class="btn btn-default">Submit</button>
				</form>
			</div>
			<div class="col-sm-6">
				<div class="membership">
					<h2>Not a member?</h2>
					<a href="#"><button type="button" class="btn btn-primary">Register Now</button></a>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include('shared/footer.php'); ?>