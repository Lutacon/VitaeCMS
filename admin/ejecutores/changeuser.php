<?php
require("../../globales.php");
//Incluye la conexión a la base de datos y funciones aquí.  
sec_session_start();
if(login_check($enlace) == true) {
$nombre = $_POST["nombre"];	
$apellidos = $_POST["apellidos"];	
$lema = $_POST["lema"];
$mail = $_POST["mail"];	
$telefono = $_POST["telefono"];		
$twitterid = $_POST["twitterid"];
$facebookid = $_POST["facebookid"];		
$idvideoyt = $_POST["idvideoyt"];	
$imagenperfil1 = $_POST["imagenperfil1"];	
$imagenperfil2 = $_POST["imagenperfil2"];	
$biografia = $_POST["biografia"];
$idusuario = $_SESSION['idusuario'];
$consultachangeuser ="UPDATE `usuario` SET `nombre`='$nombre',`apellidos`='$apellidos',`lema`='$lema',`mail`='$mail',`telefono`='$telefono',`twitterid`='$twitterid',`facebookid`='$facebookid',`idvideoyt`='$idvideoyt',`imagenperfil1`='$imagenperfil1',`imagenperfil2`='$imagenperfil2',`biografia`='$biografia' WHERE idusuario='$idusuario'";
mysqli_query($enlace, $consultachangeuser) ;
header("location: ../index.php?changeuser=ok#usuario");
}
else {header("location: ../conexion.php"); //Redireccionando a la página de login si no estás conectado
}
?>