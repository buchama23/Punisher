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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="family_page.js"></script>
    <script src="../slide_menu/slide_menu.js"></script>
</head>
<body>
    <div id="center">
        <div id="main">
            <div id="header"></div>
            <div id="content">
                <div class='family'><a href='#'></a></div>
                <div class='family'><a href='#'></a></div>
                <div class='family'><a href='#'></a></div>
                <div class='family'><a href='#'></a></div>
                <?php
                    /*
                    $sql = "SELECT * FROM ";
                    $con = $db->prepare($sql);
                    $con->execute();
                    $data = $con->fetchAll(PDO::FETCH_ASSOC);

                    foreach($data as $key => $value){
                        echo "<div class='family'><a href='#'></a>";

                        echo "</div>";
                    }
                    */
                ?>
                <div class="add_family">
                    <a href="add_family/add_family_form.php">
                        <span></span>
                        <span></span>
                    </a>
                </div>
            </div>
            <div id="footer"></div>
        </div>
    </div>   
</body>
</html>
