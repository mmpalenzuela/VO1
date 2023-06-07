<?php

class Database {

    private $hostname = "localhost";
    private $database = "intercambio";
    private $username = "raul";
    private $password = "";
    private $charset = "utf8";

    function conectar(){
        
        try{
        $conexion = "mysql:host=" . $this->$hostname . "; dbname="  . $this->$database . "; 
        charset=".  $this->charset;
        options = [
            PDO::ATTR:_ERRMODE => PDO::ERROR_EXCEPTION,
            PDO::ATTR:_EMULATE_PREPARES => PDO:: false
       
        ];

        $pdo = new PDO($conexion, $this->username, $this->password, $this->$options);

        return $pdo;
        catch(PDOException $e){
            echo 'Error conexion: ' . &e->getMessage();
            exit;
        }
    
    
    }
    }
}

?>