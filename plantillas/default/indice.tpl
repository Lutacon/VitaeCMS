<!DOCTYPE html>
<html lang="es">
	<head>
		{$metaidioma}
		{$metaresponsive}
		{$metaxua}
		<meta name="application-name" content="VitaeCMS">
		<meta name="author" content="{$nombreusuario}">
		<meta name="description" content="{$biografia}">
		<meta name="generator" content="VitaeCMS">
		<!--Añade en las meta keywords las palabras que quieres resaltar en la búsqueda de google para llegar a visitantes deseados-->
		<meta name="keywords" content="{$nombreusuario},{$apellidosusuario}, curriculum, profesional, trabajos, empleo, trabajador, empleado, landing">
	<title>Página de {$nombreusuario} - Inicio</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/botonescss/zocial.css" rel="stylesheet">
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="css/{$tema}/principal.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,700' rel='stylesheet' type='text/css'>
	<style>
	.iconotelefono {
		color: #{$colorprincipal};
	}
	.contenedorcolor {
	background: #{$colorprincipal};	
	}
	.perfilimg {
		background: url('{$imagenperfil1}');
	}
	.perfilimg:hover {
		background: url('{$imagenperfil2}');
	}
	.tituloinf {
		color:#{$colorsecundario};
	}
	.fechaestudiocolor {
		background-color: #{$colorprincipal};
	}
	.negritaestudio {
		color:#{$colorsecundario};
	}
	.barrafooter {
		background-color: #{$colorprincipal};
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
	<h1 class="nombreusuario">{$nombreusuario}</h1>
	<span class="apellido">{$apellidosusuario}</span><br>
	<span class="lema">{$lemausuario}</span><br>
	
	</div><div class="col-md-5 headerlinks">
		<div class="datossec"><span  id="telefonodat" class="zocial call"> {$telefonousuario}</span>&nbsp;<a target="_blank" href="mailto:{$mailusuario}" class="zocial email"> {$mailusuario}</a></div>
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
	<div class="complejo1"><div class="col-md-{$colsivideo}"><h4 class="titulossubsecciones">Biografía</h4><div class="biografia"><p>"{$biografia}"</p></div></div><div class="col-md-{$colsivideo2}">{$idvideoyt}</div>
	</div>
	<h2 class="titulossecciones">Estudios</h2>
	<div class="col-md-12 arreglotabla">
		<div class="table-responsive"><table class="table">
 	{assign var=trabajadorwhileworks2 value=1}
      {while $trabajadorwhileworks2 lt $numerodeestudios }
      <tr>    
      	<td class="fechatd"><span class="label label-primary fechaestudiocolor">{$registroestudioid{$trabajadorwhileworks2}[3]}</span></td><td>
<span class="negritaestudio">Nombre del título / certificado: </span>{$registroestudioid{$trabajadorwhileworks2}[0]}<br>
<span class="negritaestudio">Calificación media obtenida: </span>{$registroestudioid{$trabajadorwhileworks2}[1]}<br>
<span class="negritaestudio">Centro de estudios: </span>{$registroestudioid{$trabajadorwhileworks2}[2]}<br>
{assign var=trabajadorwhileworks2 value=$trabajadorwhileworks2+1}
</td>
</tr> 
{/while}
</table>
	</div></div>
	<h2 class="titulossecciones">Experiencia profesional</h2>
	<div class="col-md-12 arreglotabla">
		<div class="table-responsive"><table class="table">
 	{assign var=trabajadorwhileworks value=1}
      {while $trabajadorwhileworks lt $numerodetrabajos }
      <tr>    
      	<td class="fechatd"><span class="label label-primary fechaestudiocolor">{$registrotrabajoid{$trabajadorwhileworks}[5]}</span></td><td>
<span class="negritaestudio">Puesto: </span>{$registrotrabajoid{$trabajadorwhileworks}[0]}<br>
<span class="negritaestudio">Empresa: </span>{$registrotrabajoid{$trabajadorwhileworks}[1]}<br>
<span class="negritaestudio">Años trabajados: </span>{$registrotrabajoid{$trabajadorwhileworks}[2]}<br>
<span class="negritaestudio">¿En la actualidad?:  </span>{$registrotrabajoid{$trabajadorwhileworks}[6]}<br>
<span class="negritaestudio">Descripción: </span>{$registrotrabajoid{$trabajadorwhileworks}[3]}<br>
<td>{$registrotrabajoid{$trabajadorwhileworks}[4]}</td>
{assign var=trabajadorwhileworks value=$trabajadorwhileworks+1}
</td>
</tr> 
{/while}
</table>
	</div></div>
		<h2 class="titulossecciones">Certificados de idiomas</h2>
	<div class="col-md-12 arreglotabla">
		<div class="table-responsive"><table class="table">
 	{assign var=trabajadorwhileworks3 value=1}
      {while $trabajadorwhileworks3 lt $numerodeidiomas }
      <tr>    
      	<td class="fechatd"><img src="imagenes/flags/32/{$registroidiomaid{$trabajadorwhileworks3}[2]}.png" alt="{$registroidiomaid{$trabajadorwhileworks3}[2]}"></span></td><td>
<span class="negritaestudio">Nombre del certificado: </span>{$registroidiomaid{$trabajadorwhileworks3}[0]}<br>
<span class="negritaestudio">Nivel: </span>{$registroidiomaid{$trabajadorwhileworks3}[1]}<br>
{assign var=trabajadorwhileworks3 value=$trabajadorwhileworks3+1}
</td>
</tr> 
{/while}
</table>
	</div></div>
	</section></div><div id="sidebar" class="col-md-3 sidebar"><aside style="position:fixed;" class="sticky">
		<span class="tituloinf"> Información general</span>
		<div class="listainfo">
			<div class="imagensidebar"><img width="145px" height="145px" class="img-thumbnail" src="{$imagenperfil2}" alt="{$nombreusuario}">
			</div>
		<ul>
			<li><b>Nombre:</b> {$nombreusuario} {$apellidosusuario}</li>
			<li><b>Correo:</b> {$mailusuario}</li>
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

