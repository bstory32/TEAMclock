<?php include('shared/header.php'); ?>

<link href="http//:maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">


<div class="container">
	<div class="login-header">
		<div class="row">
			<div class="col-sm-12">
				<h1>Register a new account</h1>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="signup-section">
		<div class="row">
			<div class="col-sm-6 col-xs-12">
				<form role="form">
					<div class="form-group">
						<i class="fa fa-user"></i>
						<label for="exampleInputEmail1">Full name</label>
						<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
					</div>
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
					<div class="form-group">
						<i class="fa fa-lock"></i>
						<label for="exampleInputPassword1">Repeat Password</label>
						<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
					</div>
					<button type="submit" class="btn btn-success">Register Account</button>
				</form>
			</div>
			<div class="col-sm-6 hidden-xs">
				<div class="login">
					<h2>Aready a member?</h2>
					<a href="log-in.php"><button type="button" class="btn btn-primary">Login</button></a>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include('shared/footer.php'); ?>