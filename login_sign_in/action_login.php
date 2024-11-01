<?php

    include_once("../lib/auto.php");

    //echo $_SESSION["user_ID"];

    

    $c = 0;

    $is_surname = 0;
    $is_nickname_login = 0;


    if(isset($_POST["nickname_login"]) and !empty($_POST["nickname_login"])) {
        $nickname_login = $_POST["nickname_login"];
        $is_nickname_login++;
        $c++;
    } else {
        $_SESSION["error_nickname_login"]["nothing"] = "nevyplněné pole";
    }

    if(isset($_POST["password_login"]) and !empty($_POST["password_login"]) and $is_nickname_login == 1) {
        $password_login = $_POST["password_login"];
        if (password_checker($password_login)) {
            $password = pass_hash_salt($password_login, $nickname_login);
            $c++;
        } else {
            $_SESSION["error_password_login"]["wrong_pass"] = "spatne heslo";
        } 
    } else {
        $_SESSION["error_password_login"]["nothing"] = "nezadaný password";
    }

    if($c == count($_POST)) {
        //$_SESSION["ales"]["gute"] = "vše v pořádku";
        //header("location: form_register.php");
        //echo 1;

        $data = [
            ":nickname" => $nickname_login,
            ":password" => $password
        ];
    
        $sql = "SELECT * FROM punisher_user WHERE nickname = :nickname AND password = :password";
        $con = $db->prepare($sql);
        $con->execute($data);
        $data = $con->fetchALL(PDO::FETCH_ASSOC);

        //echo $nickname . "<br>";
        //echo $password . "<br>";
        echo count($data);
        var_dump($data);
        if(count($data) == 1) {
            //var_dump($data);
            $_SESSION["user_ID"] = $data[0]["user_ID"];
            //$_SESSION["user_level"] = access_control($_SESSION["user_ID"]);

            /*if ($_SESSION["user_level"] == 1) {
                header("location: ../../front_end/main_page.php");
            } else {
                header("location: ../../admin/main_admin_page.php");
            }*/
        }
    } else {
        echo "kokot";

        //header("location: form_login_register.html");
    }
    //header("location: form_login_register.html"); //zakomentovat jako zkousku, je az po konci ukonceni programu
        

?>