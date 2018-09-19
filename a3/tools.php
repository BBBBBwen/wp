<?php
function top_module($pageTitle) {
$html = <<<"OUTPUT" <!DOCTYPE html>
    <html lang='en'>

    <head>
        <meta charset="utf-8">
        <title>$pageTitle</title>

        <!-- Keep wireframe.css for debugging, add your css to style.css -->
        <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
        <link id='stylecss' type="text/css" rel="stylesheet" href="css/style.css">
        <script src='../wireframe.js'></script>
    </head>

    OUTPUT;
    echo $html;
    }
    ?>