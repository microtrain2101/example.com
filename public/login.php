<?php
require '../core/bootstrap.php';
// 1. Connect to the database
require '../core/db_connect.php';

// 2. Filter the user inputs
$input = filter_input_array(INPUT_POST,[
    'email'=>FILTER_SANITIZE_EMAIL,
    'password'=>FILTER_UNSAFE_RAW
]);

// 3. Check for a POST request
if(!empty($input)){

    // 4. Query the database for the requested user
    $input = array_map('trim', $input);
    $sql='SELECT id, hash FROM users WHERE email=:email';
    $stmt=$pdo->prepare($sql);
    $stmt->execute([
        'email'=>$input['email']
    ]);
    $row=$stmt->fetch();

    if($row){
        // 5. Attempt a password match
        $match = password_verify($input['password'], $row['hash']);
        if($match){
            // 6.1 Set a session
            $_SESSION['user'] = [];
            $_SESSION['user']['id']=$row['id'];

            // 6.2 Redirect the user
            header('LOCATION: ' . $_POST['goto']);
        }
    }
}
$meta=[];
$meta['title']="Login";

$content=<<<EOT
<!-- 3 Add page title -->
<h1>{$meta['title']}</h1>

<form method="post" autocomplete="off">

    <!-- 1.1 Add email -->
    <!-- 2 Add bootstrap classes -->
    <div class="form-group">
        <label for="email">Email</label>
        <input 
            class="form-control"
            id="email"
            name="email"
            type="email"
        >
    </div>

    <!-- 1.2 Add password -->
    <!-- 3 Add bootstrap classes -->
    <div class="form-group">
        <label for="password">Password</label>
        <input 
            class="form-control" 
            id="password" 
            name="password" 
            type="password"
        >
    </div>

    // <input name="goto" value="{$goto}" type="hidden">
    <input type="submit" class="btn btn-primary">

</form>
EOT;

require '../core/layout.php';
