<?php

$id = $_GET['id'];

$bju = new App\Kontrakan();
$rows = $bju->delete($id);

?>

<div class="info">
      Data berhasil dihapus!
      <a href="index.php?=kontrakan_tampil">Kembali</a>
</div>