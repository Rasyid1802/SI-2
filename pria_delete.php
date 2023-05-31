<?php

$id = $_GET['id'];

$bju = new App\Pria();
$rows = $bju->delete($id);

?>

<div class="info">
      Data berhasil dihapus!
      <a href="index.php?=pria_tampil">Kembali</a>
</div>