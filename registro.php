<?php

include("db.php");

if($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST["registrar"])){
	$nombre= $_POST["nombre"];
	$correo=$_POST["correo"];
	$contrasena=$_POST["contrasena"];
	$encriptado = password_hash($contrasena, PASSWORD_DEFAULT);

	$query = "INSERT INTO usuario(nombre, correo, contrasena)values('$nombre','$correo','$encriptado')";

	$result = $conn->query($query);

	if($result){
		echo "Usuario registrado";
		header("Location:index.html");
	}
}
?>