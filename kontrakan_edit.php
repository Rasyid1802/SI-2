<?php

$id = $_GET['id'];
$bju= new App\Kontrakan();

$row = $bju->edit($id);
?>

<h2>Edit Kontrakan</h2>

<form action="kontrakan_proses.php" method="post">
    <input type="hidden" name="id_kontrakan" value="<?php echo $row['id_kontrakan']; ?>">
    <table>
        <tr>
            <td>Nama Kontrakan</td>
            <td><input type="text" name="nama_kontrakan" value="<?php echo $row['nama_kontrakan']; ?>"></td>
        </tr>
        <tr>
            <td>Harga Kontrakan</td>
            <td><input type="text" name="hrg_kontrakan" value="<?php echo $row['hrg_kontrakan']; ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form> 