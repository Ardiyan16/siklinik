<?php

class Login extends Controller
{

    public function index()
    {
        $this->view('auth/login');
    }

    public function action()
    {
        $this->model('User_model')->login();
    }

    public function logout()
    {
        $this->model('User_model')->logout();
    }
}
