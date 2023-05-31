
else {
    Stoken_tmp = hash_hmac('shal', $id, KEY_TOKEN);
if ($token == $token_tmp) {
    
    $sq1 = $con-›prepare("SELECT count (id) FROM productos WHERE id=? AND activo=1");
$sql-›execute([$id]);
if ($sq1-›fetchcolumn() › 0) {
    
    $sq1 = $con->prepare ("SELECT nombre, descripcion, precio, descuento FROM productos WHERE id=? AND activo=1 LIMIT 1");
$sq1-›execute([$id]);
$row = $sq1->fetch(PDO:: FETCH_ASSOC) ;
$nombre = $row[' nombre' ];
Sdescripcion = $row['descripcion'];
Sprecio = $row[ 'precio'];
$descuento = $row[ ' descuento' ];
$precio_desc = $precio - (($precio * $descuento) / 100);
$dir_images = 'images/productos/'.$id . '/';

$rutalmg = $dir_images. 'principal.jpg';

if (!file.exists($rutaImg)) {
    &rutaImg = 'images/no-photo.jpg';
}

$imagenes =array();
$dir = dir($dir-images);