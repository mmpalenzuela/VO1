<?php

require 'config/config.php';
require 'config/database.php';
$db = new Database();
$con = $db->conectar();

$sql = $con->prepare("SELECT id, nombre, precio FROM productos WHERE activo=1");
$sql->execute();
$resultado = $sql->fetchALL(PDO::FETCH_ASSOC);

?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Intercambios/Ventas</title>
    <link rel="stylesheet" href="./pag-prod.css">
    <link $sql = "SELECT * FROM `producto`;";>
</head>
<body>
    <header> 
        <a href="#"><img src="./LOGO WEB.png"  class="logo" alt="logo" "></a>
        <div class="header">
            <div class="header-center">
                <a href="http://127.0.0.1:5500/indice/indice.php">Home</a>
                <a href="http://127.0.0.1:5500/Intercambio/intercambio.php">Intercambio</a>
                <a href="http://127.0.0.1:5500/Venta/venta.php">Venta</a>
                <a href="http://127.0.0.1:5500/Contacto/contacto.php">Contacto</a>
            </div>
            <div class="header-right">
                <a href="#login">Registrarse</a>
            </div>
      </div>
      
        
          <div class="cards cards__item">
            <div class="card__image card__image--fence"></div>
          </div>
          <div class="cards__item">
            <div class="card__content">
              <div class="card__title">Flex</div>
              <p class="card__text">This is the shorthand for flex-grow, flex-shrink and flex-basis combined. The second and third parameters (flex-shrink and flex-basis) are optional. Default is 0 1 auto. </p>
              <button class="btn btn--block card__btn">Button</button>
            </div>
          </div>
    </header>

  <body>