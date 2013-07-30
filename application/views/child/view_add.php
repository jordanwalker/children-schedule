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
							<label class="control-label" for="input01">Picture</label>
							<div class="controls">
								<div class="media">
									<a class="pull-left" href="#">
										<img class="media-object" src="http://placehold.it/160x120">
									</a>
									<div class="media-body">
										<h4 class="media-heading">Child Name</h4>
										<p>Description of the child.</p>
										<input class="input-file" id="fileInput" type="file" />
									</div>
								</div>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="inp_eye_color">Birthday</label>
							<div class="controls">
								<input type="text" class="input-xlarge" id="inp_eye_color" value="" />
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="sel_parent">Gender</label>
							<div class="controls">
								<select name="Parent" id="sel_parent"> 
									<option value="" selected="selected">Boy / Girl</option> 
									<option value="boy">Boy</option> 
									<option value="girl">Girl</option> 
								</select>	
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="inp_eye_color">Eye Color</label>
							<div class="controls">
								<input type="text" class="input-xlarge" id="inp_eye_color" value="" />
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="inp_eye_color">Hair Color</label>
							<div class="controls">
								<input type="text" class="input-xlarge" id="inp_hair_color" value="" />
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="inp_current_height">Height</label>
							<div class="controls">
								<input type="text" class="input-xlarge" id="inp_current_height" value="" />
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="inp_current_weight">Weight</label>
							<div class="controls">
								<input type="text" class="input-xlarge" id="inp_current_weight" value="" />
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="textarea">Biography</label>
							<div class="controls">
								<textarea class="input-xlarge" id="textarea" rows="4"></textarea>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="optionsCheckbox">Public Profile</label>
							<div class="controls">
								<input type="checkbox" id="optionsCheckbox" value="option1" />
							</div>
						</div>	
						<div class="form-actions">
							<button type="submit" class="btn btn-primary">Save</button> <button class="btn">Cancel</button>
						</div>
					</fieldset>
				</form>
			</div>
		</div>
	</section>
<?php echo $html_close; ?>
