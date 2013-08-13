<?php echo $html_head; ?>
	<section class="container">
		<?php echo $nav_bar; ?>
		<div class="row">
			<div class="span3">
				<?php echo $nav_aside; ?>
			</div>
			<div class="span9">
				<h1>Child</h1>
				<form id="edit-profile" class="form-horizontal">
					<fieldset>
						<legend>Add your child.</legend>
						<div class="control-group">
							<label class="control-label" for="input01">Profile</label>
							<div class="controls">
								<div class="media">
									<a class="pull-left" href="#">
										<img class="media-object" src="http://placehold.it/160x120">
									</a>
									<div class="media-body">
										<input class="input-file" id="fileInput" type="file" />
									</div>
								</div>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="name">Name</label>
							<div class="controls">
								<input type="text" class="span3" id="name" value="" />
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="yyyy">Birthday</label>
							<div class="controls">
								<input class="span1" id="yyyy" type="text" placeholder="year" value="" maxlength="4" />
								<input class="span1" id="mm" type="text" placeholder="month" value="" maxlength="2" />
								<input class="span1" id="dd" type="text" placeholder="day" value="" maxlength="2" />
								<p class="help-block">2001/01/29</p>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="gender">Gender</label>
							<div class="controls">
								<select name="Gender" id="gender"> 
									<option value="" selected="selected">Boy / Girl</option> 
									<option value="boy">Boy</option> 
									<option value="girl">Girl</option> 
								</select>	
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="inp_eye_color">Eye Color</label>
							<div class="controls">
								<input type="text" class="span3" id="eye_color" value="" />
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="hair_color">Hair Color</label>
							<div class="controls">
								<input type="text" class="span3" id="hair_color" value="" />
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="height">Height</label>
							<div class="controls">
								<input type="text" class="span3" id="height" value="" />
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="weight">Weight</label>
							<div class="controls">
								<input type="text" class="span3" id="weight" value="" />
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="biography">Biography</label>
							<div class="controls">
								<textarea class="span3" id="biography" rows="4"></textarea>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="public_profile">Public Profile</label>
							<div class="controls">
								<input type="checkbox" id="public_profile" value="" />
							</div>
						</div>	
						<div class="form-actions">
							<a class="btn btn-primary btn-create-child">Add</a> <button class="btn">Clear</button>
						</div>
					</fieldset>
				</form>
			</div>
		</div>
	</section>
<?php echo $html_close; ?>
