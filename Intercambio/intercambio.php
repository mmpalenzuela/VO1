<?php

require 'conf/database.php';
$db = new Database();
$con = $db->conectar();

$sql = $con->prepare("SELECT id, nombre, precio FROM productos WHERE activo=1");
$sql->execute();
$resultado = $sql->fetchALL(PDO::Fetch_ASSOC);

?>

<?php foreach($resultado as $row){ ?>


<?php } ?>