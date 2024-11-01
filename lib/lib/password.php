<?php
    //mb_strlen()

    function password_checker($pass) {
        $password = str_split($pass);
        $pass_upper = 0;
        $pass_digit = 0;
        $pass_preg_match = 0;
        $pass_preg_match_word = 0;
        $c = 0;
        
        if (mb_strlen($pass) >= 8) {
            //echo "true1<br>";
            $c++;
        } else {
            //echo "min 8 pismen<br>";
        }

        if ($pass_preg_match_word == 0) {
            if (!preg_match("/[ ]/", $pass)) {
                //echo "true2<br>";
                $pass_preg_match_word++;
                $c++;
            }
        }
        
        if ($pass_preg_match == 0) {
            $pattern = "/['£$%^&*()}{:#~?><>,;@|\=-_+¬`]/";

            if (preg_match($pattern, $pass)) {
                $pass_preg_match++;
                $c++;
                //echo "Pasword is VALID.<br>";
            } else {
                //echo "Pasword is INVALID containing special charakters.<br>";
            }
        }
        
        foreach ($password as $key) {
            
            if ($pass_upper == 0) {
                if (ctype_upper($key)) {
                    //echo "true4<br>";
                    $pass_upper++;
                    $c++;
                }
            }
            if ($pass_digit == 0) {
                if (ctype_digit($key)) {
                    //echo "true5<br>";
                    $pass_digit++;
                    $c++;
                } 
            }  
        }
        
        if ($c == 5) {
            return 1;
        } else {
            return 0;
        }
    }
    function pass_hash_salt($password, $email) {

        $hash_email_1 = hash("sha256", $email);
        $hash_email_2 = hash("sha384", $email);

        $hash_pass = hash("sha512",$hash_email_1 . $password . $hash_email_2);
        
        return $hash_pass;

    }
    //echo pass_hash_salt("abc","cdf");

    /*$pass = "Abcasdasd2.1";
    echo password_checker($pass);
    */


?>