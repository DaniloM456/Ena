<!DOCTYPE html>
<html>


<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Inicio de sesion</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
<div  class="form">
	<form action="login.php"   method="post">
		<p>Inicio de sesion</p>
		<label for= "Nombre">Usuario</label>
		<br>
		<br>
		<input type="text" name="txtusuario" placeholder="" required>
		<br>
		<br>
		<label>Contraseña</label>
		<br>
		<br>
		<p><input type="password" name="txtpassword"  placeholder="" required></p>
		<br>
        <br>
        <br>
        <br>
        <input type="submit" value="ingresar">
	</form>

</div>
</body>
</html>