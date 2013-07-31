<?php echo $html_head; ?>
	<section class="container">
		<?php echo $nav_bar; ?>
		<div class="row">
			<div class="span3">
				<?php echo $nav_aside; ?>
			</div>
			<div class="span9">
				<h1>Child | Health</h1>
				<table class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>Medication</th>
								<th>Dose</th>
								<th>Time</th>
								<th>Reason</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Tylenol</td>
								<td>5 mg</td>
								<td>19:48 7/30/2013</td>
								<td>possible teething</td>
							</tr>
						</tbody>
					</table>
				<form id="edit-profile" class="form-horizontal">
					<fieldset>
						<legend>Administer medicine</legend>
											
						<!-- Medication -->
						<div class="control-group">
							<label class="control-label" for="inp_">Medication</label>
							<div class="controls">
								<input type="text" class="input-xlarge" id="inp_" value="" />
							</div>
						</div>
						
						<!-- Dose -->
						<div class="control-group">
							<label class="control-label" for="sel_parent">Amount</label>
							<div class="controls">
								<input type="text" class="input-mini" id="inp_eye_color" value="" />
								<select name="Parent" id="sel_parent" class="span2"> 
									<option value="" selected="selected">Measure</option> 
									<option value="boy">milligram</option> 
									<option value="girl">grams</option> 
									<option value="girl">milliliters</option> 
									<option value="girl">liters</option> 
								</select>	
							</div>
						</div>
						
						<!-- Deliver -->
						<div class="control-group">
							<label class="control-label" for="inp_">Delivery</label>
							<div class="controls">
								<input type="text" class="input-xlarge" id="inp_" value="" />
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
