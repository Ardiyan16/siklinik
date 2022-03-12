<?php

class Pegawai extends Controller
{
    public function index()
    {
        $data['judul'] = 'Master Pegawai';
        $data['pegawai'] = $this->model('Pegawai_model')->getPegawai();
        $data['edit'] = $this->model('Pegawai_model')->getPegawai();
        $this->view('templates/header', $data);
        $this->view('pages/master_pegawai', $data);
        $this->view('templates/footer');
    }

    public function add()
    {
        $data['judul'] = 'Add Pegawai';
        $this->view('templates/header', $data);
        $this->view('pages/add_pegawai');
        $this->view('templates/footer');
    }

    public function save()
    {
        if ($this->model('Pegawai_model')->save($_POST) > 0) {
            Flasher::flashPegawai('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/pegawai');
            exit;
        } else {
            Flasher::flashPegawai('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/pegawai');
            exit;
        }
    }

    public function update()
    {
        if ($this->model('Pegawai_model')->update($_POST) > 0) {
            Flasher::flashPegawai('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/pegawai');
            exit;
        } else {
            Flasher::flashPegawai('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/pegawai');
            exit;
        }
    }

    public function delete($id)
    {
        if ($this->model('Pegawai_model')->delete($id) > 0) {
            Flasher::flashPegawai('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/pegawai');
            exit;
        } else {
            Flasher::flashPegawai('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/pegawai');
            exit;
        }
    }
}