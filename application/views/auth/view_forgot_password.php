<?php echo $html_head; ?>
<?php echo $nav_bar; ?>
<section class="container">
<h1><?php echo lang('forgot_password_heading');?></h1>
<p><?php echo sprintf(lang('forgot_password_subheading'), $identity_label);?></p>
<div><?php echo $message;?></div>
<?php echo form_open("auth/forgot_password");?>
  <fieldset>
	<label for="email"><?php echo sprintf(lang('forgot_password_email_label'), $identity_label);?></label> 
	<?php echo form_input($email);?>
    <br/>
	<?php echo form_submit('submit', lang('forgot_password_submit_btn'), 'class="btn"');?>
  </fieldset>
<?php echo form_close();?>
</section>
<?php echo $html_close; ?>