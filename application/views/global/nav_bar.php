<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="navbar-inner">

			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> 
			<span class="icon-bar"></span> 
			<span class="icon-bar"></span> 
			<span class="icon-bar"></span> 
			</a> 
			<div class="btn-group pull-left">
				<a class="btn btn-small btn-inverse"><i class="icon-time icon-white"></i>&nbsp;23:15</a>
				<a class="btn btn-small btn-inverse"><i class="icon-calendar icon-white"></i>Monday, August 3rd 2013</a>
			</div>
			<div class="nav-collapse">
				<!--<ul class="nav">
					<li>
						<a href="index">Dashboard</a>
					</li>
					<li>
						<a href="settings">Account Settings</a>
					</li>
					<li>
						<a href="help">Help</a>
					</li>
					<li class="dropdown">
						<a href="help" class="dropdown-toggle" data-toggle="dropdown">Tours <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li>
								<a href="help">Introduction Tour</a>
							</li>
							<li>
								<a href="help">Project Organisation</a>
							</li>
							<li>
								<a href="help">Task Assignment</a>
							</li>
							<li>
								<a href="help">Access Permissions</a>
							</li>
							<li class="divider">
							</li>
							<li class="nav-header">
								Files
							</li>
							<li>
								<a href="help">How to upload multiple files</a>
							</li>
							<li>
								<a href="help">Using file version</a>
							</li>
						</ul>
					</li>
				</ul>
				<form class="navbar-search pull-left" action="">
					<input type="text" class="search-query span2" placeholder="Search" />
				</form>-->
				<ul class="nav pull-right">
					<?php if(@$user): ?>
					<li class="dropdown">
						<a href="help" class="dropdown-toggle" data-toggle="dropdown"><?php echo @$user->username; ?> <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li>
								<a href="help">Introduction Tour</a>
							</li>
							<li>
								<a href="help">Project Organisation</a>
							</li>
							<li>
								<a href="help">Task Assignment</a>
							</li>
							<li>
								<a href="help">Access Permissions</a>
							</li>
							<li class="divider">
							</li>
							<li class="nav-header">
								Files
							</li>
							<li>
								<a href="help">How to upload multiple files</a>
							</li>
							<li>
								<a href="help">Using file version</a>
							</li>
						</ul>
					</li>
					<?php endif; ?>
					
					
					<li>
					<?php
					if(@$user): 					
						echo anchor('auth/home/logout','logout'); 
					else:
						echo anchor('auth/home/login','<i class="icon-lock icon-white"></i>','class="btn btn-inverse"'); 
					endif;
					?>
					</li>
					
					
				</ul>
			</div>
		</div>
	</div>
</div>