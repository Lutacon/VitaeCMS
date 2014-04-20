<!DOCTYPE html>
<html lang="es">
<head>
{$metaidioma}
<script type="text/javascript" src="javascripts/encriptacion.js"></script>
<script type="text/javascript" src="javascripts/form-seguro.js"></script>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
<link href="css/principal.css" rel="stylesheet">
{$metaidioma}
{$metaxua}
{$metaresponsive}
</head>
<body style="background:#e7e7e7;">
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
          	<li><img id="logosuperior" class="img-responsive" src="imagenes/logosuperiorvitaecms.png" alt="Logo VitaeCMS"></li>
            <li class="active"><a href="#"><i class="fa fa-check"></i> Inicio de sesión</a></li>
            <li><a href="index.php"><i class="fa fa-file"></i> Inicio</a></li>

          </ul>
          <ul class="nav navbar-nav navbar-right">
          </ul>
        </div><!--/.nav-collapse -->
      </div>
 </div>
<div class="container conexioncuerpo">

      <form class="formularioiniciosesion" action="conexion-segura.php" method="post" name="login_form" role="form">
        <h2 class="form-signin-heading">Inicio de sesión</h2>
        <input name="mail" type="email" class="form-control" placeholder="Correo electrónico" autofocus=""><br>
        <input name="password" id="password" type="password" class="form-control" placeholder="Contraseña"><br>
        <button onclick="formhash(this.form, this.form.password);" class="btn btn-lg btn-default btn-block" type="submit"><i class="fa fa-sign-in"></i> Iniciar sesión</button>
      </form>

    </div>
<script src="javascripts/jquery.min.js" type="text/javascript"></script>
<script src="javascripts/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>