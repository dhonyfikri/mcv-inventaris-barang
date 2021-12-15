<?php

class Inventory_model{
    private $table = 'barang';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllItem(){
        $this->db->query('SELECT * FROM '. $this->table .' ORDER BY id DESC');
        return $this->db->resultSet();
    }

    public function getItemById($id){
        $this->db->query('SELECT * FROM '. $this->table .' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function addItemData($data){
        $query = "INSERT INTO " . $this->table . " VALUES ('', :name, :sku, :category, :price, :stock)";
        $this->db->query($query);
        $this->db->bind('name', $data['name']);
        $this->db->bind('sku', $data['sku']);
        $this->db->bind('category', $data['category']);
        $this->db->bind('price', $data['price']);
        $this->db->bind('stock', $data['stock']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function deleteItemData($id){
        $query = "DELETE FROM " . $this->table . " WHERE id=:id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function updateItemData($data){
        $query = "UPDATE ". $this->table ." SET nama=:name, sku=:sku, kategori=:category, harga_satuan=:price, stok=:stock WHERE id=:id";
        $this->db->query($query);
        $this->db->bind('name', $data['name']);
        $this->db->bind('sku', $data['sku']);
        $this->db->bind('category', $data['category']);
        $this->db->bind('price', $data['price']);
        $this->db->bind('stock', $data['stock']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function searchItemData(){
        $keyword = $_POST['keyword'];
        $filter = $_POST['filter'];
        $query = "SELECT * FROM ". $this->table ." WHERE ". $filter ." LIKE :keyword ORDER BY id DESC";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }
}