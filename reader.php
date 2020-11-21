<?php
header('content-type: text/plain');
$file = "./usernames.txt";
$document = file_get_contents($file);
echo $document;

?>