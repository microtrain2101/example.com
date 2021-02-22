<?php
include '../../core/db_connect.php';
//Build the page metadata
$meta = [];
$meta['description'] = "MicroTrain2101 Posts";
$meta['keywords'] = "posts, MicroTrain2101, post";

$content=null;
$stmt = $pdo->query("SELECT * FROM posts");

while ($row = $stmt->fetch())
{

    $content .= "<a href=\"view.php?slug={$row['slug']}\">{$row['title']}</a>";
}

$content .= <<<EOT
<div class="form-group">
    <a href="add.php" class="btn btn-primary">New Post</a>
</div>
EOT;

include '../../core/layout.php';
