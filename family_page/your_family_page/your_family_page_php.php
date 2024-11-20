<?php

    include_once("../../db.php");
    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="your_family_page_css.css">
    <script src="your_family_page_js.js"></script>
</head>
<body>
    <div id="center">
        <nav class="open_menu">
            <span></span>
            <span></span>
            <span></span>
        </nav>
        <div class="menu">
            <ul>
                <div class="menu_rozdelovac"></div>
                <li><a href="../../home_page.php">home</a></li>
                <li><a href="../family_page.php">tvoje rodina</a></li>
                <li><a href="#">contact</a></li>
            </ul>
        </div>
        <div id="main">
            <div id="header">
            </div>
            <div id="midle">
                <div id="side"></div>
                <div id="content"></div>
            </div>
            <div id="footer"></div>
        </div>
    </div>
</body>
</html>
