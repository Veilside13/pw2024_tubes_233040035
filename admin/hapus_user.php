<?php

require '../functions.php';

$id = $_GET['id'];
if (hapus($id) > 0) {
    header("location:customer.php");
}
