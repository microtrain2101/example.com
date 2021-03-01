<?php
include '../../core/app_logic.php';
include '../../core/db_connect.php';


//Build the page metadata
$meta = [];
$meta['title'] = "Reset password";
$meta['description'] = "MicroTrain2101 Enter Email";
$meta['keywords'] = "Enter Email, MicroTrain2101, Enter Email";

$content=null;
include 'messages.php';

$content .= <<<EOT
<h1>{$meta['title']}</h1>
<main>
<form class="login-form" action="enter_email.php" method="post">
		<!-- form validation messages -->
		<?php include('messages.php'); ?>
		<div class="form-group">
			<label>Your email address</label>
			<input type="email" name="email">
		</div>
		<div class="form-group">
			<input type="submit" name="reset-password" class="btn btn-primary">
		</div>
	</form>
</main>

EOT;

include '../../core/layout.php';