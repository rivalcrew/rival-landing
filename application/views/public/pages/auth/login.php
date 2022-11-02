<?php

$error = array(
    'username' =>  form_error('username') ? 'is-invalid' : '',
    'password' =>  form_error('password') ? 'is-invalid' : '',
);

$username = array('name' => 'username', 'class' => 'form-control ' . $error['username'], 'value' => set_value('username'), 'required' => 'required', 'placeholder' => 'Username');
$password = array('type' => 'password', 'name' => 'password', 'value' => '', 'class' => 'form-control ' . $error['password'], 'required' => 'required', 'placeholder' => 'Password');

?>

<?= form_open(base_url('auth/login_form'), array(
    'class' => 'auth-form',
)) ?>

<!-- .form-group -->
<div class="form-group">
    <div class="form-label-group">
        <?= form_input($username) ?>
        <?= form_label('Username', 'username') ?>
        <div class="invalid-feedback"><?=form_error('username')?></div>
    </div>
</div><!-- /.form-group -->
<!-- .form-group -->
<div class="form-group">
    <div class="form-label-group">
        <?= form_input($password) ?>
        <?= form_label('Password', 'password') ?>
        <div class="invalid-feedback"><?=form_error('password')?></div>
    </div>
</div><!-- /.form-group -->
<!-- .form-group -->
<div class="form-group">
    <button class="btn btn-lg btn-dark btn-block" type="submit">Sign In</button>
</div><!-- /.form-group -->
<!-- .form-group -->

<?= form_close(); ?>