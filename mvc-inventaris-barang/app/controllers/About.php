<?php

class About extends Controller{

    public function __construct()
    {
        if(!isset($_SESSION['login'])){
            header('Location: '. BASEURL .'/login');
            exit;
        }
    }

    public function index($name = 'Muhamad Fikri Rizki Romadhoni', $job = 'Mahasiswa'){
        $data['name'] = $name;
        $data['job'] = $job;
        $data['judul'] = 'About';
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }
}