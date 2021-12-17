<?php
$file_hash = uniqid();

date_default_timezone_set("UTC");
$file_name = md5('$file_hash'.time()).'_'.'shell.jpg';
echo $file_name;
?>