<?php
require '../core/bootstrap.php';

//Build the page metadata
$meta = [];
$meta['description'] = "Thank you MicroTrain2101 For Web Development";
$meta['keywords'] = "Thanks, MicroTrain2101, Web development, web development";


$content = <<<EOT
  <main>
    Thank you for Contacting MicroTrain2101. We will get back to you shortly.
  </main>
EOT;

include '../core/layout.php';