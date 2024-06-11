<?php
require('../functions.php');
$movies = query('SELECT * FROM movie');

$keyword = $_GET['keyword'];
$movies = live_search('movie', $keyword, 'judul');
?>


<div class="row justify-content-center gap-5 pt-3 movie">
    <?php
    foreach ($movies as $movie) :
    ?>
        <div class="card text-center bg-transparent" style="width: 13rem;">
            <img src="img/<?= $movie['gambar'] ?>" class="card-img-top rounded shadow-lg" alt="...">
            <div class="card-body text-white">
                <p class="card-text fw-bold"><?= $movie['judul'] ?></p>
                <a href="#" class="btn btn-dark">IDR | <?= $movie['harga'] ?></a> <br>
                <a href="#" class="btn btn-danger mt-3">BUY</a> <br>
                <a href="" class="cart-add fs-1"><i class='bx bxs-cart-add' style='color:#500505'></i></a>
            </div>
        </div>


    <?php
    endforeach;
    ?>
</div>