<?php
ini_set("error_reporting", E_ALL & ~E_DEPRECATED); 

if (!defined('DS')) {
    define('DS', DIRECTORY_SEPARATOR);
}

if (!defined('DIR_PATH')) {
    define('DIR_PATH', dirname(__FILE__) . DS . '..' . DS . '..' . DS);
}

if (!defined('DIR_ADMIN')) {
    define('DIR_ADMIN', dirname(__FILE__) . DS . '..' . DS);
}
if (!defined('DIR_CONFIG')) {
    define('DIR_CONFIG', dirname(__FILE__) . DS);
}


if (!defined('URL_PATH')) {
    define('URL_PATH','http://'. $_SERVER['HTTP_HOST'] .'/');
}

if (!defined('URL_ADMIN')) {
    define('URL_ADMIN', URL_PATH .'panel/');
}

if (!defined('URL_IMAS')) {
    define('URL_IMAS', URL_PATH .'images/');
}

if (!defined('DB_HOST')) {  //nombre del servidor
    define('DB_HOST','localhost');
}

if (!defined('DB_USER')) { //usuario de la base de datos
    define('DB_USER','root');
}

if (!defined('DB_PASS')) { //contrasena del usuario de la base de datos
    define('DB_PASS','');
}
if (!defined('DB_NAME')) { //Nombre de la base de datos
    define('DB_NAME','bdpintura');
}





$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS,DB_NAME) or die('Not Connecting to the database');

if (!$conn) {
    echo "Fallo la conexion <br>";
    die("Connection failed: " . mysqli_connect_error());
} else {
    //echo "Conexion exitosa";
}
@mysqli_select_db($conn, DB_NAME) or die('Not accessing table');

mysqli_query($conn,"SET NAMES 'utf8'");

$atop['ruta_completa_func'] = DIR_CONFIG;

$upload_dir = DIR_PATH . "images" . DS;

//include($atop['ruta_completa_func'] . "template.class.php");

//include($atop['ruta_completa_func'] . "functions.inc.php");

//include($atop['ruta_completa_func'] . "login.class.php");


//include($atop['ruta_completa_func'] . "directory.php");
//error_reporting(E_ALL ^ E_DEPRECATED);
//error_reporting(0);

/*
/?>


<?php
$res=mysqli_query($conn, "SELECT * FROM `configuracion`;");
if(mysqli_num_rows($res) > 0){
	while($fs=mysqli_fetch_array($res))
	{

		$copyrigth = $fs['copyrigth'];
		$email = $fs['email'];	
		$empresa = $fs['nombre'];	
		$logo = $fs['logo'];
		$telefonos = $fs['telefonos'];	
		$celulares = $fs['celulares'];	
		$direccion = $fs['direccion'];
		$horarioatencion = $fs['horarioatencion'];
		$facebook = $fs['facebook'];
		$twitter = $fs['twitter'];
		$linkedin = $fs['linkedin'];
		$google = $fs['google'];
		$youtube = $fs['youtube'];	
		$skype = $fs['skype'];	
		$boton_general = $fs['boton'];	
		$url_general = $fs['url'];	
		$descripcion= $fs['descripcion'];	
		$logofooter= $fs['logofooter'];	
		$imagencopyrigth= $fs['imagencopyrigth'];	
		$imagendistribuidor= $fs['imagendistribuidor'];	

	}
}
/?>
*/