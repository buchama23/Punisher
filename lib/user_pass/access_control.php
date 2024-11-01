<?php
    //include_once "../auto.php";
    //$_SESSION["user_ID"] = 1; //tohle je jen pro kontrolu zda to funguje

    /*if (isset($_SESSION["user_ID"]) and !empty($_SESSION["user_ID"])) {
        $_SESSION["user_level"] = access_control($_SESSION["user_ID"]);
        //echo $_SESSION["user_level"];

    }*/
    //echo $_SESSION["user_ID"];

    function access_control($session_user_ID) {
        global $db;

        $ins = [
            ":user_ID" => $session_user_ID
        ];

        $sql = "SELECT * FROM cms_user WHERE user_ID = :user_ID";
        $con = $db->prepare($sql);
        $con->execute($ins);
        $data = $con->fetchALL(PDO::FETCH_ASSOC);

        $user_level = $data[0]["user_level"];
        
        return $user_level;
    }

    function different_email($nickname) {
        global $db;

        $ins = [
            ":nickname" => $nickname
        ];

        $sql = "SELECT * FROM punisher_user WHERE nickname = :nickname";
        $con = $db->prepare($sql);
        $con->execute($ins);
        $data = $con->fetchALL(PDO::FETCH_ASSOC);

        if (count($data) == 0) {
            return 1;
        } else {
            return 0;
        }
        
    }
    








?>