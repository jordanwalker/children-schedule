<?php echo $html_head; ?>
<section class="container">
	<?php echo $nav_bar; ?>
			<div class="row">
				<div class="span3">
					<?php echo $nav_aside; ?>
				</div>
				<div class="span9">
					<h1>Dashboard</h1>
					<div class="hero-unit">
						<h1>
							Welcome!
						</h1>
						<p class="lead">Get started with a quick interactive tour.</p>
						<p>
							<a href="help" class="btn btn-primary btn-large">Start Tour</a> <a class="btn btn-large">No Thanks</a>
						</p>
					</div>
					
					
					<h3>Children</h3>
					<div class="row">
						
						<div class="span3">
							<div class="media">
								<a class="" href="#">
									<img class="media-object" src="http://placehold.it/160x120">
								</a>
								<div class="media-body">
									<h4>First Last</h4>
								</div>
							</div>
							<p class="text-info">open calendar in modal</p>
							<?php echo $calendar; ?>
						</div>
						
						<div class="span3">
							<div class="media">
								<a class="" href="#">
									<img class="media-object" src="http://placehold.it/160x120">
								</a>
								<div class="media-body">
									<h4>First Last</h4>
								</div>
							</div>
						</div>

						<div class="span3">
							<div class="media">
								<a class="" href="#">
									<img class="media-object" src="http://placehold.it/160x120">
								</a>
								<div class="media-body">
									<h4>First Last</h4>
								</div>
							</div>
						</div>


						
					</div>
					
								
					
					
					<h2>
						Schedule
					</h2>
					
					<div class="well summary">
						<ul>
							<li>
								<a href="#"><span class="count">0</span> Projects</a>
							</li>
							<li>
								<a href="#"><span class="count">0</span> Tasks</a>
							</li>
							<li>
								<a href="#"><span class="count">0</span> Messages</a>
							</li>
							<li class="last">
								<a href="#"><span class="count">0</span> Files</a>
							</li>
						</ul>
					</div>
					
					
					<h2>
						Recent Activity
					</h2>
					<table class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>
									Project
								</th>
								<th>
									Client
								</th>
								<th>
									Type
								</th>
								<th>
									Date
								</th>
								<th>
									View
								</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									Nike.com Redesign
								</td>
								<td>
									Monsters Inc
								</td>
								<td>
									New Task
								</td>
								<td>
									4 days ago
								</td>
								<td>
									<a href="#" class="view-link">View</a>
								</td>
							</tr>
							<tr>
								<td>
									Nike.com Redesign
								</td>
								<td>
									Monsters Inc
								</td>
								<td>
									New Message
								</td>
								<td>
									5 days ago
								</td>
								<td>
									<a href="#" class="view-link">View</a>
								</td>
							</tr>
							<tr>
								<td>
									Nike.com Redesign
								</td>
								<td>
									Monsters Inc
								</td>
								<td>
									New Project
								</td>
								<td>
									5 days ago
								</td>
								<td>
									<a href="#" class="view-link">View</a>
								</td>
							</tr>
							<tr>
								<td>
									Twitter Server Consulting
								</td>
								<td>
									Bad Robot
								</td>
								<td>
									New Task
								</td>
								<td>
									6 days ago
								</td>
								<td>
									<a href="#" class="view-link">View</a>
								</td>
							</tr>
							<tr>
								<td>
									Childrens Book Illustration
								</td>
								<td>
									Evil Genius
								</td>
								<td>
									New Message
								</td>
								<td>
									9 days ago
								</td>
								<td>
									<a href="#" class="view-link">View</a>
								</td>
							</tr>
							<tr>
								<td>
									Twitter Server Consulting
								</td>
								<td>
									Bad Robot
								</td>
								<td>
									New Task
								</td>
								<td>
									16 days ago
								</td>
								<td>
									<a href="#" class="view-link">View</a>
								</td>
							</tr>
							<tr>
								<td>
									Twitter Server Consulting
								</td>
								<td>
									Bad Robot
								</td>
								<td>
									New Project
								</td>
								<td>
									16 days ago
								</td>
								<td>
									<a href="#" class="view-link">View</a>
								</td>
							</tr>
							<tr>
								<td>
									Twitter Server Proposal
								</td>
								<td>
									Bad Robot
								</td>
								<td>
									Completed Project
								</td>
								<td>
									20 days ago
								</td>
								<td>
									<a href="#" class="view-link">View</a>
								</td>
							</tr>
						</tbody>
					</table>
					<ul class="pager">
						<li class="next">
							<a href="activity">More &rarr;</a>
						</li>
					</ul>
					<pre>
<?php print_r($user); ?>
</pre>
				</div>
			</div>
		</section>
		
<?php echo $html_close; ?>