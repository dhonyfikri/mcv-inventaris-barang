<?php

class Login extends Controller{
    public function index(){
        $data['judul'] = 'Login';
        $this->view('templates/header_no_nav', $data);
        $this->view('login/index');
        $this->view('templates/footer');
        if(isset($_SESSION['login'])){
            unset($_SESSION['login']);
        }
    }

    public function auth(){
        $data = $this->model('Login_model')->getAuth();
        if($data['jumlah'] > 0){
            $_SESSION['login'] = $data['username'];
            header('Location: '. BASEURL);
            exit;
        } else {
            Flasher::setGeneralFlash('Login gagal, username atau password salah!', 'danger');
            header('Location: '. BASEURL .'/login');
            exit;
        }
    }
}