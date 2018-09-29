<?php
$file = fopen("account.csv", "a");
flock($file, LOCK_EX);
    fputcsv($file, $_POST);
flock($file, LOCK_UN);
fclose($file);
?>