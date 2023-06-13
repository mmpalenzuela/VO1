<?php
class Database
{
    private $hostname = "localhost";
    private $database = "producto";
    private $username = "root";
    private $charset = "UTF-8";

    function conectar()
    {
       try{
        $conexion = "mysql:host=" . $this->hostname . "; dbname=". $this->database . "; charset=" . $this->charset;
        $option = [
            PDO: :ATTR_ERRMODE => PDO: :ERRMODE_EXEPTION,
            PDO: :ATTR_EMULATE_PREPARES => false 
        ];

        $pdo = new PDO($conexion, $this->$username, $options);

        return $pdo;
    }catch (PDOException $e) {
        echo 'Error conexion: ' . $e->getMessage();
        exit;
    }
  }
}
?>