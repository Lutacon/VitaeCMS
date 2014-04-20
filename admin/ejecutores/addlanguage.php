<?php
require("../../globales.php");
//Incluye la conexión a la base de datos y funciones aquí.  
sec_session_start();
if(login_check($enlace) == true) {
$nombre_idioma = $_POST["nombre_idioma"];	
$nivel = $_POST["nivel"];	
$codigo = $_POST["codigo"];	
$consultaaddlanguage = "INSERT INTO idiomas (`nombre`, `nivel`, `codigo`) VALUES ('".$nombre_idioma."', '".$nivel."', 
'".$codigo."');"; 
mysqli_query($enlace, $consultaaddlanguage) ;
header("location: ../index.php?addlanguage=ok#idioma");
}
else {header("location: ../conexion.php"); //Redireccionando a la página de login si no estás conectado
}
?>