<!DOCTYPE html>
<html lang="es">
<HEAD>
<TITLE>Panel de Administración VitaeCMS</TITLE>
<script type="text/javascript" src="../javascripts/encriptacion.js"></script>
<script type="text/javascript" src="../javascripts/form-seguro.js"></script>
<link href="../css/bootstrap.min.css" rel="stylesheet">
<link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet">
<link href="../css/principal.css" rel="stylesheet">
<link href="../css/admin.css" rel="stylesheet">
{$metaidioma}
{$metaxua}
{$metaresponsive}
</head>
<body>
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
            <li class="active"><a href="#"><i class="fa fa-wrench"></i> Panel de Administración</a></li>
            <li><a href="../licencia.pdf"><i class="fa fa-file"></i> Licencia</a></li>
            <li><a href="../logout.php"><i class="fa fa-sign-out"></i> Cerrar sesión</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="http://vitaecms.org"><i class="fa fa-leaf"></i> Web Oficial</a></li>
            <li><a target="_blank" href="https://github.com/VitaeCMS/VitaeCMS"><i class="fa fa-github"></i>  GitHub</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
 </div>
    <div class="container-fluid admin-container">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar" id="tabs">
            <li class="active"><a href="#inicio" data-toggle="tab">Inicio</a></li>
            <li><a href="#confusuario" data-toggle="tab">Configuración de usuario</a></li>
            <li><a href="#estudios" data-toggle="tab">Estudios</a></li>
            <li><a href="#trabajos" data-toggle="tab">Trabajos</a></li>
            <li><a href="#idiomas" data-toggle="tab">Idiomas</a></li>
            <li><a href="#pdf" data-toggle="tab">Exportar currículum a PDF</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        	 <div class="tab-content">
        	<div class="tab-pane active" id="inicio">
          <h1 class="page-header">Inicio del panel de control</h1>
	</div>
	<div class="tab-pane" id="confusuario">
          <h1 class="page-header">Configuración usuario</h1>
         <form action="ejecutores/changeuser.php" method="post"> {foreach from=$datosusuario item=curr_id}
  <P>{$curr_id}</P>
{/foreach}<input class="btn btn-default btn-lg btn-block" type="submit" value="Cambiar datos de usuario" /></form>
	</div>
	<div class="tab-pane" id="estudios">
          <h1 class="page-header">Configuración estudios &nbsp; <div class="btn-group">
               <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalestudio">Añadir Estudios</button>
      <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
        <i class="fa fa-plus"></i>
      </button>
    </div></h1>
          <div class="table-responsive">
  <table class="table table-bordered"><thead>
          <tr>
            <th>ID Estudio</th>
            <th>Nombre de estudio</th>
            <th>Nota</th>
            <th>Centro</th>
            <th>Fecha de finalización</th>
            <th>Borrar registro</th>
          </tr>
        </thead>
        <tbody>
 	{assign var=trabajadorwhileworks2 value=1}
      {while $trabajadorwhileworks2 lt $numerodeestudios }     
<tr>{foreach from=$registroestudioid{$trabajadorwhileworks2} item=curr_id}
  <td>{$curr_id}</td>
{/foreach}</tr>
{assign var=trabajadorwhileworks2 value=$trabajadorwhileworks2+1}
{/while}
 </tbody></table></div>
 <!-- Modal -->
<div class="modal fade" id="modalestudio" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Añadir un estudio</h4>
      </div>
      <form class="formularioestandarbd" action="ejecutores/addstudy.php" method="post" name="addstudy" role="form">
      <div class="modal-body">
        <span class="tituloestandarformulario">Nombre del estudio / título</span><br>
<INPUT TYPE="TEXT" class="form-control" NAME="nombre_estudios" placeholder="PE: Graduado de Educación Secundaria"><br>
    <span class="tituloestandarformulario">Nota obtenida</span><br>
<INPUT TYPE="TEXT" class="form-control" NAME="nota" placeholder="PE: 9.9"><br>
	   <span class="tituloestandarformulario">Centro de estudios</span><br>
<INPUT TYPE="TEXT" class="form-control" NAME="centro" placeholder="PE: Universidad Politécnica de Valencia (UPV)"><br>
	    <span class="tituloestandarformulario">Fecha de finalización</span><br>
<INPUT TYPE="TEXT" class="form-control" NAME="fechaacabados" placeholder="PE: YYYY-MM-DD"><br>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Agregar estudio</button>
       </form>
      </div>
    </div>
  </div>
</div>
	</div>
	</div>
	<div class="tab-pane" id="trabajos">
          <h1 class="page-header">Configuración trabajos &nbsp; <div class="btn-group">
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modaltrabajo">Añadir trabajo</button>
      <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
        <i class="fa fa-plus"></i>
      </button>
    </div></h1>
          <div class="table-responsive">
  <table class="table table-bordered"><thead>
          <tr>
            <th>ID Trabajo</th>
            <th>Puesto</th>
            <th>Empresa</th>
            <th>Años</th>
            <th>Descripción</th>
            <th>Imagen</th>
            <th>Fecha de inicio</th>
            <th>¿Actualidad?</th>
            <th>Borrar registro</th>
          </tr>
        </thead>
        <tbody>
 	{assign var=trabajadorwhileworks value=1}
      {while $trabajadorwhileworks lt $numerodetrabajos }     
<tr>{foreach from=$registrotrabajoid{$trabajadorwhileworks} item=curr_id}
  <td>{$curr_id}</td>
{/foreach}</tr>
{assign var=trabajadorwhileworks value=$trabajadorwhileworks+1}
{/while}
 </tbody></table></div>
 <!-- Modal -->
<div class="modal fade" id="modaltrabajo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Añadir un nuevo trabajo / empleo</h4>
      </div>
      <form class="formularioestandarbd" action="ejecutores/addwork.php" method="post" name="addwork" role="form">
      <div class="modal-body">
        <span class="tituloestandarformulario">Puesto</span><br>
<INPUT TYPE="TEXT" class="form-control" NAME="puesto" placeholder="PE: Encargado de mantenimiento"><br>
    <span class="tituloestandarformulario">Empresa</span><br>
<INPUT TYPE="TEXT" class="form-control" NAME="empresa" placeholder="PE: Microsoft"><br>
	    <span class="tituloestandarformulario">Años</span><br>
<INPUT TYPE="TEXT" class="form-control" NAME="years" placeholder="PE: 5 (En números)"><br>
	    <span class="tituloestandarformulario">Descripción puesto</span><br>
<textarea class="form-control" NAME="descripcion" placeholder="PE: Me encargaba de..."></textarea><br>
    <span class="tituloestandarformulario">Imagen</span><br>
<INPUT TYPE="TEXT" class="form-control" NAME="imagen" placeholder="PE: servidordeimagenes.com/fotoconelequipo.png"><br>
	    <span class="tituloestandarformulario">Fecha de inicio</span><br>
<INPUT TYPE="TEXT" class="form-control" NAME="fecha" placeholder="PE: YYYY-MM-DD"><br>
	 <div class="checkbox">
    <label>
      <input NAME="actualidad" type="checkbox"> ¿Estás trabajando en la actualidad?
    </label>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Agregar trabajo</button>
       </form>
      </div>
    </div>
  </div>
</div>
	</div>
        </div>
        <div class="tab-pane" id="idiomas">
          <h1 class="page-header">Configuración idiomas &nbsp; <div class="btn-group">
               <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalidioma">Añadir Idiomas</button>
      <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
        <i class="fa fa-plus"></i>
      </button>
    </div></h1>
          <div class="table-responsive">
  <table class="table table-bordered"><thead>
          <tr>
            <th>ID Idioma</th>
            <th>Nombre de certificado de idioma</th>
            <th>Nivel</th>
            <th>Idioma</th>
            <th>Borrar registro</th>
          </tr>
        </thead>
        <tbody>
 	{assign var=trabajadorwhileworks3 value=1}
      {while $trabajadorwhileworks3 lt $numerodeidiomas }     
<tr>{foreach from=$registroidiomaid{$trabajadorwhileworks3} item=curr_id}
  <td>{$curr_id}</td>
{/foreach}</tr>
{assign var=trabajadorwhileworks3 value=$trabajadorwhileworks3+1}
{/while}
 </tbody></table></div>
 <!-- Modal -->
<div class="modal fade" id="modalidioma" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Añadir un idioma</h4>
      </div>
      <form class="formularioestandarbd" action="ejecutores/addlanguage.php" method="post" name="addstudy" role="form">
      <div class="modal-body">
        <span class="tituloestandarformulario">Nombre del certificado de idioma</span><br>
<INPUT TYPE="TEXT" class="form-control" NAME="nombre_idioma" placeholder="PE: Trinity Level 3 - English"><br>
    <span class="tituloestandarformulario">Nivel</span><br>
<INPUT TYPE="TEXT" class="form-control" NAME="nivel" placeholder="PE: A2, B1..."><br>
	   <span class="tituloestandarformulario">Código de idioma</span><br>
<INPUT TYPE="TEXT" class="form-control" NAME="codigo" placeholder="PE: es, en, ar... (Consultar lista de idiomas en idiomas.txt)"><br>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Agregar idioma</button>
       </form>
      </div>
    </div>
  </div>
</div>
	</div>
	</div>
	   	<div class="tab-pane" id="pdf">
          <h1 class="page-header">Exportación de currículum a PDF</h1>
          <p>Próximamente en la versión beta 2</p>
	</div>
        </div>
      </div>       
    </div>
<script type="text/javascript">$('#tabs a').click(function (e) {
	 e.preventDefault();
	 $(this).tab('show');
$("[data-toggle=tooltip]").tooltip();
$('#tabs a').click(function (e) {
	 e.preventDefault();
	 $(this).tab('show');
});

$(function () {
$('#tabs a:last').tab('show');
})
});

$(function () {
$('#tabs a:last').tab('show');
})</script>
<script src="../javascripts/jquery.min.js" type="text/javascript"></script>
<script src="../javascripts/bootstrap.min.js" type="text/javascript"></script>
<script type="text/javascript" src="../javascripts/jscolor/jscolor.js"></script>
</body>
</html>