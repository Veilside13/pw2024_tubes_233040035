<?php

session_start();

function koneksi()
{
    return mysqli_connect("localhost", "root", "", "pw2024_tubes_233040035");
}

function query($query)
{
    $conn = koneksi();
    $result = mysqli_query($conn, $query);

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}


// LOIGN

function login($data)
{
    $conn = koneksi();
    $username = htmlspecialchars($data["username"]);
    $password = htmlspecialchars($data["password"]);

    $users = query("SELECT * FROM user WHERE username = '$username'");

    // Check if a user was found
    if (count($users) > 0) {
        $user = $users[0]; // Get the first user found

        // Verify the password
        if (password_verify($password, $user['password'])) {
            $_SESSION['login'] = true;
            if ($user['id_role'] == 1) {
                $_SESSION['role'] = 'admin';
                header('Location:admin/index.php');
            } else {
                $_SESSION['role'] = 'user';
                header('Location:index.php');
            }
            exit;
        }
    }

    return -1;
}

// REGISTRASI

function regisrasi($data)
{
    $conn = koneksi();
    $username = htmlspecialchars(strtolower($data['username']));
    $email = htmlspecialchars(strtolower($data['email']));
    $password1 = mysqli_real_escape_string($conn, $data['password1']);
    $password2 = mysqli_real_escape_string($conn, $data['password2']);
    $role = htmlspecialchars($data['id_role']);

    if (empty($username) || empty($email) || empty($password1) || empty($password2)) {
        echo "<script>
        alert('username / password tidak boleh kosong!');
        document.location.href = 'register.php';
        </script>";
        return false;
    }

    if (query("SELECT * FROM user WHERE username = '$username'")) {
        echo "<script>
            alert('username sudah terdaftar!');
            document.location.href = 'register.php';
            </script>";
        return false;
    }

    if ($password1 !== $password2) {
        echo "<script>
                alert('konfirmasi password tidak sesuai!');
                document.location.href = 'register.php';
                </script>";
        return false;
    }

    if (strlen($password1)  < 5) {
        echo "<script>
                    alert('password terlalu pendek!');
                    document.location.href = 'register.php';
                    </script>";
        return false;
    }
    $password_baru = password_hash($password1, PASSWORD_DEFAULT);
    $query = "INSERT INTO user VALUES (null,'','$username', '$email', '$password_baru','$role')";
    mysqli_query($conn, $query) or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}

// FUNCTION TAMBAH DATA

function tambah($data)
{
    $conn = koneksi();

    // $gambar = htmlspecialchars($data["nama"]);
    $username = htmlspecialchars($data["username"]);
    $email = htmlspecialchars($data["email"]);
    $password = htmlspecialchars($data["password"]);
    $id_role = htmlspecialchars($data["id_role"]);
    $password_baru = password_hash($password, PASSWORD_DEFAULT);
    $image = upload();


    $query = "INSERT INTO user
            VALUES
            (null, '$image', '$username', '$email', '$password_baru', '$id_role')";
    mysqli_query($conn, $query) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}



// FUNCTION HAPUS DATA

function hapus($id)
{
    $conn = koneksi();

    mysqli_query($conn, "DELETE FROM user WHERE id = $id");
    return mysqli_affected_rows($conn);
}

// FUNCTION HAPUS PRODUK

function hapus_produk($id)
{
    $conn = koneksi();

    mysqli_query($conn, "DELETE FROM movie WHERE id_movie = $id");
    return mysqli_affected_rows($conn);
}


// FUNCTION UBAH DATA

function ubah($data)
{
    $conn = koneksi();

    $id = htmlspecialchars($data['id']);
    $username = htmlspecialchars($data['username']);
    $password = htmlspecialchars($data['password']);
    $id_role = htmlspecialchars($data['id_role']);
    $email = htmlspecialchars($data['email']);
    $old_image = htmlspecialchars($data['old_image']);

    if ($_FILES['image']['error'] === 4) {
        $gambar = $old_image;
    } else {
        $gambar = upload();
        if (!$gambar) {
            return false;
        }
    }

    $password_baru = password_hash($password, PASSWORD_DEFAULT);

    $query = "UPDATE user SET
               gambar = '$gambar',
               username = '$username',
               email = '$email', 
               password = '$password_baru', 
               id_role = '$id_role'
               WHERE id = $id
                ";
    mysqli_query($conn, $query) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}

// FUNCTION SEARCH
function live_search($table, $keyword, $where)
{

    $query = "SELECT * FROM $table WHERE $where LIKE '%$keyword%'";

    $result = mysqli_query(koneksi(), $query);

    return $result;
}


// FUNCTION UPLOAD DATA

function upload()
{
    $nama_file = $_FILES['image']['name'];
    $tipe_file = $_FILES['image']['type'];
    $ukuran_file = $_FILES['image']['size'];
    $error = $_FILES['image']['error'];
    $tmp_file = $_FILES['image']['tmp_name'];

    if ($error == 4) {
        return 'nophoto.png';
    }

    $daftar_gambar = ['jpg', 'jpeg', 'png'];
    $ekstensi_file = explode('.', $nama_file);
    $ekstensi_file = strtolower(end($ekstensi_file));
    if (!in_array($ekstensi_file, $daftar_gambar)) {
        echo "<script>
        alert('yang anda pilih bukan gambar!');
          </script>";
        return false;
    }

    // cek type file
    if ($tipe_file != 'image/jpeg' && $tipe_file != 'image/png') {
        echo "<script>
        alert('yang anda pilih bukan gambar!');
          </script>";
        return false;
    }

    // cek ukuran file
    if ($ukuran_file > 5000000) {
        echo "<script>
        alert('ukuran gambar terlalu besar!');
          </script>";
        return false;
    }

    // lolos pengecekan siap upload file
    $nama_file_baru = uniqid();
    $nama_file_baru .= '.';
    $nama_file_baru .= $ekstensi_file;

    if (!move_uploaded_file($tmp_file, '../img/' . $nama_file_baru)) {
        return false;
    }

    return $nama_file_baru;
}



// FUNCTION TAMBAH PRODUK

function tambah_produk($data)
{
    $conn = koneksi();

    // $gambar = htmlspecialchars($data["nama"]);
    $judul = htmlspecialchars($data["judul"]);
    $harga = htmlspecialchars($data["harga"]);
    $image = upload();


    $query = "INSERT INTO movie
            VALUES
            (null, '$judul', '$harga', '$image')";
    mysqli_query($conn, $query) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}




function ubah_produk($data)
{
    $conn = koneksi();

    $id = htmlspecialchars($data['id']);
    $judul = htmlspecialchars($data['judul']);
    $harga = htmlspecialchars($data['harga']);
    $old_image = htmlspecialchars($data['old_image']);

    if ($_FILES['image']['error'] === 4) {
        $gambar = $old_image;
    } else {
        $gambar = upload();
        if (!$gambar) {
            return false;
        }
    }



    $query = "UPDATE movie SET
               judul = '$judul',
               harga = '$harga',
               gambar = '$gambar' 
               WHERE id_movie = $id
                ";
    mysqli_query($conn, $query) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}
