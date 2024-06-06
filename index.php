<?php

require "./functions.php";

?>



<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Movie Ku</title>
  <link rel="stylesheet" href="css/index.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body style="background-color:black;">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  <!-- //NAVBAR// -->


  <nav class="navbar navbar-expand-lg bg-navbar fixed-top">
    <div class="container mx-auto">
      <a class="navbar-brand text-white fw-semibold" href="#">MOVIE KU</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active text-white fw-semibold" aria-current="page" href="#">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white fw-semibold" href="#menu">NOW PLAYING</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white fw-semibold" href="#about-carousel">UPCOMING</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white fw-semibold" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              CATEGORIES
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Thriller</a></li>
              <li><a class="dropdown-item" href="#">Horror</a></li>
              <li><a class="dropdown-item" href="#">Anime</a></li>
              <li><a class="dropdown-item" href="#">Drama</a></li>
            </ul>
          </li>
        </ul>
      </div>

      <nav class="navbar bg-search">
        <div class="container-fluid">
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-danger" type="submit">Search</button>
          </form>
        </div>
      </nav>

    </div>
  </nav>


  <!-- Home Section -->

  <div class="hero-image">
    <div class="hero-text">
      <h1>SELAMAT DATANG</h1>
      <p>Film, acara TV tak terbatas, dan banyak lagi</p>
      <a class="btn btn-danger" href="login.php" type="submit">Sign In</a>
    </div>
  </div>



  <section id="about" class="about">
    <h2>TENTANG KAMI</h2>

    <div class="row">
      <div class="about-img">
        <img src="img/bg.login.jpg" alt="Tentang Kami">
      </div>
      <div class="content">
        <h3>Beli Tiket Bioskop Yang Anda Suka</h3>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Earum quo consectetur dicta maiores nulla sint.</p>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Temporibus repudiandae aliquam molestias in animi suscipit modi, et esse laborum laudantium.</p>
      </div>
    </div>

  </section>

  <section id="about-carousel" class="about-carousel">
    <h2>UPCOMING</h2>

    <div id="carouselExampleDark" class="carousel carousel-dark slide container-carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="500">
          <img src="img/bg.login.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block text-white">
            <h5>First slide label</h5>
            <p>Some representative placeholder content for the first slide.</p>
          </div>
        </div>
        <div class="carousel-item" data-bs-interval="2000">
          <img src="img/bg.login.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block text-white">
            <h5>Second slide label</h5>
            <p>Some representative placeholder content for the second slide.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/bg.login.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block text-white">
            <h5>Third slide label</h5>
            <p>Some representative placeholder content for the third slide.</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>



  <section id="menu" class="menu text-center text-white">
    <h2>NOW PLAYING</h2>


    <div class="row justify-content-center gap-5 pt-3">
      <div class="card text-center bg-transparent" style="width: 13rem;">
        <img src="img/poster.1.jpg" class="card-img-top rounded shadow-lg" alt="...">
        <div class="card-body text-white">
          <p class="card-text fw-bold">The Fast & The Furious</p>
          <a href="#" class="btn btn-dark">IDR | 40.000</a> <br>
          <a href="#" class="btn btn-danger mt-3">BUY</a> <br>
          <a href="" class="cart-add fs-1"><i class='bx bxs-cart-add' style='color:#500505'></i></a>
        </div>
      </div>
      <div class="card text-center bg-transparent" style="width: 13rem;">
        <img src="img/poster.2.jpg" class="card-img-top rounded shadow-lg" alt="...">
        <div class="card-body text-white">
          <p class="card-text fw-bold">Fast Furious Tokyo Drift</p>
          <a href="#" class="btn btn-dark">IDR | 40.000</a> <br>
          <a href="#" class="btn btn-danger mt-3">BUY</a> <br>
          <a href="" class="cart-add fs-1"><i class='bx bxs-cart-add' style='color:#500505'></i></a>
        </div>
      </div>
      <div class="card text-center bg-transparent" style="width: 13rem;">
        <img src="img/poster.4.jpg" class="card-img-top rounded shadow-lg" alt="...">
        <div class="card-body text-white">
          <p class="card-text fw-bold mt-3">The Expendables 2</p>
          <a href="#" class="btn btn-dark mt-3">IDR | 40.000</a> <br>
          <a href="#" class="btn btn-danger mt-3">BUY</a> <br>
          <a href="" class="cart-add fs-1"><i class='bx bxs-cart-add' style='color:#500505'></i></a>
        </div>
      </div>
      <div class="card text-center bg-transparent" style="width: 13rem;">
        <img src="img/poster.5.jpg" class="card-img-top rounded shadow-lg" alt="...">
        <div class="card-body text-white">
          <p class="card-text fw-bold mt-3">Sons Of Anarchy</p>
          <a href="#" class="btn btn-dark mt-3">IDR | 40.000</a> <br>
          <a href="#" class="btn btn-danger mt-3">BUY</a> <br>
          <a href="" class="cart-add fs-1"><i class='bx bxs-cart-add' style='color:#500505'></i></a>
        </div>
      </div>
      <div class="card text-center bg-transparent" style="width: 13rem;">
        <img src="img/poster.6.jpg" class="card-img-top rounded shadow-lg" alt="...">
        <div class="card-body text-white">
          <p class="card-text fw-bold">Fast & Furious 5</p>
          <a href="#" class="btn btn-dark">IDR | 40.000</a> <br>
          <a href="#" class="btn btn-danger mt-3">BUY</a> <br>
          <a href="" class="cart-add fs-1"><i class='bx bxs-cart-add' style='color:#500505'></i></a>
        </div>
      </div>
      <div class="card text-center bg-transparent" style="width: 13rem;">
        <img src="img/poster.7.jpg" class="card-img-top rounded shadow-lg" alt="...">
        <div class="card-body text-white">
          <p class="card-text fw-bold">F9 The Fast Saga</p>
          <a href="#" class="btn btn-dark">IDR | 40.000</a> <br>
          <a href="#" class="btn btn-danger mt-3">BUY</a> <br>
          <a href="" class="cart-add fs-1"><i class='bx bxs-cart-add' style='color:#500505'></i></a>
        </div>
      </div>
      <div class="card text-center bg-transparent" style="width: 13rem;">
        <img src="img/poster.8.jpg" class="card-img-top rounded shadow-lg" alt="...">
        <div class="card-body text-white">
          <p class="card-text fw-bold mt-3">Fast & Furious 6</p>
          <a href="#" class="btn btn-dark mt-2">IDR | 40.000</a> <br>
          <a href="#" class="btn btn-danger mt-3">BUY</a> <br>
          <a href="" class="cart-add fs-1"><i class='bx bxs-cart-add' style='color:#500505'></i></a>
        </div>
      </div>


      <!-- FOOTER -->

      <div class="container">
        <footer class="pt-5">
          <div class="row">
            <div class="col-6 col-md-2 mb-3">
              <h5>About Us</h5>
              <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Home</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Home</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Home</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Home</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Home</a></li>

              </ul>
            </div>

            <div class="col-6 col-md-2 mb-3">
              <h5>Section</h5>
              <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Home</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Features</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Pricing</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">FAQs</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">About</a></li>
              </ul>
            </div>

            <div class="col-6 col-md-2 mb-3">
              <h5>Section</h5>
              <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Home</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Features</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Pricing</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">FAQs</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">About</a></li>
              </ul>
            </div>

            <div class="col-md-5 offset-md-1 mb-3">
              <form>
                <h5>Subscribe to our newsletter</h5>
                <p>Monthly digest of what's new and exciting from us.</p>
                <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                  <label for="newsletter1" class="visually-hidden">Email address</label>
                  <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
                  <button class="btn btn-primary" type="button">Subscribe</button>
                </div>
              </form>
            </div>
          </div>

          <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
            <p>© 2024 Company, Inc. All rights reserved.</p>
            <ul class="list-unstyled d-flex">
              <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24" height="24">
                    <use xlink:href="#twitter"></use>
                  </svg></a></li>
              <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24" height="24">
                    <use xlink:href="#instagram"></use>
                  </svg></a></li>
              <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24" height="24">
                    <use xlink:href="#facebook"></use>
                  </svg></a></li>
            </ul>
          </div>
        </footer>
      </div>


</body>

</html>