<?php echo $html_head; ?>
<div class="container">
	<div class="row-fluid">
		<section class="row-fluid">
			<div class="span3">
				<img id="company_logo_thumb" class="thumbnail" src="http://placehold.it/150x150" />
				<hr/>
				<?php echo anchor('#myModal','Upload logo','role="button" class="btn btn-success" data-toggle="modal"'); ?>
				<p><small>(PNG or JPG &amp; max 1 MB)</small></p>
			</div>
			
			<!-- Modal -->
			<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			  	<div class="modal-header">
			    	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
			    	<h3 id="myModalLabel">Upload company logo.</h3>
			  	</div>
			  	<div class="modal-body">
			        <span class="btn btn-success fileinput-button">
				        <i class="icon-plus icon-white"></i>
				        <span>Add files&hellip;</span>
				        <input id="fileupload" type="file" name="userfile" multiple>
				    </span>
			    	<br/>
			    	<br/>
			        <div id="progress" class="progress progress-success progress-striped">
				        <div class="bar"></div>
				    </div>
				    <div id="files"></div>
			    </div>
			  	<div class="modal-footer">
			    	<a class="btn" data-dismiss="modal" aria-hidden="true">Close</a>
			    </div>
			</div>
			
		</section>
    </div><!-- row-fluid -->
    </div> <!-- /container -->
    
    
    <script>var BASE_URL = "<?php echo base_url();?>";</script>
	<!-- JavaScript -->
	<?php foreach($script as $src): ?>
		<script src="<?php echo $src; ?>"></script>
	<?php endforeach;  ?>
	
	<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
	<script src="<?php echo base_url(); ?>assets/jQuery-File-Upload/js/vendor/jquery.ui.widget.js"></script>

	<!-- The Load Image plugin is included for the preview images and image resizing functionality -->
	<script>
	(function(e){"use strict";var t=function(e,a,n){var r,i,c=document.createElement("img");if(c.onerror=a,c.onload=function(){!i||n&&n.noRevoke||t.revokeObjectURL(i),a&&a(t.scale(c,n))},t.isInstanceOf("Blob",e)||t.isInstanceOf("File",e))r=i=t.createObjectURL(e),c._type=e.type;else{if("string"!=typeof e)return!1;r=e,n&&n.crossOrigin&&(c.crossOrigin=n.crossOrigin)}return r?(c.src=r,c):t.readFile(e,function(e){var t=e.target;t&&t.result?c.src=t.result:a&&a(e)})},a=window.createObjectURL&&window||window.URL&&URL.revokeObjectURL&&URL||window.webkitURL&&webkitURL;t.isInstanceOf=function(e,t){return Object.prototype.toString.call(t)==="[object "+e+"]"},t.detectSubsampling=function(e){var t,a;return e.width*e.height>1048576?(t=document.createElement("canvas"),t.width=t.height=1,a=t.getContext("2d"),a.drawImage(e,-e.width+1,0),0===a.getImageData(0,0,1,1).data[3]):!1},t.detectVerticalSquash=function(e,t){var a,n,r,i,c,o=document.createElement("canvas"),d=o.getContext("2d");for(o.width=1,o.height=t,d.drawImage(e,0,0),a=d.getImageData(0,0,1,t).data,n=0,r=t,i=t;i>n;)c=a[4*(i-1)+3],0===c?r=i:n=i,i=r+n>>1;return i/t||1},t.renderImageToCanvas=function(e,a,n,r,i,c,o,d,g,s){var h,u,l,m=e.getContext("2d"),f=document.createElement("canvas"),w=f.width=f.height=1024,v=f.getContext("2d");for(m.save(),t.detectSubsampling(a)&&(i/=2,c/=2),h=t.detectVerticalSquash(a,c),g=Math.ceil(w*g/i),s=Math.ceil(w*s/c/h),d=0,l=0;c>l;){for(o=0,u=0;i>u;)v.clearRect(0,0,w,w),v.drawImage(a,n,r,i,c,-u,-l,i,c),m.drawImage(f,0,0,w,w,o,d,g,s),u+=w,o+=g;l+=w,d+=s}m.restore()},t.scale=function(e,a){a=a||{};var n,r,i,c=document.createElement("canvas"),o=e.getContext||(a.canvas||a.crop)&&c.getContext,d=e.width,g=e.height,s=a.maxWidth,h=a.maxHeight,u=d,l=g,m=0,f=0,w=0,v=0;return o&&s&&h&&a.crop?(n=s,r=h,s/h>d/g?(l=h*d/s,f=(g-l)/2):(u=s*g/h,m=(d-u)/2)):(n=d,r=g,i=Math.max((a.minWidth||n)/n,(a.minHeight||r)/r),i>1&&(n=Math.ceil(n*i),r=Math.ceil(r*i)),i=Math.min((s||n)/n,(h||r)/r),1>i&&(n=Math.ceil(n*i),r=Math.ceil(r*i))),o?(c.width=n,c.height=r,"image/jpeg"===e._type?t.renderImageToCanvas(c,e,m,f,u,l,w,v,n,r):c.getContext("2d").drawImage(e,m,f,u,l,w,v,n,r),c):(e.width=n,e.height=r,e)},t.createObjectURL=function(e){return a?a.createObjectURL(e):!1},t.revokeObjectURL=function(e){return a?a.revokeObjectURL(e):!1},t.readFile=function(e,t){if(window.FileReader&&FileReader.prototype.readAsDataURL){var a=new FileReader;return a.onload=a.onerror=t,a.readAsDataURL(e),a}return!1},"function"==typeof define&&define.amd?define(function(){return t}):e.loadImage=t})(this);
	</script>
	<!-- The Canvas to Blob plugin is included for image resizing functionality -->
	<script>
	(function(a){"use strict";var b=a.HTMLCanvasElement&&a.HTMLCanvasElement.prototype,c=a.Blob&&function(){try{return Boolean(new Blob)}catch(a){return!1}}(),d=c&&a.Uint8Array&&function(){try{return(new Blob([new Uint8Array(100)])).size===100}catch(a){return!1}}(),e=a.BlobBuilder||a.WebKitBlobBuilder||a.MozBlobBuilder||a.MSBlobBuilder,f=(c||e)&&a.atob&&a.ArrayBuffer&&a.Uint8Array&&function(a){var b,f,g,h,i,j;a.split(",")[0].indexOf("base64")>=0?b=atob(a.split(",")[1]):b=decodeURIComponent(a.split(",")[1]),f=new ArrayBuffer(b.length),g=new Uint8Array(f);for(h=0;h<b.length;h+=1)g[h]=b.charCodeAt(h);return i=a.split(",")[0].split(":")[1].split(";")[0],c?new Blob([d?g:f],{type:i}):(j=new e,j.append(f),j.getBlob(i))};a.HTMLCanvasElement&&!b.toBlob&&(b.mozGetAsFile?b.toBlob=function(a,c,d){d&&b.toDataURL&&f?a(f(this.toDataURL(c,d))):a(this.mozGetAsFile("blob",c))}:b.toDataURL&&f&&(b.toBlob=function(a,b,c){a(f(this.toDataURL(b,c)))})),typeof define=="function"&&define.amd?define(function(){return f}):a.dataURLtoBlob=f})(this);
	</script>
	<!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
	<script src="<?php echo base_url(); ?>assets/jQuery-File-Upload/js/jquery.iframe-transport.js"></script>
	<!-- The basic File Upload plugin -->
	<script src="<?php echo base_url(); ?>assets/jQuery-File-Upload/js/jquery.fileupload.js"></script>
	<!-- The File Upload processing plugin -->
	<script src="<?php echo base_url(); ?>assets/jQuery-File-Upload/js/jquery.fileupload-process.js"></script>
	<!-- The File Upload image resize plugin -->
	<script src="<?php echo base_url(); ?>assets/jQuery-File-Upload/js/jquery.fileupload-resize.js"></script>
	<!-- The File Upload validation plugin -->
	<script src="<?php echo base_url(); ?>assets/jQuery-File-Upload/js/jquery.fileupload-validate.js"></script>
	<script>
	/*
* global window  
	*/
	$(function () {
	    // Change this to the location of your server-side upload handler:
	    var url = '<?php echo base_url(); ?>upload/welcome/do_upload/',
	        uploadButton = $('<a/>')
	            .addClass('btn')
	            .prop('disabled', true)
	            .text('Processing...')
	            .on('click', function () {
	                var $this = $(this),
	                    data = $this.data();
	                $this
	                    .off('click')
	                    .text('Abort')
	                    .on('click', function () {
	                        $this.remove();
	                        data.abort();
	                    });
	                data.submit().always(function () {
	                    $this.remove();
	                });
	            });
	    $('#fileupload').fileupload({
	        url: url,
	        dataType: 'json',
	        autoUpload: false,
	        acceptFileTypes: /(\.|\/)(gif|jpe?g|png)$/i,
	        maxFileSize: 5000000, // 5 MB
	        loadImageMaxFileSize: 15000000, // 15MB
	        disableImageResize: false,
	        previewMaxWidth: 100,
	        previewMaxHeight: 100,
	        previewCrop: true
	    }).on('fileuploadadd', function (e, data) {
	        data.context = $('<div/>').appendTo('#files');
	        $.each(data.files, function (index, file) {
	            var node = $('<p/>')
	                    .append($('<span/>').text(file.name));
	            if (!index) {
	                node
	                    .append('<br>')
	                    .append(uploadButton.clone(true).data(data));
	            }
	            node.appendTo(data.context);
	        });
	    }).on('fileuploadprocessalways', function (e, data) {
	        var index = data.index,
	            file = data.files[index],
	            node = $(data.context.children()[index]);
	        if (file.preview) {
	            node
	                .prepend('<br>')
	                .prepend(file.preview);
	        }
	        if (file.error) {
	            node
	                .append('<br>')
	                .append(file.error);
	        }
	        if (index + 1 === data.files.length) {
	            data.context.find('a')
	                .text('Upload')
	                .prop('disabled', !!data.files.error);
	        }
	    }).on('fileuploadprogressall', function (e, data) {
	        var progress = parseInt(data.loaded / data.total * 100, 10);
	        $('#progress .bar').css(
	            'width',
	            progress + '%'
	        );
	    }).on('fileuploaddone', function (e, data) {
	        $.each(data.result, function (index, file) {
				   var link = $('<a>')
	                .attr('target', '_blank')
	                .prop('href', file.url);
	            $(data.context.children()[index])
	                .wrap(link);
	        });
		}).on('fileuploadfail', function (e, data) {
	        $.each(data.result.files, function (index, file) {
	            var error = $('<span/>').text(file.error);
	            $(data.context.children()[index])
	                .append('<br>')
	                .append(error);
	        });
	    });
	});
	</script>
	</body>
</html>