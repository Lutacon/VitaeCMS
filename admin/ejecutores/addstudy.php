<?php
require("../../globales.php");
//Incluye la conexión a la base de datos y funciones aquí.  
sec_session_start();
if(login_check($enlace) == true) {
$nombre_estudios = $_POST["nombre_estudios"];	
$nota = $_POST["nota"];	
$centro = $_POST["centro"];	
$fechaacabados = $_POST["fechaacabados"];	
$consultaaddstudy = "INSERT INTO estudios (`nombre`, `nota`, `fechaacabados`, `centro`) VALUES ('".$nombre_estudios."', '".$nota."', 
'".$centro."', '".$fechaacabados."');"; 
mysqli_query($enlace, $consultaaddstudy) ;
header("location: ../index.php?addstudy=ok#estudios");
}
else {header("location: ../conexion.php"); //Redireccionando a la página de login si no estás conectado
}
?>