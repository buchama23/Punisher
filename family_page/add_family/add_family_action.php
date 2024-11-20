<?php

    session_start();
    include_once("../../db.php");


    //echo $_SESSION["user_ID"];



    $c = 0;
    $d = 0;

    $is_name_family = 0;
    $is_comment_family= 0;


    if(isset($_POST["name_family"]) and !empty($_POST["name_family"])) {
        $name_family = $_POST["name_family"];
        $is_name_family++;
        $c++;
    } else {
        $_SESSION["error_name_family"]["nothing"] = "nevyplněné pole";
    }

    if(isset($_POST["comment_family"]) and !empty($_POST["comment_family"]) and $is_name_family == 1) {
        $comment_family = $_POST["comment_family"];
        $c++;
    } else {
        $_SESSION["error_password_login"]["nothing"] = "nezadaný password";
    }

    // -----------------------------------------------------------------------------------------------------------------

    if($c == count($_POST)) {
        $bytes = random_bytes(3);
        $code = bin2hex($bytes);

        $data_kontrola = [
            ":name" => $name_family,
            ":comment" => $comment_family,
            ":code" => $code
        ];
    
        $sql_kontrola = "SELECT * FROM punisher_family WHERE name = :name AND comment = :comment AND code = :code";
        $con_kontrola = $db->prepare($sql_kontrola);
        $con_kontrola->execute($data_kontrola);
        $data_kontrola = $con_kontrola->fetchALL(PDO::FETCH_ASSOC);

        if(count($data_kontrola) == 0) {
            $d++;
            $data = [
                ":name" => $name_family,
                ":comment" => $comment_family,
                ":code" => $code
            ];
    
            $sql = "INSERT INTO punisher_family (name, comment, code) VALUES (:name, :comment, :code)";
            $con = $db->prepare($sql);
            $con->execute($data);
            $data = $con->fetchALL(PDO::FETCH_ASSOC);
        } else {
            echo "kokot1";
        }

    } else {
        echo "kokot2";
    }
    //--------------------------------------------------------------------------------------------------------------------

    if($c == count($_POST)) {
        $data_family = [
            ":name" => $name_family,
            ":comment" => $comment_family
        ];
    
        $sql_family = "SELECT * FROM punisher_family WHERE name = :name AND comment = :comment";
        $con_family = $db->prepare($sql_family);
        $con_family->execute($data_family);
        $data_family = $con_family->fetchALL(PDO::FETCH_ASSOC);

        if(count($data_family) == 1) {
            $family_ID = $data_family[0]["family_ID"];
            $d++;
        } else {
            echo "kokot3";
            header("location: add_family_form.php");
        }
    } else {
        echo "kokot4";
    }

    // ------------------------------------------------------------------------------------------------------------------

    if($d == 2) {

        $data_meta = [
            ":user_ID" => $_SESSION["user_ID"],
            ":family_ID" => $family_ID,
            //":parent_child" => $_SESSION["parent_child"]
        ];

        $sql_meta = "INSERT INTO punisher_family_meta  (user_ID, family_ID/*, parent_child*/) VALUES (:user_ID, :family_ID/*, :parent_child*/)";
        $con_meta = $db->prepare($sql_meta);
        $con_meta->execute($data_meta);
        $data_meta = $con_meta->fetchALL(PDO::FETCH_ASSOC);

    }


?>