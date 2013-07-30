<?php echo $html_head; ?>
	<section class="container">
		<?php echo $nav_bar; ?>
		<div class="row">
			<div class="span3">
				<?php echo $nav_aside; ?>
			</div>
			<div class="span9">
				<h1>Profile</h1>
				<form id="edit-profile" class="form-horizontal">
					<fieldset>
						<legend>Your Profile</legend>
						<div class="control-group">
							<label class="control-label" for="input01">Picture</label>
							<div class="controls">
								<div class="media">
									<a class="pull-left" href="#">
										<img class="media-object" src="http://placehold.it/160x120">
									</a>
									<div class="media-body">
										<h4 class="media-heading">Title</h4>
										<p>Description of the picture.</p>
										<input class="input-file" id="fileInput" type="file" />
									</div>
								</div>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="input01">Name</label>
							<div class="controls">
								<input type="text" class="input-xlarge" id="input01" value="John Smith" />
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="inp_company">Company</label>
							<div class="controls">
								<input type="text" class="input-xlarge" id="inp_company" value="My Company" />
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="input01">Phone</label>
							<div class="controls">
								<input type="text" class="input-xlarge" id="input01" value="555 555 555" />
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="input01">Email</label>
							<div class="controls">
								<input type="text" class="input-xlarge" id="input01" value="john.smith@example.org" />
							</div>
						</div>
						<div class="form-actions">
							<button type="submit" class="btn btn-primary">Save</button> <button class="btn">Cancel</button>
						</div>
					</fieldset>
				</form>
				<!-- your geography -->
				<form id="your-geography" class="form-horizontal">
					<fieldset>
						<legend>Your Geography</legend>
						
						<div class="control-group">
							<label class="control-label" for="inp_address">Address</label>
							<div class="controls">
								<input type="text" class="input-xlarge" id="inp_address" value="" />
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="inp_city">City</label>
							<div class="controls">
								<input type="text" class="input-xlarge" id="inp_city" value="" />
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="sel_state">State</label>
							<div class="controls">
								<select name="State" id="sel_state"> 
									<option value="" selected="selected">Select a State</option> 
									<option value="AL">Alabama</option> 
									<option value="AK">Alaska</option> 
									<option value="AZ">Arizona</option> 
									<option value="AR">Arkansas</option> 
									<option value="CA">California</option> 
									<option value="CO">Colorado</option> 
									<option value="CT">Connecticut</option> 
									<option value="DE">Delaware</option> 
									<option value="DC">District Of Columbia</option> 
									<option value="FL">Florida</option> 
									<option value="GA">Georgia</option> 
									<option value="HI">Hawaii</option> 
									<option value="ID">Idaho</option> 
									<option value="IL">Illinois</option> 
									<option value="IN">Indiana</option> 
									<option value="IA">Iowa</option> 
									<option value="KS">Kansas</option> 
									<option value="KY">Kentucky</option> 
									<option value="LA">Louisiana</option> 
									<option value="ME">Maine</option> 
									<option value="MD">Maryland</option> 
									<option value="MA">Massachusetts</option> 
									<option value="MI">Michigan</option> 
									<option value="MN">Minnesota</option> 
									<option value="MS">Mississippi</option> 
									<option value="MO">Missouri</option> 
									<option value="MT">Montana</option> 
									<option value="NE">Nebraska</option> 
									<option value="NV">Nevada</option> 
									<option value="NH">New Hampshire</option> 
									<option value="NJ">New Jersey</option> 
									<option value="NM">New Mexico</option> 
									<option value="NY">New York</option> 
									<option value="NC">North Carolina</option> 
									<option value="ND">North Dakota</option> 
									<option value="OH">Ohio</option> 
									<option value="OK">Oklahoma</option> 
									<option value="OR">Oregon</option> 
									<option value="PA">Pennsylvania</option> 
									<option value="RI">Rhode Island</option> 
									<option value="SC">South Carolina</option> 
									<option value="SD">South Dakota</option> 
									<option value="TN">Tennessee</option> 
									<option value="TX">Texas</option> 
									<option value="UT">Utah</option> 
									<option value="VT">Vermont</option> 
									<option value="VA">Virginia</option> 
									<option value="WA">Washington</option> 
									<option value="WV">West Virginia</option> 
									<option value="WI">Wisconsin</option> 
									<option value="WY">Wyoming</option>
								</select>	
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="inp_zip">Zip</label>
							<div class="controls">
								<input type="text" class="input-xlarge" id="inp_zip" value="" />
							</div>
						</div>
						
						<div class="form-actions">
							<button type="submit" class="btn btn-primary">Save</button> <button class="btn">Cancel</button>
						</div>
					</fieldset>
				</form>
				
				<form id="your-status" class="form-horizontal">
					<fieldset>
						<legend>Your Status</legend>
						<div class="control-group">
							<label class="control-label" for="sel_parent">Parent</label>
							<div class="controls">
								<select name="Parent" id="sel_parent"> 
									<option value="" selected="selected">Mom / Dad</option> 
									<option value="mom">Mom</option> 
									<option value="dad">Dad</option> 
								</select>	
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="sel_parent">Marital</label>
							<div class="controls">
								<select name="Parent" id="sel_parent"> 
								<option value="" selected="selected">Status</option> 
									<option value="married">Married</option> 
									<option value="separated">Separated</option> 
									<option value="divorced">Divorced</option> 
								</select>	
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
								<input type="checkbox" id="optionsCheckbox" value="option1" checked="checked" />
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
