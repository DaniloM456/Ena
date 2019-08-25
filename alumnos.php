<!DOCTYPE html>
<html>


<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Registrar alumno</title>
	<link rel="stylesheet" type="text/css" href="estiloalumno.css">
</head>
<body>
    <fieldset>
    <form  action="registraralumno.php" method="POST">
        <div style="width:500px; padding:3px;">
            <p>Registro de alumnos</p>
      
    	 Nombres:  <label><input type="text" name="txtNombre"></label>
       
         Apellido Paterno: <label><input type="text" name="txtApellidoP"></label><br>
        <br>
        
         Apellido Materno: <label><input type="text" name="txtApellidoM"></label><br>
        <br>
    
        Rut : <label><input type="text" name="txtRut"></label><br>
        <br>
        
        Teléfono: <label><input type="text" name="txtTelefono"></label>
        
       
        Dirección: <label><input type="text" name="txtDireccion"></label><br>
        <br>
        
        Fecha de Nacimiento: <label><input type="text" name="txtFechaNacimiento"></label><br>
        <br>
       
        Sexo:
        <select name="cmbSexo">
            <option value="masculino">Masculino</option>
            <option value="femenino">Femenino</option>
        </select><br>
        <br>

        <input type="submit" value="Registrar"   name="btnregistrar">
        <br>
        <br>
         <li><a href="menu.php">Volver al menu principal</a></li>
      </div> 
    </form>
</fieldset>
<html>
<head>
    <title>Registrar alumno</title>
    <link rel="stylesheet" type="text/css" href="estiloalumno.css">
</head>
    <head>
<body>
      <fieldset>
    <form  action="eliminar.php" method="POST"     >
        <p>Eliminar Alumno</p> 
     Rut: <label><input type="text" name="txtrut"> </label><br/>
     <br>
     <br>
     <input type="submit" value="eliminar registro"   name="btneliminar">
     <br>
     <br>
    </form>
     </fieldset>
   </head>
<body>
</html>
<html>
<head>
    
    <link rel="stylesheet" type="text/css" href="estiloalumno.css">
</head>
    <head>
<body>
      <fieldset>
    <form  action="actualizarinfoalumno.php" method="POST"     >
         <p>Actualizar alumno</p>
     cedula: <label><input type="text" name="txtcedula"> </label><br/>
     <br>
     <br>
     <input type="submit" value="actualizar registro"   name="btactualizar">
     <br>
     <br>
    </form>
     </fieldset>
   </head>
<body>

</html>