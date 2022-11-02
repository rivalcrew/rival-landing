<?php

$error = array(
    'name' => form_error('name') ? 'is-invalid' : '',
    'email' => form_error('email') ? 'is-invalid' : '',
    'mobileNo' => form_error('obileNo') ? 'is-invalid' : '',
    'username' => form_error('username') ? 'is-invalid' : '',
    'password' => form_error('password') ? 'is-invalid' : '',
    'confirm_password' => form_error('confirm_password') ? 'is-invalid' : '',
);

$name = array('name' => 'name', 'class' => 'form-control ' . $error['name'], 'value' => set_value('name'), 'required' => 'required', 'placeholder' => 'Full Name');
$email = array('type' => 'email', 'name' => 'email', 'class' => 'form-control ' . $error['email'], 'value' => set_value('email'), 'required' => 'required', 'placeholder' => 'example@gmail.com');
$mobileNo = array('name' => 'mobileNo', 'class' => 'phone form-control ' . $error['mobileNo'], 'value' => set_value('mobileNo'), 'required' => 'required', 'placeholder' => '+6010-000 00000');
$username = array('name' => 'username', 'class' => 'form-control ' . $error['username'], 'value' => set_value('username'), 'required' => 'required', 'placeholder' => 'Username');
$password = array('type' => 'password', 'name' => 'password', 'value' => '', 'class' => 'form-control ' . $error['password'], 'required' => 'required', 'placeholder' => 'Password');
$confirm_password = array('type' => 'password', 'name' => 'confirm_password', 'value' => '', 'class' => 'form-control ' . $error['confirm_password'], 'required' => 'required', 'placeholder' => 'Confirm Password');

?>


<?= form_open(base_url('auth/register_form'), array(
    'class' => 'auth-form',
)) ?>

<!-- .form-group -->
<div class="form-group">
    <div class="form-label-group">
        <?= form_input($name) ?>
        <?= form_label('Full Name', 'name') ?>
        <div class="invalid-feedback"><?=form_error('name')?></div>
    </div>
</div><!-- /.form-group -->

<!-- .form-group -->
<div class="form-group">
    <div class="form-label-group">
        <?= form_input($email) ?>
        <?= form_label('Email', 'email') ?>
        <div class="invalid-feedback"><?=form_error('email')?></div>
    </div>
</div><!-- /.form-group -->

<!-- .form-group -->
<div class="form-group">
    <div class="form-label-group">
        <?= form_input($mobileNo) ?>
        <?= form_label('Mobile No', 'mobileNo') ?>
        <div class="invalid-feedback"><?=form_error('mobileNo')?></div>
    </div>
</div><!-- /.form-group -->

<hr>

<!-- .form-group -->
<div class="form-group">
    <div class="form-label-group">
        <?= form_input($username) ?>
        <?= form_label('Username', 'username') ?>
        <div class="invalid-feedback"><?=form_error('username')?></div>
    </div>
</div><!-- /.form-group -->

<div class="form-row">
    <!-- .form-group -->
    <div class="form-group col-6">
        <div class="form-label-group">
            <?= form_input($password) ?>
            <?= form_label('Password', 'password') ?>
            <div class="invalid-feedback"><?=form_error('password')?></div>
        </div>
    </div><!-- /.form-group -->
    <!-- .form-group -->
    <div class="form-group col-6">
        <div class="form-label-group">
            <?= form_input($confirm_password) ?>
            <?= form_label('Confirm Password', 'confirmPassword') ?>
            <div class="invalid-feedback"><?=form_error('confirm_password')?></div>
        </div>
    </div><!-- /.form-group -->
</div>

<!-- .form-group -->
<div class="form-group">
    <button class="btn btn-lg btn-dark btn-block" type="submit">Sign Up</button>
</div><!-- /.form-group -->
<!-- .form-group -->

<?= form_close(); ?>