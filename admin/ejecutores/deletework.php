<?php
require("../../globales.php");
//Incluye la conexión a la base de datos y funciones aquí.  
sec_session_start();
if(login_check($enlace) == true) {
$idborrar = $_POST["idborrar"];
	$sql = "delete from trabajos where idtrabajo = '$idborrar'"; 
	mysqli_query($enlace, $sql) ;
	header("location: ../index.php?deletework=ok#trabajos");
}
else {header("location: ../conexion.php"); //Redireccionando a la página de login si no estás conectado
}
?>