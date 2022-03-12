<?php

class Pasien extends Controller
{
    public function index()
    {
        $data['judul'] = 'Master Pasien';
        $data['pasien'] = $this->model('Pasien_model')->getPasien();
        $data['user'] = $this->model('User_model')->getUser();
        $data['edit'] = $this->model('Pasien_model')->getPasien2();
        $this->view('templates/header', $data);
        $this->view('pages/pendaftaran_pasien', $data);
        $this->view('templates/footer');
    }

    public function save()
    {
        if ($this->model('Pasien_model')->save($_POST) > 0) {
            Flasher::flashPasien('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/pasien');
            exit;
        } else {
            Flasher::flashPasien('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/pasien');
            exit;
        }
    }

    public function update()
    {
        if ($this->model('Pasien_model')->update($_POST) > 0) {
            Flasher::flashPasien('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/pasien');
            exit;
        } else {
            Flasher::flashPasien('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/pasien');
            exit;
        }
    }

    public function delete($id)
    {
        if ($this->model('Pasien_model')->update($id) > 0) {
            Flasher::flashPasien('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/pasien');
            exit;
        } else {
            Flasher::flashPasien('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/pasien');
            exit;
        }
    }

    public function by_user($id)
    {
        $data = $this->model('Pasien_model')->by_user($id);
        json_encode($data);
    }

    public function penanganan()
    {
        $data['judul'] = 'Master Penanganan';
        $data['penanganan'] = $this->model('Pasien_model')->getPenanganan();
        $data['pasien'] = $this->model('Pasien_model')->getPasien();
        $data['tindakan'] = $this->model('Obat_model')->getTindakan();
        $data['obat'] = $this->model('Obat_model')->getObat();
        $data['edit'] = $this->model('Pasien_model')->getPenanganan();
        $this->view('templates/header', $data);
        $this->view('pages/penanganan', $data);
        $this->view('templates/footer');
    }

    public function save_penanganan()
    {
        if ($this->model('Pasien_model')->save_penanganan($_POST) > 0) {
            Flasher::flashPenanganan('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/pasien/penanganan');
            exit;
        } else {
            Flasher::flashPenanganan('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/pasien/penanganan');
            exit;
        }
    }

    public function update_penanganan()
    {
        if ($this->model('Pasien_model')->update_penanganan($_POST) > 0) {
            Flasher::flashPenanganan('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/pasien/penanganan');
            exit;
        } else {
            Flasher::flashPenanganan('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/pasien/penanganan');
            exit;
        }
    }

}