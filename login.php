<?php

require 'functions.php';

if (isset($_POST['login'])) {
    $login = login($_POST);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Ku</title>
    <link rel="stylesheet" href="css/login.css">
</head>

<body>
    <div class="box">
        <div class="container">
            <div class="top-header">
                <span>MOVIE KU</span>
                <header>Login</header>
            </div>

            <form action="" method="POST">
                <div class="input-field">
                    <input type="text" class="input" placeholder="Username" name="username" requied>
                    <i class="bx bx-user"></i>
                </div>

                <div class="input-field">
                    <input type="password" class="input" placeholder="Password" name="password" requied>
                    <i class="bx bx-lock-alt"></i>
                </div>



                <div class="bottom">
                    <div class="left">
                        <input type="checkbox" id="check">
                        <label for="check"> Ingatkan Saya</label>
                    </div>

                    <div class="right">
                        <label><a href="#"> Lupa Password?</a></label>
                    </div>


                </div>
                <div class="input-field">
                    <input type="submit" class="submit" name="login">
                </div>

                <div class="register-link">
                    <p>Don't Have an account? <a href="register.php">Register</a></p>
                </div>
            </form>

        </div>
    </div>
</body>

</html>