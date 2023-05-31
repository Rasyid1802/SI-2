<?php

$bju = new App\Wanita;
$rows = $bju->tampil();

?>

<h2>wanita</h2>

<a href="index.php?hal=wanita_input" class="btn">Tambah</a>

<table>
    <tr>
        <th>ID Kost Wanita</th> 
        <th>NAMA Penghuni</th>
        <th>HARGA Perbulan</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>
    <?php foreach ($rows as $row) { ?>
    <tr>
        <td><?php echo $row['id_wanita']; ?></td>
        <td><?php echo $row['nama_wanita']; ?></td>
        <td><?php echo $row['hrg_wanita']; ?></td>
        <td><a href="index.php?hal=wanita_edit&id=<?php echo $row['id_wanita']; ?>" class="btn">Edit</a></td>
        <td><a href="index.php?hal=wanita_delete&id=<?php echo $row['id_wanita']; ?>" class="btn">Delete</a></td>
    </tr>
    <?php } ?>
</table>
