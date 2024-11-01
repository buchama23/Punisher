<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punisher</title>
    <link rel="stylesheet" href="family_page.css">
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
                <li><a href="../home_page/home_page.html">home</a></li>
                <li><a href="#">tvoje rodina</a></li>
                <li><a href="#">contact</a></li>
            </ul>
        </div>
        <div id="main">
            <div id="header"></div>
            <div id="content">
                <div class='family'><a href='#'></a></div>
                <div class='family'><a href='#'></a></div>
                <div class='family'><a href='#'></a></div>
                <div class='family'><a href='#'></a></div>
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
    <script src="family_page.js"></script>
</body>
</html>