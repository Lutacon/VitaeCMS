<?php
require("globales.php");
sec_session_start();
if(login_check($enlace) == true) {
  header("location: admin/index.php"); //Redireccionando a la página de admin si ya está logueado
} 
$errorlogin = "false";
if(isset($_GET["error"])){
	$errorlogin=$_GET["error"]; 
}
if($errorlogin == "true") {
$smarty->display('conexionerror.tpl');	
}
else {
$smarty->display('conexion.tpl');
}
?>