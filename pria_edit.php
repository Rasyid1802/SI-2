<?php

$id = $_GET['id'];
$bju= new App\Pria();

$row = $bju->edit($id);
?>

<h2>Edit Kost Pria</h2>

<form action="pria_proses.php" method="post">
    <input type="hidden" name="id_pria" value="<?php echo $row['id_pria']; ?>">
    <table>
        <tr>
            <td>Nama Penghuni</td>
            <td><input type="text" name="nama_pria" value="<?php echo $row['nama_pria']; ?>"></td>
        </tr>
        <tr>
            <td>Harga Perbulan</td>
            <td><input type="text" name="hrg_pria" value="<?php echo $row['hrg_pria']; ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form> 