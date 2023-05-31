<?php

$id = $_GET['id'];
$bju= new App\Wanita();

$row = $bju->edit($id);
?>

<h2>Edit wanita</h2>

<form action="wanita_proses.php" method="post">
    <input type="hidden" name="id_wanita" value="<?php echo $row['id_wanita']; ?>">
    <table>
        <tr>
            <td>Nama Penghuni</td>
            <td><input type="text" name="nama_wanita" value="<?php echo $row['nama_wanita']; ?>"></td>
        </tr>
        <tr>
            <td>Harga Perbulan</td>
            <td><input type="text" name="hrg_wanita" value="<?php echo $row['hrg_wanita']; ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form> 