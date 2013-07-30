<?php echo $html_head; ?>
	<section class="container">
		<?php echo $nav_bar; ?>
		<div class="row">
			<div class="span3">
				<?php echo $nav_aside; ?>
			</div>
			<div class="span9">
				<h1>Child | Change</h1>
					<table class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>
									Day
								</th>
								<th>
									Time
								</th>
								<th>
									Type
								</th>
								
								<th>
									What / Where
								</th>
								<th>
									Cream
								</th>
								
								
								<th>
									Comments
								</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>04-17-2013</td>
								<td>
									7:30 pm
								</td>
								<td>
									Wet
								</td>
								<td>
									Diaper
								</td>
								<td>
									Yes
								</td>
								
								<td>
									<p>Drinking plenty of milk.</p>
								</td>
							</tr>
							<tr>
								<td>04-17-2013</td>
								<td>
									5:30 pm
								</td>
								<td>
									BM
								</td>
								<td>
									Potty
								</td>
								<td>
									No
								</td>
								
								
								<td>
									<p>After dinner shit.</p>
								</td>
							</tr>
							
						</tbody>
					</table>
				
				
				
				<form id="edit-profile" class="form-horizontal">
					<fieldset>
						<legend>When was your child changed?</legend>
						
						
						<!-- What -->
						<div class="control-group">
							<label class="control-label" for="inp_eye_color">When</label>
							<div class="controls">
								<input type="text" class="input-xlarge" id="inp_eye_color" value="" />
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="sel_parent">Type</label>
							<div class="controls">
								<select name="Parent" id="sel_parent" class="span3"> 
									<option value="boy">Wet</option> 
									<option value="girl">Bowel Movement</option> 
								</select>	
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="sel_parent">What / Where</label>
							<div class="controls">
								<select name="Parent" id="sel_parent"> 
									<option value="snack">Diaper</option> 
									<option value="breakfast">Potty</option> 
									<option value="lunch">Blowout</option> 
								</select>	
							</div>
						</div>
						
						
						
						<div class="control-group">
							<label class="control-label" for="sel_parent">Cream</label>
							<div class="controls">
								<select name="Parent" id="sel_parent" class="span3"> 
									<option value="boy">Yes</option> 
									<option value="girl">No</option> 
								</select>	
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="textarea">Comments</label>
							<div class="controls">
								<textarea class="input-xlarge" id="textarea" rows="4"></textarea>
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
