	<script>var BASE_URL = "<?php echo base_url();?>";</script>
	<!-- JavaScript -->
	<?php foreach($script as $src): ?>
		<script src="<?php echo $src; ?>"></script>
	<?php endforeach;  ?>
	</body>
</html>
