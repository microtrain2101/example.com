<?php
include '../../core/db_connect.php';

$content=null;
$stmt = $pdo->query("SELECT * FROM users");

while ($row = $stmt->fetch())
{

    $content .= "<a href=\"view.php?id={$row['id']}\">{$row['first_name']}
    {$row['last_name']}</a>";
}

$content .= <<<EOT
<div class="form-group">
    <a href="add.php" class="btn btn-primary">New User</a>
</div>
EOT;

include '../../core/layout.php';
