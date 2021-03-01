<?php
include '../../core/app_logic.php';
include '../../core/db_connect.php';
include 'messages.php';

//Build the page metadata
$meta = [];
$meta['title'] = "New password";
$meta['description'] = "MicroTrain2101 Enter Email";
$meta['keywords'] = "Enter Email, MicroTrain2101, Enter Email";

$content = <<<EOT
<h1>{$meta['title']}</h1>
<main>
<form class="login-form" action="new_password.php" method="post">
		<div class="form-group">
			<label>New password</label>
			<input type="password" name="new_pass">
		</div>
		<div class="form-group">
			<label>Confirm new password</label>
			<input type="password" name="new_pass_c">
		</div>
		<div class="form-group">
			<button type="submit" name="new_password" class="login-btn">Submit</button>
		</div>
	</form>
</main>

EOT;

include '../../core/layout.php';