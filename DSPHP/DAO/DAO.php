<?php

abstract class DAO{

    protected $con;
    /**
     * DAO constructor.
     */

    function __construct()
    {
        $this->con = new PDO('mysql:host=localhost;dbname=DSPHP','root','');
    }

    /**
     * @return PDO
     */
    public function getCon()
    {
        return $this->con;
    }

    /**
     * @param PDO $con
     */
    public function setCon($con)
    {
        $this->con = $con;
    }

    public abstract function create();
    public abstract function find($id);
    public abstract function update($id);
    public abstract function delete($id);

}
