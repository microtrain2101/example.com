<?php 
include '../../core/app_logic.php';

//Build the page metadata
$meta = [];
$meta['title'] = 'Pending Password Reset';
$meta['description'] = "MicroTrain2101 Pending Password Reset PHP";
$meta['keywords'] = "Pending Password Reset PHP, MicroTrain2101, password reset";

$content = <<<EOT
<main>
<form class="login-form" action="login.php" method="post" style="text-align: center;">
<p>
	We sent an email to help you recover your account. 
</p>
<p>Please login into your email account and click on the link we sent to reset your password</p>
</form>
</main>
EOT;

include '../../core/layout.php';