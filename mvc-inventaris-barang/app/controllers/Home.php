<?php

class Home extends Controller{

    public function __construct()
    {
        if(!isset($_SESSION['login'])){
            header('Location: '. BASEURL .'/login');
            exit;
        }
    }

    public function index(){
        $data['judul'] = 'Beranda';
        $data['name'] = $this->model('User_model')->getUser();
        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
}