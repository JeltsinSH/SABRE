<?php

include("db.php");

if($_SERVER["REQUEST_METHOD"]=="POST" and isset($_POST["ingresar"])){
    $correo = $_POST["correo"];
    $contrasena = $_POST["contrasena"];

    $query = "SELECT contrasena from usuario where correo='$correo'";

    $result=$conn->query($query);

    if($result->num_rows>0){
        $row = $result->fetch_assoc();

        $encriptado = $row["contrasena"];

        if(password_verify($contrasena, $encriptado)){
            echo "Inicio de sesión exitoso";
        }else{
            echo "Contraseña incorrecta";
        }
    }else{
        echo "Correo o contraseña son incorrectos";
    }
}

?>