<?php
session_start();
$_SESSION["cart"]["id"] = $_POST["id"];
        $_SESSION["cart"]["option"] = $_POST["option"];
        $_SESSION["cart"]["qty"] = $_POST["qty"];
function preShow($arr, $returnAsString=false)
{
    $ret = '<pre>' . print_r($arr, true) . '</pre>';
    if ($returnAsString) {
        return $ret;
    } else {
        echo $ret;
    }
}

$arr[] = $_SESSION['cart'];
preShow($arr);
