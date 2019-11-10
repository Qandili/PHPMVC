<?php
require_once 'DAO.php';
class ClientDAO extends DAO {

    /**
     * ProductDAO constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function login($email,$password){

        $stmt =$this->con->prepare("SELECT * FROM Client WHERE email=? and password=?");
        $stmt->execute(array($email,$password));
        $result=$stmt->fetchAll();
        if (count($result)>0){
            return true;
        }
        return false;
    }

    public function create()
    {
        // TODO: Implement create() method.
    }

    public function find($id)
    {
        $stmt =$this->con->query("SELECT * FROM Client");
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