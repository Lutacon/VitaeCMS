<?php
//Definimos subcarpeta
$dirtrabajo = dirname(__FILE__);
if(!$dirtrabajo)
{
	$dirtrabajo = '.';
}
//Cargamos configuración personalizada
require($dirtrabajo."/config.php");
require($dirtrabajo."/funciones.php");
$archivo_actual = $_SERVER['SCRIPT_NAME'];
$archivo_instalacion = "install.php";
if($archivo_actual == $archivo_instalacion) {}
else {
//Conectamos a la BD
$enlace =  mysqli_connect($servidorbd, $usuariobd, $clavebd, $nombrebd);
if ($enlace->connect_errno) {
     printf("Conexión fallida: %s\n", $mysqli->connect_error);
    exit();
}
}
//Cargamos el estilo por defecto que usará el usuario
$consultaestilosql = "SELECT `idconf`, `colorprincipal`, `colorsecundario`, `tema` FROM `configuracionmod` WHERE idconf='1'";
$consultaestilofinal = mysqli_query($enlace, $consultaestilosql);
$datosestilo =  mysqli_fetch_array($consultaestilofinal, MYSQLI_BOTH);
$colorprincipal = $datosestilo['colorprincipal'];
$colorsecundario = $datosestilo['colorsecundario'];
$tema = $datosestilo['tema'];
//Cargamos el sistema Smarty
require ('libs/Smarty.class.php');
$smarty = new Smarty;
//$smarty->force_compile = true;
$smarty->caching = false;
$smarty->cache_lifetime = 120;
$smarty->template_dir = $dirtrabajo."/plantillas/";
$smarty->compile_dir = $dirtrabajo."/plantillas_c/";
$smarty->config_dir = $dirtrabajo."/configs/";
$smarty->cache_dir = $dirtrabajo."/cache/";
//Variables útiles en plantillas Smarty
$smarty->assign('metaidioma', '<meta charset="UTF-8">');
//Variables Bootstrap en plantillas Smarty
$smarty->assign('metaresponsive', '<meta name="viewport" content="width=device-width, initial-scale=1">');
$smarty->assign('metaxua', '<meta http-equiv="X-UA-Compatible" content="IE=edge">'); 
?>