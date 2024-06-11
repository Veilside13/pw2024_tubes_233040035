<?php

require('session.php');
require('../functions.php');
// cekSessionAdmin();
// if ($_SESSION['role'] == 'user') {
//   header('location:../login.php');
// }

$movies = query("SELECT * FROM movie");


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin</title>
  <link rel="stylesheet" href="../css/admin.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <style>
    body {
      height: 100vh !important;
      overflow-x: hidden;
    }

    .sidebar {
      overflow-y: hidden;
    }

    .nav-hov {
      color: white;
    }

    .nav-hov:hover {
      color: blue;
    }
  </style>
</head>

<body class="vh-100">
  <div class="row h-100 bg-dark">
    <div class="col-3">
      <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark h-100 sidebar">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32">
            <use xlink:href="#bootstrap"></use>
          </svg>
          <span class="fs-4 fw-bold">MOVIE KU</span>
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
          <li>
            <a href="index.php" class="nav-link nav-hov">
              <i class="bi bi-speedometer2"></i>
              Dashboard
            </a>
          </li>
          <li>
            <a href="produk.php" class="nav-link nav-hov">
              <i class="bi bi-cart-plus"></i>
              Products
            </a>
          </li>
          <li>
            <a href="customer.php" class="nav-link nav-hov">
              <i class="bi bi-person-circle"></i>
              Customers
            </a>
          </li>
        </ul>
        <hr>
        <div class="dropdown">
          <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
            <strong>Admin</strong>
          </a>
          <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="logout.php">Log Out</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-9 h-100 container">
      <h1>List of users</h1>
      <div class="d-flex justify-content-between">

        <?php
        if (isset($_POST['search'])) {
          $keyword = $_POST['keyword'];
          $movies = live_search('movie', $keyword, 'judul');
        }
        ?>

        <button onclick="document.location.href='tambah_produk.php'" class="btn btn-primary ff">Tambah Data</button>
        <form class="d-flex" role="search" method="POST">
          <input class="form-control me-2" type="text" placeholder="Search" aria-label="Search" name="keyword">
          <button class="btn btn-primary" type="submit" name="search">Search</button>
        </form>
      </div>
      <table class=" table caption-top text-white">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Judul</th>
            <th scope="col">Image</th>
            <th scope="col">Harga</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $id = 1;
          foreach ($movies as $movie) { ?>

            <tr>
              <th scope="row"><?= $id++ ?></th>
              <td><?= $movie['judul'] ?></td>
              <td><img src="../img/<?= $movie['gambar'] ?>" alt="" width="50" height="50"></td>
              <td><?= $movie['harga'] ?></td>
              <td><a href="edit_produk.php?id_movie=<?= $movie['id_movie'] ?>" class="btn btn-primary me-2">edit</a><a href="hapus_produk.php?id_movie=<?= $movie['id_movie'] ?>" class="btn btn-danger">delete</a></td>
            </tr>

          <?php } ?>

        </tbody>
      </table>
    </div>
  </div>





  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>