<?php
    include_once("../lib/auto.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
 
    <title>Login Register form</title>
</head>
<body>

    <div class="wrapper active">
        <span class="rotate-bg"></span>
        <span class="rotate-bg2"></span>

        <div class="form-box login">
            <h2 class="title animation" style="--i:0; --j:21">Login</h2>

            <form action="action_login.php" method="post">
                <div class="input-box animation" style="--i:1; --j:22">
                    <input type="text" name="nickname_login" id="nickname_login" value="<?=isset_value("value", "nickname_login")?>" required>
                    <label for="nickname_login">Nickname</label>
                    <i class='bx bxs-user'></i>
                </div>
                <?php
                    echo isset_value("error_nickname_login","wrong_pass");
                ?>
                <div class="input-box animation" style="--i:2; --j:23">
                    <input type="password" name="password_login" id="password_login" required>
                    <label for="password_login">Password</label>
                    <i class='bx bxs-lock-alt'></i>
                </div>
                <?php
                    echo isset_value("error_password_login","wrong_pass");
                    echo isset_value("error_password_login","nothing");
                ?>
                <button type="submit" class="btn animation" style="--i:3; --j:24">Login</button>

                <div class="linkTxt animation" style="--i:5; --j:25">
                    <p>Don't have an account? <a href="#" class="register-link">Sign Up</a></p>
                </div>

            </form>
        </div>

        <div class="info-text login">
            <h2 class="animation" style="--i:0; --j:20">Welcome Back!</h2>
            <p class="animation" style="--i:1; --j:21">Lorem ipsum dolor sit amet consectetur adipisicing elit.Deleniti,rem?</p>
        </div>




        <div class="form-box register">

            <h2 class="title animation" style="--i:17; --j:0">Sign Up</h2>

            <form action="action_register.php" method="post">

                <div class="input-box animation" style="--i:18; --j:1">
                    <input type="text" name="name" id="name" value="<?=isset_value("value", "name")?>" required>
                    <label for="name">Jmeno</label>
                    <i class='bx bxs-user'></i>
                </div>
                <?php
                    echo isset_value("error_name","upper");
                    echo isset_value("error_name","digit");
                    echo isset_value("error_name","nothing");
                ?>
                <div class="input-box animation" style="--i:19; --j:2">
                    <input type="text" name="surname" id="surname" value="<?=isset_value("value", "surname")?>" required>
                    <label for="surname">Prijmeni</label>
                    <i class='bx bxs-user'></i>
                </div>
                <?php
                    echo isset_value("error_surname","upper");
                    echo isset_value("error_surname","digit");
                    echo isset_value("error_surname","nothing");
                ?>
                <div class="input-box animation" style="--i:20; --j:3">
                    <input type="text" name="nickname" id="nickname" value="<?=isset_value("value", "nickname")?>" required>
                    <label for="nickname">Nickname</label>
                    <i class='bx bxs-user'></i>
                </div>
                <?php
                    echo isset_value("error_nickname","already_is");

                ?>
                <div class="input-box animation" style="--i:21; --j:4">
                    <input type="password" name="password_1" id="password_1" required>
                    <label for="password_1">Password</label>
                    <i class='bx bxs-lock-alt'></i>
                </div>
                <?php
                    echo isset_value("error_password","8_chars");
                    echo isset_value("error_password","no_space");
                    echo isset_value("error_password","spec_characters");
                    echo isset_value("error_password","upper_char");
                    echo isset_value("error_password","digit");
                    echo isset_value("error_password","error_password_1");

                ?>
                <div class="input-box animation" style="--i:22; --j:5">
                    <input type="password" name="password_2" id="password_2" required>
                    <label for="password_2">Password 2</label>
                    <i class='bx bxs-lock-alt'></i>
                </div>
                <?php
                    echo isset_value("error_password","error_password_2");
                ?>
                <button type="submit" class="btn animation" style="--i:23;--j:6">Sign Up</button>

                <div class="linkTxt animation" style="--i:24; --j:7">
                    <p>Already have an account? <a href="#" class="login-link">Login</a></p>
                </div>

            </form>
        </div>

        <div class="info-text register">
            <h2 class="animation" style="--i:17; --j:0;">Welcome Back!</h2>
            <p class="animation" style="--i:18; --j:1;">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Deleniti,rem?</p>
        </div>

    </div>

    <!--Script.js-->
    <script src="script.js"></script>
</body>

</html> 