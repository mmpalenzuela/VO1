<?php

$server = "localhost";
$user = "root";
$pass = "";
$db = "intercambio";

$conexion = new mysqli($server, $user, $pass, $db);

if ($conexion->connect_erno) {
    die("conexion fallida" . $conexion->connect_erno);
}
 else {
    echo "conectado";

}



?>