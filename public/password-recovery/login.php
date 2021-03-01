<?php
include '../../core/app_logic.php';
include '../../core/db_connect.php';

//Build the page metadata
$meta = [];
$meta['description'] = "MicroTrain2101 Password Recovery";
$meta['keywords'] = "Password Recovery, MicroTrain2101, password recovery";

$content=null;
$stmt = $pdo->query("SELECT * FROM users");

while ($row = $stmt->fetch())
{

    $content .= "<div><?php echo $user_id; ?></div>";
}

$content .= <<<EOT
<main>
	<form class="login-form" action="login.php" method="post">
		<h2 class="form-title">Login</h2>
		<!-- form validation messages -->
		<?php include('messages.php'); ?>
		<div class="form-group">
			<label>Email</label></br>
			<input type="text" name="email">
		</div>
		<div class="form-group">
			<label>Password</label></br>
			<input type="password" name="password">
		</div>
		<div class="form-group">
			<button type="submit" name="login_user" class="login-btn">Login</button>
		</div>
		<p><a href="enter_email.php">Forgot your password?</a></p>
	</form>
</main>
EOT;

include '../../core/layout.php';