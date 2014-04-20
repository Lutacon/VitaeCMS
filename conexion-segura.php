<?php
require("./globales.php");
sec_session_start(); //Nuestra manera personalizada segura de iniciar sesión php.
 
if(isset($_POST['mail'], $_POST['p'])) {
	$claveusuario = "";
   $mail = $_POST['mail'];
   $clavetransformadaintroducida = $_POST['p']; //La contraseña con hash
   if(login($mail, $claveusuario, $enlace, $clavetransformadaintroducida) == true) {
        //Inicio de sesión exitosa
         header('Location: admin/'); //Redireccionando a panel de administrador
   } else {
        //Inicio de sesión fallida
        header('Location: ./conexion.php?error=true');
   }
} else {
   //Las variaciones publicadas correctas no se enviaron a esta página
echo 'Solicitud no válida';
}
?>