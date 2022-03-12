<?php

class Wilayah extends Controller
{
    public function index()
    {
        $data['judul'] = 'Master Wilayah';
        $data['wilayah'] = $this->model('Wilayah_model')->getWilayah();
        $data['edit'] = $this->model('Wilayah_model')->getWilayah();
        $this->view('templates/header', $data);
        $this->view('pages/master_wilayah', $data);
        $this->view('templates/footer');
    }

    public function add()
    {
        $data['judul'] = 'Add Wilayah';
        $this->view('templates/header', $data);
        $this->view('pages/add_wilayah');
        $this->view('templates/footer');
    }

    public function save()
    {
        if ($this->model('Wilayah_model')->save($_POST) > 0) {
            Flasher::flashWilayah('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/wilayah');
            exit;
        } else {
            Flasher::flashWilayah('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/wilayah');
            exit;
        }
    }

    public function update()
    {
        if ($this->model('Wilayah_model')->update($_POST) > 0) {
            Flasher::flashWilayah('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/wilayah');
            exit;
        } else {
            Flasher::flashWilayah('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/wilayah');
            exit;
        }
    }

    public function delete($id)
    {
        if ($this->model('Wilayah_model')->delete($id) > 0) {
            Flasher::flashWilayah('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/wilayah');
            exit;
        } else {
            Flasher::flashWilayah('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/wilayah');
            exit;
        }
    }
}