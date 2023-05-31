<?php

require_once "inc/Koneksi.php";
require_once "app/wanita.php";

$bju = new App\Wanita();

if (isset($_POST['btn_simpan'])) {
    $bju->simpan();
    header("location:index.php?hal=wanita_tampil");
}

if (isset($_POST['btn_update'])) {
    $bju->update();
    header("location:index.php?hal=wanita_tampil");
}