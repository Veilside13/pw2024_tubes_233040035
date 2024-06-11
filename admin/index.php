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
        <div class="col-9 container pt-5">
            <div class="row justify-content-between pe-5">
                <div class="col-6">
                    <div class="card" style="width: 14rem;">
                        <div class="card-body d-flex flex-column align-items-center">
                            <i class="bi bi-cart-check-fill" style="font-size: 6rem;"></i>
                            <h5>Products</h5>
                            <a href="produk.php" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card" style="width: 14rem;">
                        <div class="card-body d-flex flex-column align-items-center">
                            <i class="bi bi-person-fill-check" style="font-size: 6rem;"></i>
                            <h5>Our Customers</h5>
                            <a href="customer.php" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>