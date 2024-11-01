<?php


    function detect_name_surname($str){
        $c = 0;
        $is_name_digit = 0;
        $is_name_preg = 0;
        $is_name_upper = 0;
        $name = 0;

        if(isset($_POST[$str]) and !empty($_POST[$str])) {
            $name1 = str_split($_POST[$str]);
            foreach ($name1 as $key1) {
                if ($is_name_upper == 0) {
                    if (ctype_upper($key1)) {
                        $c++;
                        $is_name_upper++;
                        $name = $_POST[$str];
                    }
                }
                if ($is_name_upper == 0) {
                    $_SESSION ["error_".$str]["upper"] = "první písmeno musí být velké";
                    break;
                }
                if ($is_name_digit == 0){
                    if (ctype_digit($key1)) {
                        $c++;
                        $is_name_digit++;
                        $name = $_POST[$str];
                    }
                }
                if ($is_name_digit == 1) {
                    $_SESSION ["error_".$str]["digit"] = "nesmí obsahovat čísla";
                    break;
                }
            }
        } else {
            $_SESSION ["error_".$str]["nothing"] = "nevyplněné pole";
        }

        $arr[0] = $c;
        $arr[1] = $is_name_digit;
        $arr[2] = $is_name_upper;
        $arr[3] = $is_name_preg;
        $arr[4] = $name;
        return $arr;
    }

?>