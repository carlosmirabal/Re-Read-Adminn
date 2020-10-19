<?php 
    class User {
        //Atributos, siempre en privado
        private $id_user;
        private $nombe;
        private $passwd;
        private $email;

        //Constructor
        public function __construct($email,$passwd){
            $this->email=$email;
            $this->passwd=$passwd;
        }

        //Metodos getters y setters
        public function getNombre() {
            return $this->nombre;
        }
        public function getPasswd() {
            return $this->passwd;
        }
        public function getId() {
            return $this->id_user;
        }
        public function getEmail() {
            return $this->email;
        }

        public function setNombre($nombre){
            $this->nombre=$nombre;
        }
        public function setPasswd($passwd){
            $this->passwd=$passwd;
        }
        public function setId($id_user){
            $this->id_user=$id_user;
        }
        public function setEmail($email){
            $this->email=$email;
        }
    }
?>