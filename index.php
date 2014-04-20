<?php
require('globales.php');
//Consultamos los datos del usuario
$sqlusuario = "SELECT `nombre`, `apellidos`, `lema`, `mail`, `telefono`, `twitterid`, `facebookid`, `idvideoyt`, `imagenperfil1`, `imagenperfil2`, `biografia` FROM `usuario` WHERE idusuario='admin'";
$consultausuario = mysqli_query($enlace, $sqlusuario);
//Obtenemos los datos de la consulta "sqlusuario" y los introducimos como arrays, además los añadimos al sistema de plantillas Smarty
$datosusuario = mysqli_fetch_array($consultausuario, MYSQLI_BOTH);
$smarty->assign('nombreusuario',$datosusuario['nombre']);
$smarty->assign('apellidosusuario',$datosusuario['apellidos']);
$smarty->assign('lemausuario',$datosusuario['lema']);
$smarty->assign('mailusuario',$datosusuario['mail']);
$smarty->assign('telefonousuario',$datosusuario['telefono']);
$smarty->assign('twitterid',$datosusuario['twitterid']);
$smarty->assign('facebookid',$datosusuario['facebookid']);
if($datosusuario['idvideoyt'] == "") {
$smarty->assign('colsivideo','12');
$smarty->assign('colsivideo2','0');
$smarty->assign('idvideoyt','');	
}
else {
	$smarty->assign('colsivideo','6');
	$smarty->assign('colsivideo2','6');
	$smarty->assign('idvideoyt','<h4 class="titulossubsecciones">Presentación visual</h4>
	<div class="idyt"><iframe id="ytplayer" type="text/html" width="100%" height="250"
  src="http://www.youtube.com/embed/'.$datosusuario["idvideoyt"].'?autoplay=0&modestbranding=1&showsearch=0&rel=0"
  frameborder="0"/></iframe></div>');
	}
$smarty->assign('imagenperfil1',$datosusuario['imagenperfil1']);
$smarty->assign('imagenperfil2',$datosusuario['imagenperfil2']);
$smarty->assign('biografia',$datosusuario['biografia']);
$smarty->assign('colorprincipal',$colorprincipal);
$smarty->assign('colorsecundario',$colorsecundario);
$smarty->assign('tema',$tema);
//Preparamos las consultas de estudios
$numeroescalar2 = 1;
	$consultaestudiossql = "SELECT `nombre`, `nota`, `fechaacabados`, `centro` FROM `estudios`";
	$consultaestudiosfinal = $enlace->query($consultaestudiossql);
	if($consultaestudiosfinal->num_rows){
//Hay estudios en la BD
while($resultadoconsultaestudiosfinal = $consultaestudiosfinal->fetch_array()) {
$nombre_estudios = $resultadoconsultaestudiosfinal['nombre'];
$nota = $resultadoconsultaestudiosfinal['nota'];	
$fechaacabados = $resultadoconsultaestudiosfinal['fechaacabados'];
$centro = $resultadoconsultaestudiosfinal['centro'];	
//Preparamos para Smarty la consulta
$valoresestudios = array($nombre_estudios,$nota,$centro,$fechaacabados);
$smarty->assign('registroestudioid'.$numeroescalar2, $valoresestudios);
$numeroescalar2 = $numeroescalar2+1;
}}
else{
//Todavía no existen estudios registrados en la BD
}
$smarty->assign('numerodeestudios', $numeroescalar2);
//Acabamos la sección estudios
	//Preparamos la sección trabajo
	$numeroescalar = 1;
	$consultatrabajossql = "SELECT `puesto`, `empresa`, `years`, `descripcion`, `imagen`, `fechainicio`, `actualidad` FROM `trabajos` ";
	$consultatrabajosfinal = $enlace->query($consultatrabajossql);
	if($consultatrabajosfinal->num_rows){
//Hay trabajos en la BD
while($resultadoconsultatrabajosfinal = $consultatrabajosfinal->fetch_array()) {
$puesto = $resultadoconsultatrabajosfinal['puesto'];
$empresa = $resultadoconsultatrabajosfinal['empresa'];	
$years = $resultadoconsultatrabajosfinal['years'];
$descripcion = $resultadoconsultatrabajosfinal['descripcion'];
$imagen = "<a target=\"_blank\" href=\"".$resultadoconsultatrabajosfinal['imagen']."\"><img width=\"50px\" src=\"".$resultadoconsultatrabajosfinal['imagen']."\" alt=\"".$empresa."\"></a>";
$fechainicio =	$resultadoconsultatrabajosfinal['fechainicio'];		
if($resultadoconsultatrabajosfinal['actualidad'] == 1){
$actualidad =	'<i class="fa fa-check" style="color:green"></i>';	
}
else {
	$actualidad =	'<i class="fa fa-times" style="color:red"></i>';
}
//Preparamos para Smarty la consulta
$valorestrabajo = array($puesto,$empresa,$years,$descripcion,$imagen,$fechainicio,$actualidad);
$smarty->assign('registrotrabajoid'.$numeroescalar, $valorestrabajo);
$numeroescalar = $numeroescalar+1;
}}
else{
//Todavía no existen trabajos registrados en la BD
}
$smarty->assign('numerodetrabajos', $numeroescalar);
//Acabamos la sección trabajos
//Preparamos la sección idiomas
$numeroescalar3 = 1;
	$consultaidiomassql = "SELECT `nombre`, `nivel`, `codigo` FROM `idiomas`";
	$consultaidiomasfinal = $enlace->query($consultaidiomassql);
	if($consultaidiomasfinal->num_rows){
//Hay trabajos en la BD
while($resultadoconsultaidiomasfinal = $consultaidiomasfinal->fetch_array()) {
$nombre_idioma = $resultadoconsultaidiomasfinal['nombre'];
$nivel = $resultadoconsultaidiomasfinal['nivel'];	
$codigo = $resultadoconsultaidiomasfinal['codigo'];
//Preparamos para Smarty la consulta
$valoresidiomas = array($nombre_idioma,$nivel,$codigo);
$smarty->assign('registroidiomaid'.$numeroescalar3, $valoresidiomas);
$numeroescalar3 = $numeroescalar3+1;
}}
else{
//Todavía no existen estudios registrados en la BD
}
	$smarty->assign('numerodeidiomas', $numeroescalar3);
//Acabamos la sección idiomas
$smarty->display("plantillas/$tema/indice.tpl");
?>