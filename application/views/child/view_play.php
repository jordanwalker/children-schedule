<?php echo $html_head; ?>
	<section class="container">
		<?php echo $nav_bar; ?>
		<div class="row">
			<div class="span3">
				<?php echo $nav_aside; ?>
			</div>
			<div class="span9">
				<h1>Child | Play</h1>
				<table class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>
									Activity
								</th>
								<th>
									Start
								</th>
								<th>
									Stop
								</th>
								<th>
									Notes
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
									<p class="text-success">+ add note</p>
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
									yesterday
								</td>
							</tr>
							
						</tbody>
					</table>
				<form id="edit-profile" class="form-horizontal">
					<fieldset>
						<legend>Actively engaged in activity?</legend>
						<!-- Type -->
						<div class="control-group">
							<label class="control-label" for="sel_parent">Activity</label>
							
							<a class="text-success pull-right" href="#">+ add activity</a>
							
							<div class="controls">
								<select name="Parent" id="sel_parent"> 
									<option value="night">Markers</option> 
									<option value="nap">Crayons</option> 
									<option value="nap">Dress Up</option> 
									<option value="nap">Gross Motor</option> 
									<option value="nap">Fine Motor</option> 
								</select>	
							</div>
							
						</div>
						
						</fieldset>
						<div class="form-actions">
							<button type="submit" class="btn btn-primary">Start</button> <button class="btn">Cancel</button>
						</div>
					</fieldset>
				</form>
			</div>
		</div>
	</section>
<?php echo $html_close; ?>
