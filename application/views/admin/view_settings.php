<?php echo $html_head; ?>
		<section class="container">
			<?php echo $nav_bar; ?>
			<div class="row">
				<div class="span3">
					<?php echo $nav_aside; ?>
				</div>
				<div class="span9">
					<h1>
						Settings
					</h1>
					<form id="edit-profile" class="form-horizontal">
						<fieldset>
							<legend>Configure Your Settings</legend>
							<div class="control-group">
								<label class="control-label" for="input01">REST Key</label>
								<div class="controls">
									<input type="text" class="span6" id="input01" value="$v^Y2Il4%lC%xIA7HCxYmL(J#qSA3SJ2fQk2ICjf" disabled="disabled" />
									<p class="help-block">This is your API key.</p>
								</div>
							</div>
							
							<div class="control-group">
								<label class="control-label" for="input01">Notifications</label>
								<div class="controls">
									<label class="checkbox">
										<input type="checkbox" name="optionsCheckboxList1" value="option1" checked="checked" />
										Tasks
									</label>
									<label class="checkbox">
										<input type="checkbox" name="optionsCheckboxList2" value="option2" />
										Messages
									</label>
									<label class="checkbox">
										<input type="checkbox" name="optionsCheckboxList3" value="option3" />
										Files
									</label>
									<p class="help-block">Shows pop-up notifications of new items.</p>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="input01">Notification Email</label>
								<div class="controls">
									<input type="text" class="input-xlarge" id="input01" value="john.smith@example.org" />
									<p class="help-block">Leave blank to use your profile email address.</p>
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="optionsCheckboxList">Super Admins</label>
								<div class="controls">
									<label class="checkbox">
										<input type="checkbox" name="optionsCheckboxList1" value="option1" checked="checked" />
										John Smith
									</label>
									<label class="checkbox">
										<input type="checkbox" name="optionsCheckboxList2" value="option2" />
										Jill Jackson
									</label>
									<label class="checkbox">
										<input type="checkbox" name="optionsCheckboxList3" value="option3" />
										Bill Kidman
									</label>
									<p class="help-block"><strong>Note:</strong> Super Admins get access to all projects.</p>
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