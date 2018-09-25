<?php
$file = fopen("account.txt", "a");
flock($file, LOCK_EX);
fwrite($file, implode("|", $_POST)."\n");
flock($file, LOCK_UN);
fclose($file);
