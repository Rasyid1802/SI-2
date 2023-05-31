<?php

$id = $_GET['id'];

$bju = new App\Wanita();
$rows = $bju->delete($id);

?>

<div class="info">
      Data berhasil dihapus!
      <a href="index.php?=wanita_tampil">Kembali</a>
</div>