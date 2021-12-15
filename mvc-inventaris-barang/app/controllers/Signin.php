<?php

class Signin extends Controller{
    public function index(){
        $data['judul'] = 'Signin';
        $this->view('templates/header_no_nav', $data);
        $this->view('signin/index');
        $this->view('templates/footer');
    }

    public function register(){
        $data = $this->model('Signin_model')->isNotExistUsername();
        if($data['jumlah'] == 0){
            if($this->model('Signin_model')->addUserData() > 0){
                $_SESSION['login'] = $_POST['username'];
                header('Location: '. BASEURL);
                exit;
                return;
            } else {
                Flasher::setGeneralFlash('Registrasi gagal. Masalah pada koneksi atau konfigurasi.', 'danger');
            }
        } else {
            Flasher::setGeneralFlash('Username telah digunakan, coba yang lainnya...', 'danger');
        }
        header('Location: '. BASEURL .'/signin');
        exit;
    }
}