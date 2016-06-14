<?php if($this->session->userdata('logged_in')): ?>

<?php echo "logout"; ?>

<?php else: ?>

<h2>Login form</h2>



<?php $attributes = array('id'=>'login_form', 'class'=>'form_horizontal'); ?>

<?php if($this->session->flashdata('errors')): ?>

<?php echo $this->session->flashdata('errors'); ?>

<?php endif; ?>


<?php echo form_open('users/login', $attributes); ?>

<div class="form-group">

<?php echo form_label('Username'); ?>

<?php
$data = array(
	'class'=> 'form_control',
	'name'=> 'username',
	'placeholder'=> 'Enter Username'
); ?>

<?php echo form_input($data); ?>

</div>

<div class="form-group">


<?php echo form_label('Password'); ?>
<?php
	$data = array(
	'class'=> 'form_control',
	'name'=> 'password',
	'placeholder'=> 'Enter Password'
); ?>

<?php echo form_password($data); ?>

</div>

<div class="form-group">


<?php echo form_label('Confirm Password'); ?>
<?php
	$data = array(
	'class'=> 'form_control',
	'name'=> 'confirm_password',
	'placeholder'=> 'Confirm Password'
); ?>

<?php echo form_password($data); ?>

</div>

<div class="form-group">

<?php
	$data = array(
	'class' => 'btn btn-primary',
	'name' => 'Submit',
	'value' => 'Login'
); ?>

<?php echo form_submit($data); ?>

</div>

<?php echo form_close(); ?>



<?php endif; ?>