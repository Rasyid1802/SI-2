<?php

require_once "inc/Koneksi.php";
require_once "app/pria.php";

$bju = new App\Pria();

if (isset($_POST['btn_simpan'])) {
    $bju->simpan();
    header("location:index.php?hal=pria_tampil");
}

if (isset($_POST['btn_update'])) {
    $bju->update();
    header("location:index.php?hal=pria_tampil");
}