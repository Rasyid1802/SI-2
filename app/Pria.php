<?php

namespace App;
use Inc\Koneksi as Koneksi;

class Pria extends Koneksi {

    public function tampil()
    {
        $sql = "SELECT * FROM tb_pria";
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
        $nama_pria = $_POST['nama_pria'];
        $hrg_pria = $_POST['hrg_pria'];

        $sql = "INSERT INTO tb_pria (nama_pria, hrg_pria) VALUES (:nama_pria, :hrg_pria)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":nama_pria", $nama_pria);
        $stmt->bindParam(":hrg_pria", $hrg_pria);
        $stmt->execute();

    }

    public function edit($id)
    {

        $sql = "SELECT * FROM tb_pria WHERE id_pria=:id_pria";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id_pria", $id);
        $stmt->execute();

        $row = $stmt->fetch();

        return $row;
    }

    public function update()
    {
        $nama_pria = $_POST['nama_pria'];
        $hrg_pria = $_POST['hrg_pria'];
        $id_pria = $_POST['id_pria'];

        $sql = "UPDATE tb_pria SET nama_pria=:nama_pria, hrg_pria=:hrg_pria WHERE id_pria=:id_pria";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":nama_pria", $nama_pria);
        $stmt->bindParam(":hrg_pria", $hrg_pria);
        $stmt->bindParam(":id_pria", $id_pria);
        $stmt->execute();

    }

    public function delete($id)
    {

        $sql = "DELETE FROM tb_pria WHERE id_pria=:id_pria";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id_pria", $id);
        $stmt->execute();

    }

}