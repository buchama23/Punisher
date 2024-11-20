<?php
    include_once "lib/auto.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punisher</title>
    <link rel="stylesheet" href="home_page_css/home_page.css">
    <link rel="stylesheet" href="lib/slide_menu_css.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="home_page_css/home_page.js"></script>
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
                <li><a href="#">home</a></li>
                <li><a href="family_page/family_page.php">tvoje rodina</a></li>
                <li><a href="#">contact</a></li>
            </ul>
        </div>
        <div id="main">
            <div id="header">
                <a class="login_a" href="login_sign_in/form_login_register.php">Log in</a>
            </div>
            <div id="content"></div>
            <div id="footer"></div>
        </div>
    </div>
</body>
</html>