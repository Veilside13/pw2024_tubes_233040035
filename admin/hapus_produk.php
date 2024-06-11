<?php

require '../functions.php';

$id = $_GET['id_movie'];
if (hapus_produk($id) > 0) {
    header("location:produk.php");
}
