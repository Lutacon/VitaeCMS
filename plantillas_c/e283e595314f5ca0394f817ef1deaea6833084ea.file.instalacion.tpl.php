<?php /* Smarty version Smarty-3.1.18, created on 2014-04-19 14:37:10
         compiled from "/opt/lampp/htdocs/VitaeCMSv1/plantillas/instalacion.tpl" */ ?>
<?php /*%%SmartyHeaderCode:91715099853526df6a9c074-93075175%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e283e595314f5ca0394f817ef1deaea6833084ea' => 
    array (
      0 => '/opt/lampp/htdocs/VitaeCMSv1/plantillas/instalacion.tpl',
      1 => 1397377546,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '91715099853526df6a9c074-93075175',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'metaidioma' => 0,
    'metaxua' => 0,
    'metaresponsive' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53526df6aedc35_26471149',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53526df6aedc35_26471149')) {function content_53526df6aedc35_26471149($_smarty_tpl) {?><!DOCTYPE html>
<html lang="es">
<HEAD>
<TITLE>Asistente de instalación VitaeCMS</TITLE>
<script type="text/javascript" src="../javascripts/encriptacion.js"></script>
<script type="text/javascript" src="../javascripts/form-seguro.js"></script>
<link href="../css/bootstrap.min.css" rel="stylesheet">
<link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet">
<link href="../css/principal.css" rel="stylesheet">
<link href="../css/principal.css" rel="stylesheet">
<?php echo $_smarty_tpl->tpl_vars['metaidioma']->value;?>

<?php echo $_smarty_tpl->tpl_vars['metaxua']->value;?>

<?php echo $_smarty_tpl->tpl_vars['metaresponsive']->value;?>

</HEAD>
<BODY>
	<div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
          	<li><img id="logosuperior" class="img-responsive" src="../imagenes/logosuperiorvitaecms.png" alt="Logo VitaeCMS"></li>
            <li class="active"><a href="#"><i class="fa fa-gears"></i> Instalación</a></li>
            <li><a href="../licencia.pdf"><i class="fa fa-file"></i> Licencia</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="http://vitaecms.org"><i class="fa fa-leaf"></i> Web Oficial</a></li>
            <li><a target="_blank" href="https://github.com/VitaeCMS/VitaeCMS"><i class="fa fa-github"></i>  GitHub</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
 </div>
 <div id="contenedorinstalacion"  class="jumbotron">
      <div class="container">
        <h1>Asistente de instalación VitaeCMS</h1>
        <p>VitaeCMS es el script desarrollado en PHP con el que podrás crear una página de presentación personal, elegante y funcional. Ahora es mucho más sencillo disponer de un espacio profesional en la web con tu currículum al completo, ¡gana visibilidad!</p>
        <p><a class="btn btn-primary btn-lg" role="button" href="http://vitaecms.org" target="_blank">Conoce más</a></p>
      </div>
    </div>
 <div class="container">
<FORM METHOD="POST" ACTION="install.php">
<h1>Datos de configuración VitaeCMS <br> <small style="font-size: 40%;" class="introduccionconf">Los siguientes datos configurarán VitaeCMS para un correcto funcionamiento del gestor de contenidos, por favor, rellena los datos con precaución</small></h1><br />
<div class="row">
<div class="col-md-4">
<span class="tituloinstalacion">Dominio del servidor de base de datos</span><br>
<INPUT TYPE="TEXT" class="form-control" NAME="servidorbd" placeholder="Normalmente localhost"><br>
	<span class="tituloinstalacion">Nombre base de datos</span><br>
<INPUT TYPE="TEXT" class="form-control" NAME="nombrebd" placeholder="Nombre BD"><br>
</div><div class="col-md-4">
<span class="tituloinstalacion">Usuario del servidor de la base de datos</span><br>
<INPUT TYPE="TEXT" class="form-control" NAME="usuariobd" placeholder="Usuario con privilegios de la BD"><br>
<span class="tituloinstalacion">Contraseña del usuario del servidor de la base de datos</span><br>
<INPUT class="form-control" TYPE="PASSWORD" NAME="clavebd"><br>
</div><div class="col-md-4">
	<span class="tituloinstalacion">Correo electrónico</span><br>
<INPUT TYPE="TEXT" class="form-control" NAME="correoe" placeholder="tucorreo@example.com"><br>
<span class="tituloinstalacion">Contraseña del administrador</span><br>
<input class="form-control" type="password" name="password" id="password"/><br>
</div>
</div><hr>
<div class="row">
<div class="col-md-4">
	<span class="tituloinstalacion">Subcarpeta de instalación</span><br>
<INPUT TYPE="TEXT" class="form-control" NAME="subcarpeta" placeholder="Si se encuentra en la raiz, no introduzcas nada"><br>
</div>
<div class="col-md-8">
<div class="alert alert-warning">¡Recuerda! Los datos de configuración se almacenarán en un archivo PHP a excepción de los datos de administración, (contraseña y email), así que para cambiarlos más adelante tendrás que
	modificar código.</div>
</div><div id="ultimoconfiguracion"></div><br><br>
<h1>Datos personales <br><small style="font-size: 40%;" class="introduccionconf">Los datos que aparecen a continuación modificarán la plantilla básica de tu web, los podrás cambiar más tarde en tu panel de control</small></h1><br />
<div class="row">
<div class="col-md-4">
<span class="tituloinstalacion">Tu nombre</span><br>
<INPUT TYPE="TEXT" class="form-control" NAME="nombrepersona" placeholder="John"><br>
<span class="tituloinstalacion">Tus Apellidos</span><br>
<INPUT TYPE="TEXT" class="form-control" NAME="apellidospersona" placeholder="Doe Lorem"><br>
<span class="tituloinstalacion">Lema / Slogan</span><br>
<INPUT TYPE="TEXT" class="form-control" NAME="lema" placeholder="Probablemente el mejor Doe que encontrarás"><br></div><div class="col-md-4">
<span class="tituloinstalacion">Número de contacto</span><br>
<INPUT TYPE="TEXT" class="form-control" NAME="numerocontacto" placeholder="987654321"><br>
<span class="tituloinstalacion">Twitter ID (Opcional)</span><br>
<INPUT TYPE="TEXT" class="form-control" NAME="twitterid" placeholder="Dejar en blanco para no vincular a Twitter"><br>
<span class="tituloinstalacion">Facebook ID (Opcional)</span><br>
<INPUT TYPE="TEXT" class="form-control" NAME="facebookid" placeholder="Dejar en blanco para no vincular a Facebook"><br></div><div class="col-md-4">
<span class="tituloinstalacion">ID vídeo presentación en YouTube (Opcional)</span><br>
<INPUT TYPE="TEXT" class="form-control" NAME="youtubeid" placeholder="y54S2W-1"><br>
<span class="tituloinstalacion">Enlace imagen de perfil 1</span><br>
<INPUT TYPE="TEXT" class="form-control" NAME="imagenperf1" placeholder="http://servidordemiimagen.com/foto1.png"><br>
<span class="tituloinstalacion">Enlace imagen de perfil 2</span><br>
<INPUT TYPE="TEXT" class="form-control" NAME="imagenperf2" placeholder="http://servidordemiimagen.com/foto2.png"><br></div>
<span class="tituloinstalacion">Biografía</span><br>
<div class="col-md-12">
<textarea class="form-control" rows="3" NAME="biografiapersona" placeholder="En un lugar de la Mancha, de cuyo nombre no quiero acordarme, no hace mucho tiempo que vivía un hidalgo de los de lanza en astillero, adarga antigua, rocín flaco y galgo corredor.  "></textarea><br></div>
</div><div class="row">
<h1>Configuración del estilo <br><small style="font-size: 40%;" class="introduccionconf">A continuación encontrarás datos de configuración para que tu web sea única entre todos los usuarios de VitaeCMS</small></h1><br />
<div class="col-md-12">
<span class="tituloinstalacion">Color principal</span><br>
<INPUT TYPE="TEXT" class="color form-control" NAME="color1"><br>
<span class="tituloinstalacion">Color secundario</span><br>
<INPUT TYPE="TEXT" class="color form-control" NAME="color2"><br>
</div>
<input class="btn btn-lg btn-block" type="button" value="¡Instalar VitaeCMS!" onclick="formhash(this.form, this.form.password);" />
</div>
</FORM>
<br><br>
</div>
<script src="../javascripts/jquery.min.js" type="text/javascript"></script>
<script src="../javascripts/bootstrap.min.js" type="text/javascript"></script>
<script type="text/javascript" src="../javascripts/jscolor/jscolor.js"></script>
</BODY>
</html><?php }} ?>
