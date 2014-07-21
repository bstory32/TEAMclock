<?php include ('shared/header.php') ?>
<div class="container">
	<div class="row">
		<div class="col-sm-6 update-account-panel">
			<h1>Manage Account</h1>
			<div class="profile-picture">
				<img src="http://placehold.it/50x50">
				<a href="#"><p>Upload New Profile Picture</p></a>
			</div>
			<form role="form">
				<div class="form-group">
					<label for="exampleInputEmail1">Email Address</label>
					<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Password</label>
					<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Change Password">
				</div>
				<div class="form-group">
					<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Re-Enter Password">
				</div>
				<button type="button" class="btn btn-success">Save Account Settings</button>
			</form>
		</div>
		<div class="col-sm-6 account-tips-section">
			<h1>Tips from the host</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis quidem architecto, similique quam nostrum accusamus asperiores, dolorem, facere quasi maxime dolore fugit sunt natus assumenda harum laboriosam odit! Illum, mollitia?</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit praesentium facilis nesciunt est soluta esse at et corrupti, atque in inventore nisi rerum necessitatibus molestias dolor eum, reiciendis culpa magnam?</p>
		</div>
	</div>

</div><!-- /.container -->
<?php include ('shared/footer.php') ?>