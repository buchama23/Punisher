<?php

    include_once("../lib/auto.php");

    //var_dump($_POST);


    $c = 0;

    $is_name_digit = 0;
    $is_name_preg = 0;
    $is_name_upper = 0;

    $is_surname = 0;
    $is_nickname = 0;
    $is_parent_child = 0;

    $c += detect_name_surname("name")[0];
    $is_name_digit = detect_name_surname("name")[1];
    $is_name_upper = detect_name_surname("name")[2];
    $is_name_preg = detect_name_surname("name")[3];
    $name = detect_name_surname("name")[4];

    $c += detect_name_surname("surname")[0];
    $is_surname_digit = detect_name_surname("surname")[1];
    $is_surname_upper = detect_name_surname("surname")[2];
    $is_surname_preg = detect_name_surname("surname")[3];
    $surname = detect_name_surname("surname")[4];


    if(isset($_POST["nickname"]) and !empty($_POST["nickname"])) {
        if(different_email($_POST["nickname"]) == 1) {
        $nickname = $_POST["nickname"];
        $is_nickname++;
        $c++;
        } else {
            $_SESSION["error_nickname"]["already_is"] = "nickname už existuje";
            echo "spatne nickname";

        }
    } else {
        $_SESSION["error_nickname"]["nothing"] = "nevyplněné pole";
    }

    if(isset($_POST["password_1"]) and !empty($_POST["password_1"]) and $_POST["password_2"] === $_POST["password_1"] and $is_nickname == 1) {
        $password_1 = $_POST["password_1"];
        if (password_checker($password_1)) {
            $password = pass_hash_salt($password_1, $nickname);
            $c++;
        }
    } else {
        $_SESSION["error_password_1"]["nothing"] = "nezadaný password_1";
    }

    if(isset($_POST["password_2"]) and !empty($_POST["password_2"]) and $_POST["password_2"] === $_POST["password_1"]) {
        
        $password_2 = $_POST["password_2"];
        $c++;
    } else {
        $_SESSION["error_password_2"]["nothing"] = "nezadaný password_2";

    }

    if ($c == count($_POST)) {

        $_SESSION["ales"]["gute"] = "vše v pořádku";
        //header("location: form_register.php");

        $data = [
            ":name" => $name,
            ":surname" => $surname,
            ":nickname" => $nickname,
            ":parent_child" => "parent",
            ":password" => $password
        ];

        $sql = "INSERT INTO punisher_user (user_ID, name, surname, nickname, parent_child, password) VALUES (null, :name, :surname, :nickname, :parent_child, :password)";
        $con = $db->prepare($sql);
        $con->execute($data);
        $data = $con->fetchALL(PDO::FETCH_ASSOC);

        var_dump($data);

    } else {
        if (($is_name_upper == 1) and ($is_name_digit == 0) and ($is_name_preg == 0)) {
            $_SESSION["value"]["name"] = $name;
            
        }
        if (($is_surname_upper == 1) and ($is_surname_digit == 0) and ($is_surname_preg == 0)) {
            $_SESSION["value"]["surname"] = $surname;

        }
        if ($is_nickname == 1) {
            $_SESSION["value"]["nickname"] = $nickname;

        }
    }

    header("location: form_login_register.php#"); //zakomentovat jako zkousku, je az po konci ukonceni programu
    

?>