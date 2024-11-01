<?php
    function isset_value($error, $value) {
        if(isset($_SESSION[$error][$value])) {
            $return = $_SESSION[$error][$value];
            unset($_SESSION[$error][$value]);
        } else {
            $return = "";
        }
        return $return;
    }
    function isset_value_session_1($error) {
        if(isset($error)) {
            $return = $error;
        } else {
            $return = "";
        }
        return $return;
    }
?>