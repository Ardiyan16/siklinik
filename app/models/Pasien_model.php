<?php

class Pasien_model
{
    private $tabel = 'pasien';
    private $penanganan = 'penanganan';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getPasien()
    {
        $this->db->query('SELECT * FROM pasien LEFT JOIN users ON pasien.no_rekmed = users.no_rm');
        return $this->db->resultSet();
    }

    public function getPasien2()
    {
        $this->db->query('SELECT * FROM ' . $this->tabel);
        return $this->db->resultSet();
    }

    public function by_user($id)
    {
        return $this->db->query("SELECT * FROM `users` WHERE id='" . $id . "' LIMIT 1");
    }

    public function save($data)
    {
        $query = "INSERT INTO pasien
        VALUES
      ('', :no_rekmed, :jk, :usia)";

        $this->db->query($query);
        $this->db->bind('no_rekmed', $data['no_rekmed']);
        $this->db->bind('jk', $data['jk']);
        $this->db->bind('usia', $data['usia']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function update($data)
    {
        $query = "UPDATE pasien SET
                    no_rekmed = :no_rekmed,
                    jk = :jk,
                    usia = :usia
                  WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('no_rekmed', $data['no_rekmed']);
        $this->db->bind('jk', $data['jk']);
        $this->db->bind('usia', $data['usia']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function delete($id)
    {
        $query = "DELETE FROM pasien WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function getPenanganan()
    {
        $this->db->query('SELECT * FROM (penanganan LEFT JOIN users ON penanganan.no_rekmed = users.no_rm) LEFT JOIN tindakan ON penanganan.id_tindakan = tindakan.id LEFT JOIN obat ON penanganan.id_obat = obat.id;');
        return $this->db->resultSet();
    }

    public function getPenanganan2()
    {
        $this->db->query('SELECT * FROM ' . $this->penanganan);
        return $this->db->resultSet();
    }

    public function save_penanganan($data)
    {
        $query = "INSERT INTO penanganan
        VALUES
      ('', :id_tindakan, :no_rekmed, :id_obat, :keterangan)";

        $this->db->query($query);
        $this->db->bind('id_tindakan', $data['id_tindakan']);
        $this->db->bind('no_rekmed', $data['no_rekmed']);
        $this->db->bind('id_obat', $data['id_obat']);
        $this->db->bind('keterangan', $data['keterangan']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function update_penanganan($data)
    {
        $query = "UPDATE penanganan SET
                    id_tindakan = :id_tindakan,
                    no_rekmed = :no_rekmed,
                    id_obat = :id_obat,
                    keterangan = :keterangan
                  WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('id_tindakan', $data['id_tindakan']);
        $this->db->bind('no_rekmed', $data['no_rekmed']);
        $this->db->bind('id_obat', $data['id_obat']);
        $this->db->bind('keterangan', $data['keterangan']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();
    }
}
