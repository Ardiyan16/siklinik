<?php

class Obat extends Controller
{
    public function index()
    {
        $data['judul'] = 'Master User';
        $data['obat'] = $this->model('Obat_model')->getObat();
        $data['edit'] = $this->model('Obat_model')->getObat();
        $this->view('templates/header', $data);
        $this->view('pages/master_obat', $data);
        $this->view('templates/footer');
    }

    public function add()
    {
        $data['judul'] = 'Add User';
        $this->view('templates/header', $data);
        $this->view('pages/add_obat');
        $this->view('templates/footer');
    }

    public function save()
    {
        if ($this->model('Obat_model')->save($_POST) > 0) {
            Flasher::flashObat('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/obat');
            exit;
        } else {
            Flasher::flashObat('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/obat');
            exit;
        }
    }

    public function update()
    {
        if ($this->model('Obat_model')->update($_POST) > 0) {
            Flasher::flashObat('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/obat');
            exit;
        } else {
            Flasher::flashObat('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/obat');
            exit;
        }
    }

    public function delete($id)
    {
        if ($this->model('Obat_model')->delete($id) > 0) {
            Flasher::flashObat('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/obat');
            exit;
        } else {
            Flasher::flashObat('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/obat');
            exit;
        }
    }
}