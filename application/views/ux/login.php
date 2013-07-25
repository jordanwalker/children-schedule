<?php echo $html_head; ?>
		<div id="login-page" class="container">
			<h1>Akira Login</h1>
			<form id="login-form" class="well" action="<?php echo base_url();?>ux/">
			<input type="text" class="span2" placeholder="Email" /><br />
			<input type="password" class="span2" placeholder="Password" /><br />
			<label class="checkbox"> <input type="checkbox" /> Remember me </label>
			<button type="submit" class="btn btn-primary">Sign in</button>
			<button type="submit" class="btn">Forgot Password</button>
		</form>	
		</div>
<?php echo $html_close; ?>