<?php

class Obat_model
{
    private $tabel = 'obat';
    private $tindakan = 'tindakan';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getTindakan()
    {
        $this->db->query('SELECT * FROM ' .  $this->tindakan);
        return $this->db->resultSet();
    }

    public function save_tindakan($data)
    {
        $query = "INSERT INTO tindakan
        VALUES
      ('', :tindakan)";

        $this->db->query($query);
        $this->db->bind('tindakan', $data['tindakan']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function update_tindakan($data)
    {
        $query = "UPDATE tindakan SET
                    tindakan = :tindakan
                  WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('tindakan', $data['tindakan']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function delete_tindakan($id)
    {
        $query = "DELETE FROM tindakan WHERE id = :id";
        
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function getObat()
    {
        
        $this->db->query('SELECT * FROM ' .  $this->tabel);
        return $this->db->resultSet();
    }

    public function save($data)
    {
        $query = "INSERT INTO obat
        VALUES
      ('', :nama_obat, :jenis, :usia, :tgl_kadaluarsa)";

        $this->db->query($query);
        $this->db->bind('nama_obat', $data['nama_obat']);
        $this->db->bind('jenis', $data['jenis']);
        $this->db->bind('usia', $data['usia']);
        $this->db->bind('tgl_kadaluarsa', $data['tgl_kadaluarsa']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function update($data)
    {
        $query = "UPDATE obat SET
                    nama_obat = :nama_obat,
                    jenis = :jenis,
                    usia = :usia,
                    tgl_kadaluarsa = :tgl_kadaluarsa
                  WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('nama_obat', $data['nama_obat']);
        $this->db->bind('jenis', $data['jenis']);
        $this->db->bind('usia', $data['usia']);
        $this->db->bind('tgl_kadaluarsa', $data['tgl_kadaluarsa']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function delete($id)
    {
        $query = "DELETE FROM obat WHERE id = :id";
        
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }
}