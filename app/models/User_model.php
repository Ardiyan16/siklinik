<?php

class User_model
{
    private $tabel = 'users';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getUser()
    {
        $this->db->query('SELECT * FROM ' .  $this->tabel);
        return $this->db->resultSet();
    }

    public function login()
    {
        session_start();
        $koneksi = mysqli_connect("localhost", "root", "", "klinik");
        $username = $_POST['username'];
        $password = $_POST['password'];

        $login = mysqli_query($koneksi, "SELECT * FROM users where username='$username' and password='$password'");
        $cek = mysqli_num_rows($login);

        if ($cek > 0) {
            mysqli_connect($koneksi, "SELECT * FROM users WHERE password='$password' AND username='$username'");

            $data = mysqli_fetch_assoc($login);
            if ($data['role_id'] == "1") {
                $_SESSION['username'] = $_POST['username'];
                $_SESSION['no_rm'] = $_POST['no_rm'];
                header('Location: ' . BASEURL . '/dashboard');
                exit;
            } else if ($data['role_id'] == "2") {
                $_SESSION['username'] = $_POST['username'];
                $_SESSION['no_rm'] = $_POST['no_rm'];
                header('Location: ' . BASEURL . '/mahasiswa');
                exit;
            } else {
                Flasher::setFlash('anda', 'salah', 'danger');
                header('Location: ' . BASEURL . '/login');
                exit;
            }
        } else {
            Flasher::setFlash('anda', 'salah', 'danger');
            header('Location: ' . BASEURL . '/login');
            exit;
        }
    }

    public function logout()
    {
        session_unset();
        session_destroy();

        header('Location: ' . BASEURL . '/login');
        exit;
    }

    public function save_user($data)
    {
        $query = "INSERT INTO users
        VALUES
      ('', :no_rm, :nama, :tempat_lahir, :tgl_lahir, :username, :password, :role_id)";

        $this->db->query($query);
        $this->db->bind('no_rm', $data['no_rm']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('tempat_lahir', $data['tempat_lahir']);
        $this->db->bind('tgl_lahir', $data['tgl_lahir']);
        $this->db->bind('username', $data['no_rm']);
        $this->db->bind('password', $data['password']);
        $this->db->bind('role_id', 2);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function update_user($data)
    {
        $query = "UPDATE users SET
                    no_rm = :no_rm,
                    nama = :nama,
                    tempat_lahir = :tempat_lahir,
                    tgl_lahir = :tgl_lahir,
                    username = :username,
                    password = :password,
                    role_id = :role_id
                  WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('no_rm', $data['no_rm']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('tempat_lahir', $data['tempat_lahir']);
        $this->db->bind('tgl_lahir', $data['tgl_lahir']);
        $this->db->bind('username', $data['no_rm']);
        $this->db->bind('password', $data['password']);
        $this->db->bind('role_id', 2);
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function delete_user($id)
    {
        $query = "DELETE FROM users WHERE id = :id";
        
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }
}
