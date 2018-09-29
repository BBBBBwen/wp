<?php
$file = fopen("account.csv", "r");
flock($file, LOCK_SH);
$records;
if (($headings = fgetcsv($file)) !== false) {
    while ($cells = fgetcsv($file)) {
        for ($i = 0;$i<count($cells); $i++) {
            $records[$cells[0]][$headings[$i]]=$cells[$i];
        }
    }
}
print_r($records, true);
flock($file, LOCK_UN);
fclose($file);
    if ($_POST["email"] == $records[$_POST["email"]]["email"] && $_POST["password"] == $records[$_POST["email"]]["password"]) {
        if (isset($_SESSION["user"])) {
            unset($_SESSION["user"]);
        } elseif (!empty($_POST["email"])) {
            $_SESSION["user"]["email"] = htmlentities($_POST["email"], ENT_QUOTES);
            $_SESSION["user"]["loged"] = 1;
        }
        header("Location: ".$_SERVER["HTTP_REFERER"]);
    } else {
        header("Location: index.php");
    };
