<?php
require 'functions.php';
if (isset($_POST['registrasi'])) {
    if (regisrasi($_POST) > 0) {
        echo "";
    } else {
        echo 'user gagal ditambahkan!';
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Ku</title>
    <link rel="stylesheet" href="css/register.css">
</head>

<body>
    <div class="box">
        <div class="container">
            <div class="top-header">
                <span>Register</span>
                <header>Daftarkan Diri Anda!</header>
            </div>

            <form action="" method="POST">
                <!-- <div class="input-field">
                    <input type="text" class="input" placeholder="Name" name="" requied>
                    <i class="bx bx-user"></i>
                </div> -->

                <div class="input-field">
                    <input type="text" class="input" placeholder="Username" name="username" requied>
                    <i class="bx bx-lock-alt"></i>
                </div>

                <div class="input-field">
                    <input type="email" class="input" placeholder="Email" name="email" requied>
                    <i class="bx bx-lock-alt"></i>
                </div>

                <div class="input-field">
                    <input type="password" class="input" placeholder="Password" name="password1" requied>
                    <i class="bx bx-lock-alt"></i>
                </div>
                <div class="input-field">
                    <input type="password" class="input" placeholder="Konfirmasi Password" name="password2" requied>
                    <i class="bx bx-lock-alt"></i>
                </div>

                <input type="hidden" class="input" name="id_role" value="2" requied>

                <div class="input-field">
                    <input type="submit" class="submit" name="registrasi" value="Register">
                </div>

                <div class="register-link">
                    <p>Sudah punya akun? <a href="login.php">Sign in</a></p>
                </div>
            </form>
        </div>
    </div>
</body>

</html>