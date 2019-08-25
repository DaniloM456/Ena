<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "ena01";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$conn) 
{
	die("No hay conexión: ".mysqli_connect_error());
}

$nombre = $_POST["txtusuario"];
$pass = $_POST["txtpassword"];

$query = mysqli_query($conn,"SELECT * FROM login WHERE usuario = '".$nombre."' and clave = '".$pass."'");
$nr = mysqli_num_rows($query);

if($nr == 1)
{
	//aqui el login nos envia al menu
	header("Location: menu.php");
}
else if ($nr == 0) 
{
	header("Location: index.php");
	//aqui en el caso de ser incorrecto el usuario nos volvera a dejar en el login
}
	



?>