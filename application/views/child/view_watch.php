<?php echo $html_head; ?>
	<section class="container">
		<?php echo $nav_bar; ?>
		<div class="row">
			<div class="span3">
				<?php echo $nav_aside; ?>
			</div>
			<div class="span9">
				<h1>Child | Watch</h1>
				<form id="edit-profile" class="form-horizontal">
					<fieldset>
						<legend>What should we be concerned with SAMPLE?</legend>
						
						<!-- signs or symptoms -->
						<div class="control-group">
							<label class="control-label" for="txta_">Signs or Symptoms</label>
							<div class="controls">
								<textarea class="span4" id="txta_" rows="4"></textarea>
							</div>
						</div>
				
						<!--  Allergies -->
						<div class="control-group">
							<label class="control-label" for="txta_">Allergies</label>
							<div class="controls">
								<textarea class="span4" id="txta_" rows="4"></textarea>
							</div>
						</div>
						
						<!-- Medication -->
						<div class="control-group">
							<label class="control-label" for="txta_">Medication</label>
							<div class="controls">
								<textarea class="span4" id="txta_" rows="4"></textarea>
							</div>
						</div>
						
						<!-- Past History  -->
						<div class="control-group">
							<label class="control-label" for="txta_">Pertinent history</label>
							<div class="controls">
								<textarea class="span4" id="txta_" rows="4"></textarea>
							</div>
						</div>
						
						<!-- Last oral intake -->
						<div class="control-group">
							<label class="control-label" for="txta_">Last oral intake</label>
							<div class="controls">
								<textarea class="span4" id="txta_" rows="4"></textarea>
							</div>
						</div>
						
						<!-- Events -->
						<div class="control-group">
							<label class="control-label" for="txta_">Events lead up</label>
							<div class="controls">
								<textarea class="span4" id="txta_" rows="4"></textarea>
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
