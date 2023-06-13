<?php

require 'config/venta.php';
$db = new Database();
$con = $db->conectar();

$sql = $con->prepare("SELECT id, nombre, precio FROM productos WHERE activo=1");
$sql->execute();
$resultado = $sql->fetchAll(PDO::FETCH_ASSOC);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Intercambios/Ventas</title>
    <link rel="stylesheet" href="./venta.css">
</head>
<body>
    <header> 
        <a href="#"><img src="./imagenes/LOGO WEB.png"  class="logo" alt="logo" "></a>
        <div class="header">
            <div class="header-center">
                <a href="http://127.0.0.1:5500/indice/indice.php">Home</a>
                <a  href="http://127.0.0.1:5500/Intercambio/intercambio.php">Intercambio</a>
                <a class="active" href="http://127.0.0.1:5500/Venta/venta.php">Venta</a>
                <a href="http://127.0.0.1:5500/Contacto/contacto.php">Contacto</a>
            </div>
            <div class="header-right">
                <a href="#login">Registrarse</a>
            </div>
      </div>
    </header>

  <body>
    
  
  
<ul class="cards">
  <li class="cards__item">
    <div class="card">
    <?php foreach($resultado as $row) { ?>
      <div class="card__image card__image--fence"></div>
      <?php

        $id = $row['id'];
        $imagen = "./imagenes/" . $id . "/bolis.jpg";

        if(!file_exists($imagen)){
          $imagen = "imagenes/LOGO WEB.png";
        }

      ?>
      <img src="<?php echo $imagen; ?>">
      <div class="card__content">
        <h5 class="card-title"><?php echo $row['nombre']; ?></h5>
        <p class="card-text">$ <?php echo number_format($row['precio'], 2, '.', '.'); ?></p>
        <div class="card__title">Flex</div>
        <p class="card__text">This is the shorthand for flex-grow, flex-shrink and flex-basis combined. The second and third parameters (flex-shrink and flex-basis) are optional. Default is 0 1 auto. </p>
        <button class="btn btn--block card__btn">Button</button>
      </div>
    <?php } ?>
    </div>
  </li>
  <li class="cards__item">
    <div class="card">
      <div class="card__image card__image--river"></div>
      <div class="card__content">
        <div class="card__title">Flex Grow</div>
        <p class="card__text">This defines the ability for a flex item to grow if necessary. It accepts a unitless value that serves as a proportion. It dictates what amount of the available space inside the flex container the item should take up.</p>
        <button class="btn btn--block card__btn">Button</button>
      </div>
    </div>
  </li>
  <li class="cards__item">
    <div class="card">
      <div class="card__image card__image--record"></div>
      <div class="card__content">
        <div class="card__title">Flex Shrink</div>
        <p class="card__text">This defines the ability for a flex item to shrink if necessary. Negative numbers are invalid.</p>
        <button class="btn btn--block card__btn">Button</button>
      </div>
    </div>
  </li>
  <li class="cards__item">
    <div class="card">
      <div class="card__image card__image--flowers"></div>
      <div class="card__content">
        <div class="card__title">Flex Basis</div>
        <p class="card__text">This defines the default size of an element before the remaining space is distributed. It can be a length (e.g. 20%, 5rem, etc.) or a keyword. The auto keyword means "look at my width or height property."</p>
        <button class="btn btn--block card__btn">Button</button>
      </div>
    </div>
  </li>
</ul>

</body>
  </html>