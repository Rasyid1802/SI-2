<?php

$bju = new App\Kontrakan;
$rows = $bju->tampil();

?>

<h2>kontrakan</h2>

<a href="index.php?hal=kontrakan_input" class="btn">Tambah</a>

<table>
    <tr>
        <th>ID Kontrakan</th> 
        <th>NAMA Kontrakan</th>
        <th>HARGA Kontrakan</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>
    <?php foreach ($rows as $row) { ?>
    <tr>
        <td><?php echo $row['id_kontrakan']; ?></td>
        <td><?php echo $row['nama_kontrakan']; ?></td>
        <td><?php echo $row['hrg_kontrakan']; ?></td>
        <td><a href="index.php?hal=kontrakan_edit&id=<?php echo $row['id_kontrakan']; ?>" class="btn">Edit</a></td>
        <td><a href="index.php?hal=kontrakan_delete&id=<?php echo $row['id_kontrakan']; ?>" class="btn">Delete</a></td>
    </tr>
    <?php } ?>
</table>
