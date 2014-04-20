<?php
require("../globales.php");
//Incluye la conexión a la base de datos y funciones aquí.   
sec_session_start();
if(login_check($enlace) == true) {
	//Preparamos la sección usuario
	$consultausuariosql = "SELECT `idusuario`, `claveusuario`, `salt`, `nombre`, `apellidos`, `lema`, `mail`, `telefono`, `twitterid`, `facebookid`, `idvideoyt`, `imagenperfil1`, `imagenperfil2`, `biografia` FROM `usuario` WHERE idusuario='".$_SESSION['idusuario']."'";
	$consultausuariofinal = $enlace->query($consultausuariosql);
	if($consultausuariofinal->num_rows){
	while($resultadoconsultatrabajosfinal = $consultausuariofinal->fetch_array()) {
	$nombre ="<div class=\"row\"><div class=\"col-md-6\">Nombre <input type=\"text\" value=\"".$resultadoconsultatrabajosfinal['nombre']."\" name=\"nombre\" class=\"form-control\">";
	$apellidos = "Apellidos <input type=\"text\" value=\"".$resultadoconsultatrabajosfinal['apellidos']."\" name=\"apellidos\" class=\"form-control\">";
	$lema = "Lema <input type=\"text\" value=\"".$resultadoconsultatrabajosfinal['lema']."\" name=\"lema\" class=\"form-control\">";
	$mail = "Correo electrónico <input type=\"text\" value=\"".$resultadoconsultatrabajosfinal['mail']."\" name=\"mail\" class=\"form-control\">";
	$telefono = "Telefono <input type=\"text\" value=\"".$resultadoconsultatrabajosfinal['telefono']."\" name=\"telefono\" class=\"form-control\">";
	$twitterid = "ID de Cuenta Twitter <input type=\"text\" value=\"".$resultadoconsultatrabajosfinal['twitterid']."\" name=\"twitterid\" class=\"form-control\">";
	$facebookid = "ID de Cuenta Facebook <input type=\"text\" value=\"".$resultadoconsultatrabajosfinal['facebookid']."\" name=\"facebookid\" class=\"form-control\">";
	$idvyt = $resultadoconsultatrabajosfinal['idvideoyt'];
	$videovisual = '<h4>Previsualización vídeo YT</h4><br><iframe id="ytplayer" type="text/html" width="100%" height="300px" src="https://www.youtube.com/embed/'.$idvyt.'?rel=0"  frameborder="0" allowfullscreen></iframe></div></div>';
	$idvideoyt = 'ID Video YouTube <input type="text" value="'.$idvyt.'" name="idvideoyt" class="form-control">';
	$imagenperfil1 = "Primera imagen de perfil <input type=\"text\" value=\"".$resultadoconsultatrabajosfinal['imagenperfil1']."\" name=\"imagenperfil1\" class=\"form-control\">";
	$imagenperfil2 = "Segunda imagen de perfil <input type=\"text\" value=\"".$resultadoconsultatrabajosfinal['imagenperfil2']."\" name=\"imagenperfil2\" class=\"form-control\">";
	$imagenesperfil = "<div class=\"col-md-6\"><h4>Fotos del carrousel</h4><br><img style=\"max-width:150px\"src=\"".$resultadoconsultatrabajosfinal['imagenperfil1']."\" alt=\"Imagen perfil 1\"><img style=\"max-width:150px\" src=\"".$resultadoconsultatrabajosfinal['imagenperfil2']."\" alt=\"Imagen perfil 2\">";
	$biografia = "Biografía <textarea rows=\"3\" class=\"form-control\" name=\"biografia\" \">".$resultadoconsultatrabajosfinal['biografia']."</textarea></div>";
	//Preparamos para Smarty la consulta
	$valoresusuario = array($nombre, $apellidos, $lema, $mail, $telefono, $twitterid, $facebookid, $idvideoyt, $imagenperfil1, $imagenperfil2, $biografia, $imagenesperfil,$videovisual);
	$smarty->assign('datosusuario', $valoresusuario);
	}}
	//Preparamos la sección trabajo
	$numeroescalar = 1;
	$consultatrabajossql = "SELECT `idtrabajo`, `puesto`, `empresa`, `years`, `descripcion`, `imagen`, `fechainicio`, `actualidad` FROM `trabajos` ";
	$consultatrabajosfinal = $enlace->query($consultatrabajossql);
	if($consultatrabajosfinal->num_rows){
//Hay trabajos en la BD
while($resultadoconsultatrabajosfinal = $consultatrabajosfinal->fetch_array()) {
$idtrabajo = $resultadoconsultatrabajosfinal['idtrabajo'];
$puesto = $resultadoconsultatrabajosfinal['puesto'];
$empresa = $resultadoconsultatrabajosfinal['empresa'];	
$years = $resultadoconsultatrabajosfinal['years'];
$borrar = "<form action=\"ejecutores/deletework.php\" method=\"post\"><input type=\"hidden\" name=\"idborrar\" value=\"".$idtrabajo."\"><button type=\"submit\">Borrar</button></form>";
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
$valorestrabajo = array($idtrabajo,$puesto,$empresa,$years,$descripcion,$imagen,$fechainicio,$actualidad, $borrar);
$smarty->assign('registrotrabajoid'.$numeroescalar, $valorestrabajo);
$numeroescalar = $numeroescalar+1;
}}
else{
//Todavía no existen trabajos registrados en la BD
}
//Acabamos la sección trabajos
//Preparamos la sección estudios
$numeroescalar2 = 1;
	$consultaestudiossql = "SELECT `idestudio`, `nombre`, `nota`, `fechaacabados`, `centro` FROM `estudios`";
	$consultaestudiosfinal = $enlace->query($consultaestudiossql);
	if($consultaestudiosfinal->num_rows){
//Hay trabajos en la BD
while($resultadoconsultaestudiosfinal = $consultaestudiosfinal->fetch_array()) {
$idestudio = $resultadoconsultaestudiosfinal['idestudio'];
$nombre_estudios = $resultadoconsultaestudiosfinal['nombre'];
$nota = $resultadoconsultaestudiosfinal['nota'];	
$fechaacabados = $resultadoconsultaestudiosfinal['fechaacabados'];
$borrar_estudios = "<form action=\"ejecutores/deletestudy.php\" method=\"post\"><input type=\"hidden\" name=\"idborrar\" value=\"".$idestudio."\"><button type=\"submit\">Borrar</button></form>";
$centro = $resultadoconsultaestudiosfinal['centro'];	
//Preparamos para Smarty la consulta
$valoresestudios = array($idestudio,$nombre_estudios,$nota,$centro,$fechaacabados, $borrar_estudios);
$smarty->assign('registroestudioid'.$numeroescalar2, $valoresestudios);
$numeroescalar2 = $numeroescalar2+1;
}}
else{
//Todavía no existen estudios registrados en la BD
}
//Acabamos la sección estudios
//Preparamos la sección idiomas
$numeroescalar3 = 1;
	$consultaidiomassql = "SELECT `ididioma`, `nombre`, `nivel`, `codigo` FROM `idiomas`";
	$consultaidiomasfinal = $enlace->query($consultaidiomassql);
	if($consultaidiomasfinal->num_rows){
//Hay trabajos en la BD
while($resultadoconsultaidiomasfinal = $consultaidiomasfinal->fetch_array()) {
$ididioma = $resultadoconsultaidiomasfinal['ididioma'];
$nombre_idioma = $resultadoconsultaidiomasfinal['nombre'];
$nivel = $resultadoconsultaidiomasfinal['nivel'];	
$codigo = $resultadoconsultaidiomasfinal['codigo'];
$borrar_idioma = "<form action=\"ejecutores/deletelanguage.php\" method=\"post\"><input type=\"hidden\" name=\"idborrar\" value=\"".$ididioma."\"><button type=\"submit\">Borrar</button></form>";	
//Preparamos para Smarty la consulta
$valoresidiomas = array($ididioma,$nombre_idioma,$nivel,$codigo, $borrar_idioma);
$smarty->assign('registroidiomaid'.$numeroescalar3, $valoresidiomas);
$numeroescalar3 = $numeroescalar3+1;
}}
else{
//Todavía no existen estudios registrados en la BD
}
//Acabamos la sección idiomas
	$smarty->assign('numerodeidiomas', $numeroescalar3);
	$smarty->assign('numerodeestudios', $numeroescalar2);
	$smarty->assign('numerodetrabajos', $numeroescalar);
	$smarty->display('administracion.tpl');
	} else {
   header("location: ../conexion.php"); //Redireccionando a la página de login si no estás conectado
}
?>