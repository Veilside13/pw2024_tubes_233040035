<?php

require('session.php');
require('../functions.php');
// cekSessionAdmin();
// if ($_SESSION['role'] == 'user') {
//   header('location:../login.php');
// }

$user = query("SELECT * FROM user");


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
            <a href="#" class="nav-link nav-hov">
              <i class="bi bi-speedometer2"></i>
              Dashboard
            </a>
          </li>
          <li>
            <a href="#" class="nav-link nav-hov">
              <i class="bi bi-cart-plus"></i>
              Products
            </a>
          </li>
          <li>
            <a href="#" class="nav-link nav-hov">
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
    <div class="col-9 container">
      <table class="table caption-top text-white">
        <caption>List of users</caption>
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Username</th>
            <th scope="col">Password</th>
            <th scope="col">Email</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $id = 1;
          foreach ($user as $u) { ?>

            <tr>
              <th scope="row"><?= $id++ ?></th>
              <td><?= $u['username'] ?></td>
              <td><?= $u['password'] ?></td>
              <td><?= $u['email'] ?></td>
              <td><a href="edit_user.php?id=<?= $u['id'] ?>" class="btn btn-primary me-2">edit</a><a href="hapus_user.php?id=<?= $u['id'] ?>" class="btn btn-danger">delete</a></td>
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