<?php echo $html_head; ?>
<?php echo $nav_bar; ?>
<section class="container">
<h1><?php echo lang('login_heading');?></h1>
<p><?php echo lang('login_subheading');?></p>
<?php echo $message;?>
<?php echo form_open("auth/login");?>
  <fieldset>
    <label><?php echo lang('login_identity_label', 'identity');?></label>
    <?php echo form_input($identity);?>
	
	<label><?php echo lang('login_password_label', 'password');?></label>
    <?php echo form_input($password);?>
    
	<label class="checkbox">
	<?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
	<?php echo lang('login_remember_label', 'remember');?>
    </label>
    
	<?php echo form_submit('submit', lang('login_submit_btn'), 'class="btn"');?>
  </fieldset>
<?php echo form_close();?>
<p><a href="forgot_password"><?php echo lang('login_forgot_password');?></a></p>
</section>
<?php echo $html_close; ?>