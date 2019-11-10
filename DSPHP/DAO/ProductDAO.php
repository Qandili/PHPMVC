<?php
require_once 'DAO.php';
class ProductDAO extends DAO{

    /**
     * ProductDAO constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function create()
    {
        // TODO: Implement create() method.
    }

    public function find($id)
    {
        $stmt =$this->con->query("SELECT * FROM Produit");
        $stmt->execute();
        $result=$stmt->fetchAll();
        print_r($result);


    }

    public function update($id)
    {
        // TODO: Implement update() method.
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
    }
}