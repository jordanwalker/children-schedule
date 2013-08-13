<?php echo $html_head; ?>
	<section class="container">
		<?php echo $nav_bar; ?>
		<div class="row">
			<div class="span3">
				<?php echo $nav_aside; ?>
			</div>
			<div class="span9">
				<h1>Child | Eat</h1>
				<table class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>Meal</th>
							<th>Item</th>
							<th>Amount</th>
							<th>Time</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Breakfast</td>
							<td>Cheerios</td>
							<td>1 cup</td>
							<td>08/12/2013 6:12am</td>
						</tr>
						<tr>
							<td>Breakfast</td>
							<td>Blueberry</td>
							<td>4 pieces</td>
							<td>08/12/2013 7:30am</td>
						</tr>
						<tr>
							<td>Snack</td>
							<td>Cracker</td>
							<td>2 pieces</td>
							<td>08/12/2013 10:21am</td>
						</tr>
						
					</tbody>
				</table>
				
				
				
				<form id="edit-profile" class="form-horizontal">
					<fieldset>
						<legend>What is your child eating?</legend>
						
						
						<!-- Meal -->
						<div class="control-group">
							<label class="control-label" for="sel_parent">Meal</label>
							<div class="controls">
								<select name="Parent" id="sel_parent"> 
									<option value="" selected="selected">Select meal</option> 
									<option value="snack">Snack</option> 
									<option value="breakfast">Breakfast</option> 
									<option value="lunch">Lunch</option> 
									<option value="dinner">Dinner</option> 
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
						<fieldset>
						<legend>Add menu item</legend>
						<!-- Food items -->
						<div class="control-group">
							<label class="control-label" for="inp_eye_color">Item</label>
							<div class="controls">
								<input type="text" class="input-xlarge" id="inp_eye_color" value="" />
							</div>
						</div>
						
						<div class="control-group">
							<label class="control-label" for="sel_parent">Category</label>
							<div class="controls">
								<select name="Parent" id="sel_parent"> 
									<option value="" selected="selected">Food category</option> 
									<option value="boy">Fruit</option> 
									<option value="girl">Vegetable</option> 
									<option value="girl">Grain</option> 
									<option value="girl">Sugar</option> 
								</select>	
							</div>
						</div>
						
						<div class="control-group">
							<label class="control-label" for="inp_eye_color">Expire</label>
							<div class="controls">
								<input type="text" class="input-xlarge" id="inp_eye_color" value="" />
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
