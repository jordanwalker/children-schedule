<?php echo $html_head; ?>
	<section class="container">
		<?php echo $nav_bar; ?>
		<div class="row">
			<div class="span3">
				<?php echo $nav_aside; ?>
			</div>
			<div class="span9">
				<h1>Child | Sleep</h1>
				<table class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>
									When
								</th>
								<th>
									Start
								</th>
								<th>
									Stop
								</th>
								<th>
									Duration
								</th>
								<th>
									Day
								</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									Day
								</td>
								<td>
									12:00 pm
								</td>
								<td>
									<button class="btn btn-mini">awake</button>
								</td>
								<td>
									hours
								</td>
								<td>
									today
								</td>
							</tr>
							<tr>
								<td>
									Night
								</td>
								<td>
									1:00 am
								</td>
								<td>
									6:00 am
								</td>
								<td>
									5 hours
								</td>
								<td>
									this morning
								</td>
							</tr>
							
							<tr>
								<td>
									Night
								</td>
								<td>
									8:15 pm
								</td>
								<td>
									12:15am
								</td>
								<td>
									4 hours
								</td>
								<td>
									yesterday
								</td>
							</tr>
							
						</tbody>
					</table>
				<form id="edit-profile" class="form-horizontal">
					<fieldset>
						<legend>When is your child sleeping?</legend>
						<!-- Type -->
						<div class="control-group">
							<label class="control-label" for="sel_parent">When</label>
							<div class="controls">
								<select name="Parent" id="sel_parent"> 
									<option value="night">Night</option> 
									<option value="nap">Day</option> 
								</select>	
							</div>
						</div>
						<!-- What -->
						<div class="control-group">
							<label class="control-label" for="inp_eye_color">Item</label>
							<div class="controls">
								<input type="text" class="input-xlarge" id="inp_eye_color" value="" />
							</div>
						</div>
						<!-- Amount -->
						<div class="control-group">
							<label class="control-label" for="sel_parent">Amount</label>
							<div class="controls">
								<input type="text" class="input-mini" id="inp_eye_color" value="" />
								<select name="Parent" id="sel_parent" class="span2"> 
									<option value="" selected="selected">Measure</option> 
									<option value="boy">Ounces</option> 
									<option value="girl">Cups</option> 
									<option value="girl">Pieces</option> 
									<option value="girl">Bites</option> 
								</select>	
							</div>
						</div>
						</fieldset>
						<div class="form-actions">
							<button type="submit" class="btn btn-primary">Save</button> <button class="btn">Cancel</button>
						</div>
					</fieldset>
				</form>
			</div>
		</div>
	</section>
<?php echo $html_close; ?>
