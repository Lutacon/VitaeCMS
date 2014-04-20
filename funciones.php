<?php
function sec_session_start() {
        $session_name = 'sec_session_id'; //Configura un nombre de sesión personalizado
                        $secure = false; //Configura en verdadero (true) si utilizas https
                        $httponly = true; //Esto detiene que javascript sea capaz de accesar la identificación de la sesión.
                        ini_set('session.use_only_cookies', 1); //Forza a las sesiones a sólo utilizar cookies.
                        $cookieParams = session_get_cookie_params(); //Obtén params de cookies actuales.
                        session_set_cookie_params($cookieParams["lifetime"], $cookieParams["path"], $cookieParams["domain"], $secure, $httponly);
                        session_name($session_name); //Configura el nombre de sesión a el configurado arriba.
                        session_start(); //Inicia la sesión php
                        session_regenerate_id(true); //Regenera la sesión, borra la previa.
}
function login($mail, $claveusuario, $enlace, $clavetransformadaintroducida) {
   //Uso de sentencias preparadas significa que la inyección de SQL no es posible.
   if ($stmt = $enlace->prepare("SELECT idusuario, claveusuario, salt FROM usuario WHERE mail = ? LIMIT 1")) {
        $stmt->bind_param('s', $mail); //Liga "$mail" a parámetro.
        $stmt->execute(); //Ejecuta la consulta preparada.
        $stmt->store_result();
        $stmt->bind_result($idusuario, $claveusuario, $salt); //Obtiene las variables del resultado.
        $stmt->fetch();
        $clavecomplejacorrecta = hash('sha512', $claveusuario.$salt); //Hash de la contraseña con salt única.
        $clavecomplejaintroducida = hash('sha512', $clavetransformadaintroducida.$salt); //Hash de la contraseña con salt única introducida por el usuario
        if($stmt->num_rows == 1) { //Si el usuario existe.
        //Revisamos si la cuenta está bloqueada de muchos intentos de conexión.
if(checkbrute($idusuario, $enlace) == true) {
                //La cuenta está bloqueada
                //Envia un correo electrónico al usuario que le informa que su cuenta está bloqueada
                return false;
        } else {
        if($clavecomplejacorrecta == $clavecomplejaintroducida) { //Revisa si la contraseña en la base de datos coincide con la contraseña que el usuario envió.
//¡La contraseña es correcta!
                $user_browser = $_SERVER['HTTP_USER_AGENT']; //Obtén el agente de usuario del usuario
                $_SESSION['idusuario'] = $idusuario;
                $idusuario = preg_replace("/[^a-zA-Z0-9_\-]+/", "", $idusuario); //protección XSS ya que podemos imprimir este valor
                $_SESSION['idusuario'] = $idusuario;
                $_SESSION['login_string'] = hash('sha512', $claveusuario.$user_browser);
             //Inicio de sesión exitosa
                return true;    
        } else {
                //La conexión no es correcta
                //Grabamos este intento en la base de datos
                $now = time();
                $enlace->query("INSERT INTO intentoslogin (idusuario, tiempo) VALUES ('$idusuario', '$now')");
                return false;
        }
        }
        } else {
        //No existe el usuario.
        return false;
        }
   }
}
function checkbrute($idusuario, $enlace) {
   //Obtén timestamp en tiempo actual
   $now = time();
   //Todos los intentos de inicio de sesión son contados desde las 2 horas anteriores.
   $valid_attempts = $now - (2 * 60 * 60);
   if ($stmt = $enlace->prepare("SELECT time FROM intentoslogin WHERE idusuario = ? AND time > '$valid_attempts'")) {
        $stmt->bind_param('i', $idusuario);
        //Ejecuta la consulta preparada.
        $stmt->execute();
        $stmt->store_result();
        //Si ha habido más de 5 intentos de inicio de sesión fallidos
        if($stmt->num_rows > 5) {
        return true;
        } else {
        return false;
        }
   }
}
function login_check($enlace) {
   //Revisa si todas las variables de sesión están configuradas.
if(isset($_SESSION['idusuario'], $_SESSION['login_string'])) {
     $idusuario = $_SESSION['idusuario'];
     $login_string = $_SESSION['login_string'];
     $user_browser = $_SERVER['HTTP_USER_AGENT']; //Obtén la cadena de caractéres del agente de usuario
 
     if ($stmt = $enlace->prepare("SELECT claveusuario FROM usuario WHERE idusuario = ? LIMIT 1")) {
        $stmt->bind_param('i', $idusuario); //Liga "$user_id" a parámetro.
        $stmt->execute(); //Ejecuta la consulta preparada.
        $stmt->store_result();
        if($stmt->num_rows == 1) { //Si el usuario existe
        $stmt->bind_result($claveusuario); //Obtén variables del resultado.
$stmt->fetch();
        $login_check = hash('sha512', $claveusuario.$user_browser);
        if($login_check == $login_string) {
                //¡¡¡¡Conectado!!!!
                return true;
        } else {
                //No conectado
                return false;
        }
        } else {
                //No conectado
                return false;
        }
     } else {
        //No conectado
        return false;
     }
   } else {
     //No conectado
     return false;
   }
}
?>
