<?php
require("../../globales.php");
//Incluye la conexión a la base de datos y funciones aquí.  
sec_session_start();
if(login_check($enlace) == true) {
$puesto = $_POST["puesto"];	
$empresa = $_POST["empresa"];	
$years = $_POST["years"];
$descripcion = $_POST["descripcion"];
$imagen = $_POST["imagen"];
$fecha = $_POST["fecha"];
if($_POST["actualidad"] == "on") {
$actualidad = "1";
}
else {
$actualidad = "off";	
}
$consultaaddwork = "INSERT INTO trabajos (`puesto`, `empresa`, `years`, `descripcion`, `imagen`, `fechainicio`, `actualidad`) VALUES ('".$puesto."', '".$empresa."', 
'".$years."', '".$descripcion."', '".$imagen."', '".$fecha."', '".$actualidad."');"; 
mysqli_query($enlace, $consultaaddwork) ;
header("location: ../index.php?addwork=ok#trabajos");
}
else {header("location: ../conexion.php"); //Redireccionando a la página de login si no estás conectado
}
?>