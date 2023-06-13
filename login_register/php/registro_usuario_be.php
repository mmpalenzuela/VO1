<?php
    include 'conexion_be.php';

    $nombre_completo = $_POST ['nombre_completo'];
    $correo = $_POST ['correo'];
    $usuario = $_POST ['usuario'];
    $password = $_POST ['password'];

    //Encriptamiento de la contraseña
    $password= hash('sha512',$password);

    $query = "INSERT INTO usuarios(nombre_completo,correo,usuario,password)
            VALUES('$nombre_completo', '$correo','$usuario','$password')";

    //Verificacion para que los correos no se repiten 
    $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo'");

    if(mysqli_num_rows($verificar_correo)>0){
        echo '
        <script>
            alert("Este correo ya esta registrado, intenta con otro diferente");
            window.location = "../inicio.php";
        </script>
        ';
        mysqli_close($conexion);
        exit();
    }

    //Verificacion para que los usuarios no se repiten 
    $verificar_usuario= mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$usuario'");

    if(mysqli_num_rows($verificar_usuario)>0){
        echo '
        <script>
            alert("Este usuario ya esta registrado, intenta con otro diferente");
            window.location = "../inicio.php";
        </script>
        ';
        mysqli_close($conexion);
        exit();
    }

    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo '
            <script>
            alert("Usuario registrado exsitosamente");
            window.location = "../../indice/indice.php";
            </script>
            ';
    }else{
        echo '
        <script>
        alert("Inténtelo de nuevo, usuario no almacenado");
        window.location = "../index.php";
        </script>
        ';
    }

    mysqli_close($conexion);
?>