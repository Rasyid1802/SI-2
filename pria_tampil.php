<?php

$bju = new App\Pria;
$rows = $bju->tampil();

?>

<h2>Pria</h2>

<a href="index.php?hal=pria_input" class="btn">Tambah</a>

<table>
    <tr>
        <th>ID Kost Pria</th> 
        <th>NAMA Penghuni</th>
        <th>HARGA Perbulan</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>
    <?php foreach ($rows as $row) { ?>
    <tr>
        <td><?php echo $row['id_pria']; ?></td>
        <td><?php echo $row['nama_pria']; ?></td>
        <td><?php echo $row['hrg_pria']; ?></td>
        <td><a href="index.php?hal=pria_edit&id=<?php echo $row['id_pria']; ?>" class="btn">Edit</a></td>
        <td><a href="index.php?hal=pria_delete&id=<?php echo $row['id_pria']; ?>" class="btn">Delete</a></td>
    </tr>
    <?php } ?>
</table>
