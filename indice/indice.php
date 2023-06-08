<?php
    session_start();
    if(!isset($_SESSION['usuario'])){
        echo '
            <script> 
                alert("Por favor debes iniciar sesión");
            </script>     
        ';
        header("location: ../login_register/inicio.php");
        session_destroy();
        die();
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Intercambios/Ventas</title>
    <link rel="stylesheet" href="indice.css">
</head>
<body>
    <header> 
        <a href="#"><img src="./IMG/LOGO WEB.png"  class="logo" alt="logo" "></a>
        <div class="header">
            <div class="header-center">
                <a class="active" href="http://127.0.0.1:5500/indice/indice.html">Home</a>
                <a href="http://127.0.0.1:5500/Intercambio/intercambio.html">Intercambio</a>
                <a href="http://127.0.0.1:5500/Venta/venta.html">Venta</a>
                <a href="http://127.0.0.1:5500/Contacto/contacto.html">Contacto</a>
                <a href="../login_register/inicio.php">Cerrar sesión</a>
            </div>
            <div class="header-right">
                <a href="#login">Registrarse</a>
            </div>
      </div>
    </header>
    <main>
        <div class="banner">
            <p class="title_banner">INTERCAMBIOS EXPRESS <br>VENTA E INTERCAMBIO DE OBJETOS</p>
            <a class="text_banner" href="https://www.iesemilidarder.com/web/">IES EMILI DARDER</a>
        </div> 

        <div class="banner_2">
          <h1>Sobre INTERCAMBIOS EXPRESS</h1>
    <p>Intercambios EXPRESS es una beta de un proyecto de final de curso. El cual involucra todos los lenguajes de programación dados en la optativa de Tratamiento de Datos 1. En esta web cada persona puede publicar objetos ya sea de manera gratis o con un determinado precio. Cabe decir que es uso exclusivo para alumnos los cuales estudian en las instalaciones del IES Emili Darder.</p>
        </div>

        <div class="fila">
            <div class="columna">
              <div class="bordes">
                <div class="container">
                  <h2 class="title_principal">INTERCAMBIO</h2>
                  <p class="title"><b>NO DINERO</b></p>
                  <p>Intercambia objetos por otros objetos <b>gratis</b></p>
                  <p><button class="button">INTERCAMBIAR</button></p>
                </div>
              </div>
            </div>

            <div class="columna">
              <div class="bordes">
                <div class="container">
                  <h2 class="title_principal">VENTA</h2>
                  <p class="title"><b>SI DINERO</b></p>
                  <p><b>Compra</b> y <b>vende</b> objetos </p>
                  <p><button class="button">VENDER</button></p>
                </div>
              </div>
            </div>
          </div>        
    </main>
  
  <footer>
      <div class="footer">
        <div class="gird_container_footer">
            <ul>
              <p><b>Encuentranos Aqui</b></p>
                <iframe class="maps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3074.904706028174!2d2.630234475911077!3d39.58429800588321!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x129792897cb4adfd%3A0x2ae3087f5b4b21a2!2sIES%20Emili%20Darder!5e0!3m2!1ses!2ses!4v1685433820800!5m2!1ses!2ses" width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </ul>
              <ul class="links">
                <p class="title-footer"><b>Contacto Directo</b></p>
                <li class="ref."><a href="#"><img src="./IMG/LOGO WEB.png" alt="Avatar" class="avatar">Bruno Mayfiled</a></li>
                <li class="ref."><a href="#"><img src="./IMG/LOGO WEB.png " alt="Avatar" class="avatar">Justin Ricard</a></li>
                <li class="ref."><a href="#"><img src="./IMG/LOGO WEB.png " alt="Avatar" class="avatar">Pau Mir</a></li>
                <li class="ref."><a href="#"><img src="./IMG/LOGO WEB.png " alt="Avatar" class="avatar">Miquel Mas</a></li>
              </ul>
              <ul class="links">
                <p class="title-footer"><b>Contacto Directo</b></p>
                <li class="ref."><a href="#"><img src="./IMG/LOGO WEB.png " alt="Avatar" class="avatar">Raul Palenzuela</a></li>
                <li class="ref."><a href="#"><img src="./IMG/LOGO WEB.png" alt="Avatar" class="avatar">Tristan Jimenez</a></li>
                <li class="ref."><a href="#"><img src="./IMG/LOGO WEB.png " alt="Avatar" class="avatar">Niki Stefanov</a></li>
                <li class="ref."><a href="#"><img src="./IMG/LOGO WEB.png " alt="Avatar" class="avatar">Benjamín Pallarés</a></li>
              </ul> 
        </div>
      </div>
      
        <div class="bottom-footer">
        <p class="CopyRight">CopyRight 2023</p>
      </div>
  </footer>

</body>
</html>