<?php
//DAO=Data Access Object
require_once 'user.php';
class UserDao{
    private $pdo;

    public function __construct(){
        include 'connection.php';
        $this->pdo=$pdo;
    }

    public function login($user){
        $query = "SELECT * FROM users WHERE Email=? AND Pass=?";
        $sentencia=$this->pdo->prepare($query);
        $email=$user->getEmail();
        $passwd=$user->getPasswd();
        $sentencia->bindParam(1,$email);
        $sentencia->bindParam(2,$passwd);
        $sentencia->execute();
        $result=$sentencia->fetch(PDO::FETCH_ASSOC);
        $numRow=$sentencia->rowCount();
        echo $numRow;
        if(!empty($numRow) && $numRow==1){
            //Creamos la sesión
            $user->setNombre($result['Name']);
            $user->setId($result['Id']);
            session_start();
            $_SESSION['user']=$user;
            return true;
        }else {
            return false;
        }
    }
}

?>