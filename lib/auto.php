<?php
    session_start();
    include_once($_SERVER["DOCUMENT_ROOT"]."/"."punisher/db.php");
    include_once("lib/detect_name_surname.php");
    include_once("lib/isset_value.php");
    include_once("lib/password.php");
    include_once "user_pass/access_control.php";
?>