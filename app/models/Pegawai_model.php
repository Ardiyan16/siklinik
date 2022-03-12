<?php

class Pegawai_model
{
    private $tabel = 'pegawai';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getPegawai()
    {
        $this->db->query('SELECT * FROM ' .  $this->tabel);
        return $this->db->resultSet();
    }

    public function save($data)
    {
        $query = "INSERT INTO pegawai
        VALUES
      ('', :nama_lengkap, :alamat, :no_telp, :jabatan)";

        $this->db->query($query);
        $this->db->bind('nama_lengkap', $data['nama_lengkap']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('no_telp', $data['no_telp']);
        $this->db->bind('jabatan', $data['jabatan']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function update($data)
    {
        $query = "UPDATE pegawai SET
                    nama_lengkap = :nama_lengkap,
                    alamat = :alamat,
                    no_telp = :no_telp,
                    jabatan = :jabatan
                  WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('nama_lengkap', $data['nama_lengkap']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('no_telp', $data['no_telp']);
        $this->db->bind('jabatan', $data['jabatan']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function delete($id)
    {
        $query = "DELETE FROM pegawai WHERE id = :id";
        
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }
}