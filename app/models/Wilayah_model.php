<?php

class Wilayah_model
{
    private $tabel = 'wilayah';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getWilayah()
    {
        $this->db->query('SELECT * FROM ' .  $this->tabel);
        return $this->db->resultSet();
    }

    public function save($data)
    {
        $query = "INSERT INTO wilayah
        VALUES
      ('', :kota_kab, :provinsi)";

        $this->db->query($query);
        $this->db->bind('kota_kab', $data['kota_kab']);
        $this->db->bind('provinsi', $data['provinsi']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function update($data)
    {
        $query = "UPDATE wilayah SET
                    kota_kab = :kota_kab,
                    provinsi = :provinsi
                  WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('kota_kab', $data['kota_kab']);
        $this->db->bind('provinsi', $data['provinsi']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function delete($id)
    {
        $query = "DELETE FROM wilayah WHERE id = :id";
        
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }
}
