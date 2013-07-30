<?php echo $html_head; ?>
<?php echo $nav_bar; ?>
<section class="container">
<h1><?php echo lang('create_user_heading');?></h1>
<p><?php echo lang('create_user_subheading');?></p>
<?php echo $message;?>
<?php echo form_open("auth/sign_up");?>
	<fieldset>
		<label><?php echo lang('create_user_fname_label', 'first_name');?></label>
		<?php echo form_input($first_name);?>
		<label><?php echo lang('create_user_lname_label', 'first_name');?></label>
		<?php echo form_input($last_name);?>
		<label><?php echo lang('create_user_company_label', 'company');?></label>
		<?php echo form_input($company);?>
		<label><?php echo lang('create_user_email_label', 'email');?></label>
		<?php echo form_input($email);?>
		<label><?php echo lang('create_user_phone_label', 'phone');?></label>
		<?php echo form_input($phone);?>
		<label><?php echo lang('create_user_password_label', 'password');?></label>
		<?php echo form_input($password);?>
		<label><?php echo lang('create_user_password_confirm_label', 'password_confirm');?></label>
		<?php echo form_input($password_confirm);?>
		<br/>
		<?php echo form_submit('submit', lang('create_user_submit_btn'), 'class="btn"');?>
  </fieldset>
<?php echo form_close();?>
</section>
<?php echo $html_close; ?>