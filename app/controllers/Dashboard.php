<?php

class Dashboard extends Controller
{
    public function index()
    {
        $data['judul'] = 'Admin-Dashboard';
        $this->view('templates/header', $data);
        $this->view('pages/dashboard');
        $this->view('templates/footer');
    }

    public function page()
    {
        $data['judul'] = 'Pages';
        $this->view('templates/header', $data);
        $this->view('about/page');
        $this->view('templates/footer');
    }

    public function tindakan()
    {
        $data['judul'] = 'Master Tindakan';
        $data['tindakan'] = $this->model('Obat_model')->getTindakan();
        $data['edit'] = $this->model('Obat_model')->getTindakan();
        $this->view('templates/header', $data);
        $this->view('pages/master_tindakan', $data);
        $this->view('templates/footer');
    }

    public function save_tindakan()
    {
        if ($this->model('Obat_model')->save_tindakan($_POST) > 0) {
            Flasher::flashTindakan('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/dashboard/tindakan');
            exit;
        } else {
            Flasher::flashTindakan('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/dashboard/tindakan');
            exit;
        }
    }

    public function update_tindakan()
    {
        if ($this->model('Obat_model')->update_tindakan($_POST) > 0) {
            Flasher::flashTindakan('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/dashboard/tindakan');
            exit;
        } else {
            Flasher::flashTindakan('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/dashboard/tindakan');
            exit;
        }
    }

    public function delete_tindakan($id)
    {
        if ($this->model('Obat_model')->delete_tindakan($id) > 0) {
            Flasher::flashTindakan('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/dashboard/tindakan');
            exit;
        } else {
            Flasher::flashTindakan('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/dashboard/tindakan');
            exit;
        }
    }

}
