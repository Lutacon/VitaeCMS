<?php
//Definimos subcarpeta
$dirtrabajo = dirname(__FILE__);
if(!$dirtrabajo)
{
	$dirtrabajo = '.';
}
//Cargamos configuración personalizada
$archivo_actual = $_SERVER['SCRIPT_NAME'];
$archivo_instalacion = "install.php";
//Cargamos el sistema Smarty
require ('../libs/Smarty.class.php');
$smarty = new Smarty;
//$smarty->force_compile = true;
$smarty->caching = false;
$smarty->cache_lifetime = 120;
$smarty->template_dir = "../plantillas/";
$smarty->compile_dir = "../plantillas_c/";
$smarty->config_dir = "../configs/";
$smarty->cache_dir = "../cache/";
//Variables útiles en plantillas Smarty
$smarty->assign('metaidioma', '<meta charset="UTF-8">');
//Variables Bootstrap en plantillas Smarty
$smarty->assign('metaresponsive', '<meta name="viewport" content="width=device-width, initial-scale=1">');
$smarty->assign('metaxua', '<meta http-equiv="X-UA-Compatible" content="IE=edge">'); 