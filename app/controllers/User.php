<?php

class User extends Controller
{
    public function index()
    {
        $data['judul'] = 'Master User';
        $data['user'] = $this->model('User_model')->getUser();
        $data['edit'] = $this->model('User_model')->getUser();
        $this->view('templates/header', $data);
        $this->view('pages/master_user', $data);
        $this->view('templates/footer');
    }

    public function add_user()
    {
        $data['judul'] = 'Add User';
        $this->view('templates/header', $data);
        $this->view('pages/add_user');
        $this->view('templates/footer');
    }

    public function save()
    {
        if ($this->model('User_model')->save_user($_POST) > 0) {
            Flasher::flashUser('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/user');
            exit;
        } else {
            Flasher::flashUser('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/user');
            exit;
        }
    }

    public function update()
    {
        if ($this->model('User_model')->update_user($_POST) > 0) {
            Flasher::flashUser('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/user');
            exit;
        } else {
            Flasher::flashUser('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/user');
            exit;
        }
    }

    public function delete($id)
    {
        if ($this->model('User_model')->delete_user($id) > 0) {
            Flasher::flashUser('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/user');
            exit;
        } else {
            Flasher::flashUser('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/user');
            exit;
        }
    }
}
