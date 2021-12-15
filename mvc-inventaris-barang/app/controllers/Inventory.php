<?php

class Inventory extends Controller{

    public function __construct()
    {
        if(!isset($_SESSION['login'])){
            header('Location: '. BASEURL .'/login');
            exit;
        }
    }

    public function index(){
        $data['judul'] = 'Halaman Inventaris';
        $data['item'] = $this->model('Inventory_model')->getAllItem();
        $this->view('templates/header', $data);
        $this->view('inventory/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id){
        $data['judul'] = 'Detail Barang';
        $data['item'] = $this->model('Inventory_model')->getItemById($id);
        $this->view('templates/header', $data);
        $this->view('inventory/detail', $data);
        $this->view('templates/footer');
    }

    public function add(){
        if($this->model('Inventory_model')->addItemData($_POST) > 0){
            Flasher::setFlash('Berhasil', 'ditambahkan', 'success');
            header('Location: '. BASEURL .'/inventory');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'ditambahkan', 'danger');
            header('Location: '. BASEURL .'/inventory');
            exit;
        }
    }

    public function delete($id){
        if($this->model('Inventory_model')->deleteItemData($id) > 0){
            Flasher::setFlash('Berhasil', 'dihapus', 'success');
            header('Location: '. BASEURL .'/inventory');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'dihapus', 'danger');
            header('Location: '. BASEURL .'/inventory');
            exit;
        }
    }

    public function getUpdate(){
        echo json_encode($this->model('Inventory_model')->getItemById($_POST['id']));
    }

    public function update(){
        if($this->model('Inventory_model')->updateItemData($_POST) > 0){
            Flasher::setFlash('Berhasil', 'diubah', 'success');
            header('Location: '. BASEURL .'/inventory');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'diubah', 'danger');
            header('Location: '. BASEURL .'/inventory');
            exit;
        }
    }

    public function search(){
        $data['judul'] = 'Hasil Pencarian';
        $data['item'] = $this->model('Inventory_model')->searchItemData();
        $data['current_keyword'] = $_POST['keyword'];
        $data['current_filter'] = $_POST['filter'];
        $this->view('templates/header', $data);
        $this->view('inventory/index', $data);
        $this->view('templates/footer');
    }
}