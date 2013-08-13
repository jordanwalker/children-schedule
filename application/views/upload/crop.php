<?php echo $html_head; ?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/Jcrop/css/jquery.Jcrop.min.css" />
<style type="text/css">
.jcrop-holder #preview-pane {
	display: block;
}
#preview-pane .preview-container {
	width: 260px;
	height: 202px;
	overflow: hidden;
}
</style>
<section class="container">
	<div class="row-fluid">
		<div class="jcrop-holder span12">
			<h1>Crop</h1>
			<div id="preview-pane">
				<div class="preview-container pull-right">
					<img id="target"  src="http://placehold.it/600x400"  />
				</div>
			</div>
		</div>
	</div>
	<form id="coords" class="coords" method="POST" action="<?php echo base_url(); ?>upload/crop/save_crop/">
		<input type="hidden" id="targetX" name="targetX" />
		<input type="hidden" id="targetY" name="targetY" />
		<input type="hidden" id="targetW" name="targetW" />
		<input type="hidden" id="targetH" name="targetH" />
		<input type="hidden" name="image_name" value="00ef1c4ee327778787800129ee7ec495.jpg"/>
		<input type="submit" class="ffb" value="CROP" />
	</form>
</section>


<script>var BASE_URL = "<?php echo base_url();?>";</script>
<!-- JavaScript -->
<?php foreach($script as $src): ?>
	<script src="<?php echo $src; ?>"></script>
<?php endforeach;  ?>
<script src="<?php echo base_url();?>assets/Jcrop/js/jquery.Jcrop.min.js"></script>
<script src="<?php echo base_url();?>assets/Jcrop/js/jquery.color.js"></script>
<script type="text/javascript">
$(document).ready(function () {
	var jcrop_api,
		boundx,
		boundy,
		$preview = $('#preview-pane'),
		$pcnt = $('#preview-pane .preview-container'),
		$pimg = $('#preview-pane .preview-container img'),
		xsize = $pcnt.width(),
		ysize = $pcnt.height();
		
	$('#target').Jcrop({
		onChange: updatePreview,
		onSelect: updatePreview,
		aspectRatio: xsize / ysize,
		bgOpacity: 0.5,
		bgColor: 'white',
		addClass: 'jcrop-light'
	},function(){
		api = this;
		api.setSelect([130,65,130+250,65+185]);
		api.setOptions({ bgFade: true });
		api.ui.selection.addClass('jcrop-selection');
		
		var bounds = this.getBounds();
		
		boundx = bounds[0];
		boundy = bounds[1];
		jcrop_api = this;
		$preview.append(jcrop_api.ui.holder);
	});

	function updatePreview(c)
	{
		if (parseInt(c.w) > 0)
		{
			var rx = xsize / c.w;
			var ry = ysize / c.h;

			$pimg.css({
				width: Math.round(rx * boundx) + 'px',
				height: Math.round(ry * boundy) + 'px',
				marginLeft: '-' + Math.round(rx * c.x) + 'px',
				marginTop: '-' + Math.round(ry * c.y) + 'px',
				display:'block',
				visibility:'visible'
			});
			
			var targetW = $("#target").css('width');
			var targetH = $("#target").css('height');
			var targetX = $("#target").css('margin-left');
			var targetY = $("#target").css('margin-top');
			
			$('#targetW').val(targetW);
			$('#targetH').val(targetH);
			$('#targetX').val(targetX);
			$('#targetY').val(targetY);
		}
	};
});
</script>
</body>
</html>