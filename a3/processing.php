<?php
function preShow( $arr, $returnAsString=false ) {
    $ret = '<pre>' . print_r($arr, true) . '</pre>';
    if ($returnAsString)
    return $ret;
    else
    echo $ret;
    }

$file = fopen("products.csv", "r");
flock($file, LOCK_SH);
if (($headings = fgetcsv($file, 0, "\t")) !== false) {
    while ($cells = fgetcsv($file, 0, "\t")) {
        for ($i = 1;$i<count($cells); $i++) {
            $products[$cells[0]][$headings[$i]][]=$cells[$i];
        }
    }
}
preShow($products);
fclose($file);
flock(LOCK_UN);
