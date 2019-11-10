<?php
require_once "DAO/ClientDAO.php";
require_once "Classes/Config.php";
class LoginController extends Controller{

    private $clientDAO;

    /**
     * LoginController constructor.
     * @param $ClientDAO
     */
    public function __construct()
    {
        $this->clientDAO = new ClientDAO();
    }

    public function login(){
        session_start();
        if (isset($_POST["email"]) and isset($_POST["password"])){
            $email=$_POST["email"];
            $password=$_POST["password"];
            if($this->clientDAO->login($email,$password)){
                $_SESSION['useremail'] = $email;
                echo "logged";
                Config::Redirect(Config::$BASE_URL.'home');
            }else{
                Config::Redirect(Config::$BASE_URL.'Login');
            }
        }
    }
    public function logout(){
        session_start();
        $_SESSION["useremail"]=null;
        Config::Redirect(Config::$BASE_URL.'Login');
    }

}

?>