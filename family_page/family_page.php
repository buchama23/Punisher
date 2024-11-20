<?php

    include_once("../lib/auto.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punisher</title>
    <link rel="stylesheet" href="family_page.css">
    <link rel="stylesheet" href="../lib/slide_menu_css.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="family_page.js"></script>
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
                <li><a href="../home_page.php">home</a></li>
                <li><a href="#">tvoje rodina</a></li>
                <li><a href="#">contact</a></li>
            </ul>
        </div>
        <div id="main">
            <div id="header"></div>
            <div id="content">
                
                <?php
                    if(!isset($_SESSION["user_ID"]) or empty($_SESSION["user_ID"])) {
                        echo "<div class='login_div'><div class='login'><a href='../login_sign_in/form_login_register.php'>Přihlásit se</a></div></div>";
                    } elseif(isset($_SESSION["user_ID"]) AND !empty($_SESSION["user_ID"]) AND is_numeric($_SESSION["user_ID"])){
                        $user_ID = $_SESSION["user_ID"];
                        $data_for_insert = [':user_ID' => $user_ID];
                        $sql = "SELECT * FROM punisher_family_meta WHERE user_ID = :user_ID";
                        $con = $db->prepare($sql);
                        $con->execute($data_for_insert);
                        $data = $con->fetchAll(PDO::FETCH_ASSOC);

                        foreach($data as $key => $value){
                            echo "<div class='family'><a href='your_family_page/your_family_page_php.php'></a>";

                            echo "</div>";
                        }
                    
                ?>
                <div class="add_family">
                    <span></span>
                    <span></span>
                </div>
                <?php    }   ?>
            </div>
            <div id="footer"></div>
        </div>
        <div class="add_family_div">
            <div class="add_family_link"><a href="add_family/add_family_form.php">Vytvořit rodinu</a></div>
            <div class="join_family_link"><a href=""></a>Přidat se do rodiny</div>
        </div>
    </div>   
</body>
</html>
