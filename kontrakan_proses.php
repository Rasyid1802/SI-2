<?php

require_once "inc/Koneksi.php";
require_once "app/kontrakan.php";

$bju = new App\Kontrakan();

if (isset($_POST['btn_simpan'])) {
    $bju->simpan();
    header("location:index.php?hal=kontrakan_tampil");
}

if (isset($_POST['btn_update'])) {
    $bju->update();
    header("location:index.php?hal=kontrakan_tampil");
}