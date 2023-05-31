<?php

namespace App;
use Inc\Koneksi as Koneksi;

class Wanita extends Koneksi {

    public function tampil()
    {
        $sql = "SELECT * FROM tb_wanita";
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
        $nama_wanita = $_POST['nama_wanita'];
        $hrg_wanita = $_POST['hrg_wanita'];

        $sql = "INSERT INTO tb_wanita (nama_wanita, hrg_wanita) VALUES (:nama_wanita, :hrg_wanita)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":nama_wanita", $nama_wanita);
        $stmt->bindParam(":hrg_wanita", $hrg_wanita);
        $stmt->execute();

    }

    public function edit($id)
    {

        $sql = "SELECT * FROM tb_wanita WHERE id_wanita=:id_wanita";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id_wanita", $id);
        $stmt->execute();

        $row = $stmt->fetch();

        return $row;
    }

    public function update()
    {
        $nama_wanita = $_POST['nama_wanita'];
        $hrg_wanita = $_POST['hrg_wanita'];
        $id_wanita = $_POST['id_wanita'];

        $sql = "UPDATE tb_wanita SET nama_wanita=:nama_wanita, hrg_wanita=:hrg_wanita WHERE id_wanita=:id_wanita";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":nama_wanita", $nama_wanita);
        $stmt->bindParam(":hrg_wanita", $hrg_wanita);
        $stmt->bindParam(":id_wanita", $id_wanita);
        $stmt->execute();

    }

    public function delete($id)
    {

        $sql = "DELETE FROM tb_wanita WHERE id_wanita=:id_wanita";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id_wanita", $id);
        $stmt->execute();

    }

}