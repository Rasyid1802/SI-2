<?php

namespace App;
use Inc\Koneksi as Koneksi;

class Kontrakan extends Koneksi {

    public function tampil()
    {
        $sql = "SELECT * FROM tb_kontrakan";
        $stmt = $this->db->prepare($sql);
        $stmt->execute(); 

        $data = [];

        while ($rows = $stmt->fetch()) {
            $data[] = $rows;
        }

        return $data;
    }

    public function simpan()
    {
        $nama_kontrakan = $_POST['nama_kontrakan'];
        $hrg_kontrakan = $_POST['hrg_kontrakan'];

        $sql = "INSERT INTO tb_kontrakan (nama_kontrakan, hrg_kontrakan) VALUES (:nama_kontrakan, :hrg_kontrakan)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":nama_kontrakan", $nama_kontrakan);
        $stmt->bindParam(":hrg_kontrakan", $hrg_kontrakan);
        $stmt->execute();

    }

    public function edit($id)
    {

        $sql = "SELECT * FROM tb_kontrakan WHERE id_kontrakan=:id_kontrakan";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id_kontrakan", $id);
        $stmt->execute();

        $row = $stmt->fetch();

        return $row;
    }

    public function update()
    {
        $nama_kontrakan = $_POST['nama_kontrakan'];
        $hrg_kontrakan = $_POST['hrg_kontrakan'];
        $id_kontrakan = $_POST['id_kontrakan'];

        $sql = "UPDATE tb_kontrakan SET nama_kontrakan=:nama_kontrakan, hrg_kontrakan=:hrg_kontrakan WHERE id_kontrakan=:id_kontrakan";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":nama_kontrakan", $nama_kontrakan);
        $stmt->bindParam(":hrg_kontrakan", $hrg_kontrakan);
        $stmt->bindParam(":id_kontrakan", $id_kontrakan);
        $stmt->execute();

    }

    public function delete($id)
    {

        $sql = "DELETE FROM tb_kontrakan WHERE id_kontrakan=:id_kontrakan";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id_kontrakan", $id);
        $stmt->execute();

    }

}