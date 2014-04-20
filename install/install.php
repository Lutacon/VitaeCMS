<?php
require('globales_install.php');
//Primero creamos el archivo config.php
$subcarpeta = $_POST["subcarpeta"];
$servidorbd = $_POST["servidorbd"];
$usuariobd = $_POST["usuariobd"];
$clavebd = $_POST["clavebd"];
$nombrebd = $_POST["nombrebd"];
$passwdadmin = $_POST["p"];
$nombredeusuario = "admin";
$fileLocation = '../config.php';
$file = fopen($fileLocation,'w');
$content = '<?php
$subcarpeta = "'.$subcarpeta.'";
$servidorbd = "'.$servidorbd.'";
$usuariobd = "'.$usuariobd.'";
$clavebd = "'.$clavebd.'";
$nombrebd = "'.$nombrebd.'";
 ?>';    
  fwrite($file,$content);
  fclose($file);
//Conect with the database
$enlace =  mysqli_connect($servidorbd, $usuariobd, $clavebd, $nombrebd);
if (mysqli_connect_errno()) {
     printf("Conexión fallida: %s\n", $mysqli->enlaceect_error);
    exit();
}
//Then, we create all the tables
$nombrearchivosql = "instalacion.sql";
$templine = '';
// Read in entire file
$lines = file($nombrearchivosql);
// Loop through each line
foreach ($lines as $line)
{
// Skip it if it's a comment
if (substr($line, 0, 2) == '--' || $line == '')
    continue;

// Add this line to the current segment
$templine .= $line;
// If it has a semicolon at the end, it's the end of the query
if (substr(trim($line), -1, 1) == ';')
{
    // Realizamos la consulta
    mysqli_query($enlace, $templine) ;
    // Reset temp variable to empty
    $templine = '';
}
}
 //Insertamos los datos del formulario de configuración en sus correspondientes tablas
 $nombrepersona = $_POST["nombrepersona"];
 $apellidospersona = $_POST["apellidospersona"];
 $lemapersona = $_POST["lema"];
 $telefono = $_POST["numerocontacto"];
 $twitterid = $_POST["twitterid"];
 $facebookid = $_POST["facebookid"];
 $idvideoyt = $_POST["youtubeid"];
 $imagenperfil1 = $_POST["imagenperf1"];
 $imagenperfil2 = $_POST["imagenperf2"];
 $biografia = $_POST["biografiapersona"];
 $mail = $_POST["correoe"];
 $random_salt = hash('sha512', uniqid(mt_rand(1, mt_getrandmax()), true)); //Crea una contraseña en salt
 //Creamos la primera sentencia SQL que ejecutaremos
 $query1 = "INSERT INTO usuario (`idusuario`, `claveusuario`, `salt`, `nombre`, `apellidos`, `lema`, `mail`, `telefono`, `twitterid`, `facebookid`, `idvideoyt`, `imagenperfil1`, `imagenperfil2`, `biografia`) VALUES ('".$nombredeusuario."', 
'".$passwdadmin."', '".$random_salt."', '".$nombrepersona."', '".$apellidospersona."', '".$lemapersona."', '".$mail."', '".$telefono."', '".$twitterid."','".$facebookid."', '".$idvideoyt."', '".$imagenperfil1."', '".$imagenperfil2."', '".$biografia."');"; 
 //Creamos la segunda sentencia SQL que ejecutaremos
$colorprincipal = $_POST["color1"];
$colorsecundario = $_POST["color2"];
$idconfdefault = "default";
$query2 = "INSERT INTO configuracionmod (`idconf`, `colorprincipal`, `colorsecundario`, `tema`) VALUES ('".$idconfdefault."', '".$colorprincipal."', 
'".$colorsecundario."','default');"; 
mysqli_query($enlace, $query1) ;
mysqli_query($enlace, $query2) ;
$smarty->assign('tablasimportadas', 'Tablas importadas correctamente');
$smarty->assign('datosimportados', 'Datos de usuario importados correctamente');
$smarty->display('../plantillas/instalacion2.tpl');
?>