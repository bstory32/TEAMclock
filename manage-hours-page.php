<?php include ('shared/header.php') ?>
<div class="container">
	<div class="row">
		<div class="col-sm-12 manage-hours-header">
			<h1>MuddRunner</h1>
			<button type="button" class="btn btn-success" data-toggle="modal" data-target="#addHoursModal">Add Hours</button>

		</div>
	</div>
	<div class="manage-hours-list">
		<ul>
			<li>
				<div class="row">
					<div class="col-sm-3 ">
						<div class="date">
							<h3>Tuesday 14th</h3>
							<span class="hours">2hrs 30min</span>
							<a href="#">Edit Hours</a>
						</div>
					</div> 
					<div class="col-sm-9">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus, vitae laudantium natus, odit sit reprehenderit ratione obcaecati eum laboriosam, autem ad aliquam perspiciatis consequatur nobis repudiandae, neque voluptas placeat sunt.</p>
					</div>
				</div>
			</li>
			<li>
				<div class="row">
					<div class="col-sm-3 ">
						<div class="date">
							<h3>Monday 13th</h3>
							<span class="hours">2hrs 30min</span>
							<a href="#">Edit Hours</a>
						</div>
					</div> 
					<div class="col-sm-9">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus, vitae laudantium natus, odit sit reprehenderit ratione obcaecati eum laboriosam, autem ad aliquam perspiciatis consequatur nobis repudiandae, neque voluptas placeat sunt.</p>
					</div>
				</div>
			</li>
		</ul>
		
	</div>
	<div class="row">
		<div class="col-xs-12">
			<div class="pagination">
				<ul class="list-inline">
					<li><a href="#">Current Week</a></li>
					<li><a href="#">Week 25</a></li>
					<li><a href="#">Week 24</a></li>
					<li><a href="#">Week 23</a></li>
					<li><a href="#">Week 22</a></li>
					<li>...</li>
					<li><a href="#">Week 1</a></li>
				</ul>
			</div>
		</div>
	</div>
</div><!-- /.container -->

<!-- Modal -->
<div class="modal fade" id="addHoursModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title" id="myModalLabel">Add Hours to ProjectName</h4>
			</div>
			<div class="modal-body">
				<form role="form">
					<div class="form-group">
						<label for="day">Day</label>
						<input type="date" class="form-control" id="day" placeholder="10/5/14">
					</div>
					<div class="form-group">
						<label for="day">hours</label>
						<input type="number" class="form-control" id="hours" placeholder="0.00 hrs">
					</div>
					<div class="form-group">
						<label for="day">Comment</label>
						<textarea name="comment" id="" width="100%"></textarea>					
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
				<button type="button" class="btn btn-success">Submit Hours</button>
			</div>
		</div>
	</div>
</div>

<?php include ('shared/footer.php') ?>