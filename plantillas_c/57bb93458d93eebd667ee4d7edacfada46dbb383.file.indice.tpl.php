<?php /* Smarty version Smarty-3.1.18, created on 2014-04-19 14:48:58
         compiled from "plantillas/default/indice.tpl" */ ?>
<?php /*%%SmartyHeaderCode:367979440535270ba486704-10644108%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '57bb93458d93eebd667ee4d7edacfada46dbb383' => 
    array (
      0 => 'plantillas/default/indice.tpl',
      1 => 1397909652,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '367979440535270ba486704-10644108',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'metaidioma' => 0,
    'metaresponsive' => 0,
    'metaxua' => 0,
    'nombreusuario' => 0,
    'biografia' => 0,
    'apellidosusuario' => 0,
    'tema' => 0,
    'colorprincipal' => 0,
    'imagenperfil1' => 0,
    'imagenperfil2' => 0,
    'colorsecundario' => 0,
    'lemausuario' => 0,
    'telefonousuario' => 0,
    'mailusuario' => 0,
    'colsivideo' => 0,
    'colsivideo2' => 0,
    'idvideoyt' => 0,
    'trabajadorwhileworks2' => 0,
    'numerodeestudios' => 0,
    'trabajadorwhileworks' => 0,
    'numerodetrabajos' => 0,
    'trabajadorwhileworks3' => 0,
    'numerodeidiomas' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_535270ba5c4c79_74648259',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535270ba5c4c79_74648259')) {function content_535270ba5c4c79_74648259($_smarty_tpl) {?><!DOCTYPE html>
<html lang="es">
	<head>
		<?php echo $_smarty_tpl->tpl_vars['metaidioma']->value;?>

		<?php echo $_smarty_tpl->tpl_vars['metaresponsive']->value;?>

		<?php echo $_smarty_tpl->tpl_vars['metaxua']->value;?>

		<meta name="application-name" content="VitaeCMS">
		<meta name="author" content="<?php echo $_smarty_tpl->tpl_vars['nombreusuario']->value;?>
">
		<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['biografia']->value;?>
">
		<meta name="generator" content="VitaeCMS">
		<!--Añade en las meta keywords las palabras que quieres resaltar en la búsqueda de google para llegar a visitantes deseados-->
		<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['nombreusuario']->value;?>
,<?php echo $_smarty_tpl->tpl_vars['apellidosusuario']->value;?>
, curriculum, profesional, trabajos, empleo, trabajador, empleado, landing">
	<title>Página de <?php echo $_smarty_tpl->tpl_vars['nombreusuario']->value;?>
 - Inicio</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/botonescss/zocial.css" rel="stylesheet">
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="css/<?php echo $_smarty_tpl->tpl_vars['tema']->value;?>
/principal.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,700' rel='stylesheet' type='text/css'>
	<style>
	.iconotelefono {
		color: #<?php echo $_smarty_tpl->tpl_vars['colorprincipal']->value;?>
;
	}
	.contenedorcolor {
	background: #<?php echo $_smarty_tpl->tpl_vars['colorprincipal']->value;?>
;	
	}
	.perfilimg {
		background: url('<?php echo $_smarty_tpl->tpl_vars['imagenperfil1']->value;?>
');
	}
	.perfilimg:hover {
		background: url('<?php echo $_smarty_tpl->tpl_vars['imagenperfil2']->value;?>
');
	}
	.tituloinf {
		color:#<?php echo $_smarty_tpl->tpl_vars['colorsecundario']->value;?>
;
	}
	.fechaestudiocolor {
		background-color: #<?php echo $_smarty_tpl->tpl_vars['colorprincipal']->value;?>
;
	}
	.negritaestudio {
		color:#<?php echo $_smarty_tpl->tpl_vars['colorsecundario']->value;?>
;
	}
	.barrafooter {
		background-color: #<?php echo $_smarty_tpl->tpl_vars['colorprincipal']->value;?>
;
	}
	</style>
	</head>
	<body>
		<div class="barrasuperior"></div>
<div class="jumbotron contenedorcolor">
	<div class="container">
		<div class="col-md-2">
		<div class="perfilimg"></div>
		</div>
	<div class="col-md-5 header">
	<h1 class="nombreusuario"><?php echo $_smarty_tpl->tpl_vars['nombreusuario']->value;?>
</h1>
	<span class="apellido"><?php echo $_smarty_tpl->tpl_vars['apellidosusuario']->value;?>
</span><br>
	<span class="lema"><?php echo $_smarty_tpl->tpl_vars['lemausuario']->value;?>
</span><br>
	
	</div><div class="col-md-5 headerlinks">
		<div class="datossec"><span  id="telefonodat" class="zocial call"> <?php echo $_smarty_tpl->tpl_vars['telefonousuario']->value;?>
</span>&nbsp;<a target="_blank" href="mailto:<?php echo $_smarty_tpl->tpl_vars['mailusuario']->value;?>
" class="zocial email"> <?php echo $_smarty_tpl->tpl_vars['mailusuario']->value;?>
</a></div>
		<div class="imprimirpdf"><a class="zocial pdf"><img src="imagenes/default/pdficon_small.png" alt="Currículum PDF"> Descargar currículum en formato PDF</a></div>
		<nav class="menu"><ul><li><a target="_blank" href=""><img class="facebookicon iconoscomun" src="imagenes/default/icons/facebook/facebook-32.png" alt="Compartir en Facebook"></a></li>
			<li><a target="_blank" href=""><img class="twittericon iconoscomun" src="imagenes/default/icons/twitter/twitter-32.png" alt="Compartir en Twitter"></a></li>
			<li><a target="_blank" href=""><img class="googleplusicon iconoscomun" src="imagenes/default/icons/googleplus/googleplus-32.png" alt="Compartir en Google +"></a></li>
			<li><a target="_blank" href=""><img class="linkedinicon iconoscomun" src="imagenes/default/icons/linkedin/linkedin-32.png" alt="Compartir en LinkedIn"></a></li>
			<li><div class="b2-widget-count">
                <i></i><u></u><div class="b2-widget-val"><span class="comparteme">¡Compárteme!</span></div>
              </div></li>
		</ul></nav>
	</div>
</div></div>
<div class="container-fluid">
	<div id="content" class="col-md-9 main"><section>
	<h2 class="titulossecciones">Perfil personal</h2>
	<div class="complejo1"><div class="col-md-<?php echo $_smarty_tpl->tpl_vars['colsivideo']->value;?>
"><h4 class="titulossubsecciones">Biografía</h4><div class="biografia"><p>"<?php echo $_smarty_tpl->tpl_vars['biografia']->value;?>
"</p></div></div><div class="col-md-<?php echo $_smarty_tpl->tpl_vars['colsivideo2']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['idvideoyt']->value;?>
</div>
	</div>
	<h2 class="titulossecciones">Estudios</h2>
	<div class="col-md-12 arreglotabla">
		<div class="table-responsive"><table class="table">
 	<?php $_smarty_tpl->tpl_vars['trabajadorwhileworks2'] = new Smarty_variable(1, null, 0);?>
      <?php while ($_smarty_tpl->tpl_vars['trabajadorwhileworks2']->value<$_smarty_tpl->tpl_vars['numerodeestudios']->value) {?>
      <tr>    
      	<td class="fechatd"><span class="label label-primary fechaestudiocolor"><?php echo $_smarty_tpl->tpl_vars['registroestudioid'.($_smarty_tpl->tpl_vars['trabajadorwhileworks2']->value)]->value[3];?>
</span></td><td>
<span class="negritaestudio">Nombre del título / certificado: </span><?php echo $_smarty_tpl->tpl_vars['registroestudioid'.($_smarty_tpl->tpl_vars['trabajadorwhileworks2']->value)]->value[0];?>
<br>
<span class="negritaestudio">Calificación media obtenida: </span><?php echo $_smarty_tpl->tpl_vars['registroestudioid'.($_smarty_tpl->tpl_vars['trabajadorwhileworks2']->value)]->value[1];?>
<br>
<span class="negritaestudio">Centro de estudios: </span><?php echo $_smarty_tpl->tpl_vars['registroestudioid'.($_smarty_tpl->tpl_vars['trabajadorwhileworks2']->value)]->value[2];?>
<br>
<?php $_smarty_tpl->tpl_vars['trabajadorwhileworks2'] = new Smarty_variable($_smarty_tpl->tpl_vars['trabajadorwhileworks2']->value+1, null, 0);?>
</td>
</tr> 
<?php }?>
</table>
	</div></div>
	<h2 class="titulossecciones">Experiencia profesional</h2>
	<div class="col-md-12 arreglotabla">
		<div class="table-responsive"><table class="table">
 	<?php $_smarty_tpl->tpl_vars['trabajadorwhileworks'] = new Smarty_variable(1, null, 0);?>
      <?php while ($_smarty_tpl->tpl_vars['trabajadorwhileworks']->value<$_smarty_tpl->tpl_vars['numerodetrabajos']->value) {?>
      <tr>    
      	<td class="fechatd"><span class="label label-primary fechaestudiocolor"><?php echo $_smarty_tpl->tpl_vars['registrotrabajoid'.($_smarty_tpl->tpl_vars['trabajadorwhileworks']->value)]->value[5];?>
</span></td><td>
<span class="negritaestudio">Puesto: </span><?php echo $_smarty_tpl->tpl_vars['registrotrabajoid'.($_smarty_tpl->tpl_vars['trabajadorwhileworks']->value)]->value[0];?>
<br>
<span class="negritaestudio">Empresa: </span><?php echo $_smarty_tpl->tpl_vars['registrotrabajoid'.($_smarty_tpl->tpl_vars['trabajadorwhileworks']->value)]->value[1];?>
<br>
<span class="negritaestudio">Años trabajados: </span><?php echo $_smarty_tpl->tpl_vars['registrotrabajoid'.($_smarty_tpl->tpl_vars['trabajadorwhileworks']->value)]->value[2];?>
<br>
<span class="negritaestudio">¿En la actualidad?:  </span><?php echo $_smarty_tpl->tpl_vars['registrotrabajoid'.($_smarty_tpl->tpl_vars['trabajadorwhileworks']->value)]->value[6];?>
<br>
<span class="negritaestudio">Descripción: </span><?php echo $_smarty_tpl->tpl_vars['registrotrabajoid'.($_smarty_tpl->tpl_vars['trabajadorwhileworks']->value)]->value[3];?>
<br>
<td><?php echo $_smarty_tpl->tpl_vars['registrotrabajoid'.($_smarty_tpl->tpl_vars['trabajadorwhileworks']->value)]->value[4];?>
</td>
<?php $_smarty_tpl->tpl_vars['trabajadorwhileworks'] = new Smarty_variable($_smarty_tpl->tpl_vars['trabajadorwhileworks']->value+1, null, 0);?>
</td>
</tr> 
<?php }?>
</table>
	</div></div>
		<h2 class="titulossecciones">Certificados de idiomas</h2>
	<div class="col-md-12 arreglotabla">
		<div class="table-responsive"><table class="table">
 	<?php $_smarty_tpl->tpl_vars['trabajadorwhileworks3'] = new Smarty_variable(1, null, 0);?>
      <?php while ($_smarty_tpl->tpl_vars['trabajadorwhileworks3']->value<$_smarty_tpl->tpl_vars['numerodeidiomas']->value) {?>
      <tr>    
      	<td class="fechatd"><img src="imagenes/flags/32/<?php echo $_smarty_tpl->tpl_vars['registroidiomaid'.($_smarty_tpl->tpl_vars['trabajadorwhileworks3']->value)]->value[2];?>
.png" alt="<?php echo $_smarty_tpl->tpl_vars['registroidiomaid'.($_smarty_tpl->tpl_vars['trabajadorwhileworks3']->value)]->value[2];?>
"></span></td><td>
<span class="negritaestudio">Nombre del certificado: </span><?php echo $_smarty_tpl->tpl_vars['registroidiomaid'.($_smarty_tpl->tpl_vars['trabajadorwhileworks3']->value)]->value[0];?>
<br>
<span class="negritaestudio">Nivel: </span><?php echo $_smarty_tpl->tpl_vars['registroidiomaid'.($_smarty_tpl->tpl_vars['trabajadorwhileworks3']->value)]->value[1];?>
<br>
<?php $_smarty_tpl->tpl_vars['trabajadorwhileworks3'] = new Smarty_variable($_smarty_tpl->tpl_vars['trabajadorwhileworks3']->value+1, null, 0);?>
</td>
</tr> 
<?php }?>
</table>
	</div></div>
	</section></div><div id="sidebar" class="col-md-3 sidebar"><aside style="position:fixed;" class="sticky">
		<span class="tituloinf"> Información general</span>
		<div class="listainfo">
			<div class="imagensidebar"><img width="145px" height="145px" class="img-thumbnail" src="<?php echo $_smarty_tpl->tpl_vars['imagenperfil2']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['nombreusuario']->value;?>
">
			</div>
		<ul>
			<li><b>Nombre:</b> <?php echo $_smarty_tpl->tpl_vars['nombreusuario']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['apellidosusuario']->value;?>
</li>
			<li><b>Correo:</b> <?php echo $_smarty_tpl->tpl_vars['mailusuario']->value;?>
</li>
			<li><b>Edad:</b> Próximamente</li>
			<li><b>Coche propio:</b> Próximamente</li>
			<li><b>Nacionalidad:</b> Próximamente</li>
			<li><b>Disponibilidad:</b> Próximamente</li>
			<li><b>Idiomas:</b> Próximamente integrado</li></ul>
			<hr>
			<span class="tituloinf"> Mis tags</span>
			Próximamente
		</div>
	</aside></div>
	<div class="footer"><div class="barrafooter"></div></div>
</div>
<script src="javascripts/jquery.min.js" type="text/javascript"></script>
<script src="javascripts/bootstrap.min.js" type="text/javascript"></script>
	</body>
</html>

<?php }} ?>
