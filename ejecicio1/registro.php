<?php 
include_once('assets/accion.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tarea #1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="col-sm-6 d-flex justify-content-center">    
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <h3>Registro</h3><br>
        <label for="idNombre">Nombre</label><br>
        <input type="text" name="txtNombre" id="idNombre"><br>
        <label for="idApellido">Apellido</label><br>
        <input type="text" name="txtApellido" id="idApellido"><br>
        <label for="Edad">Edad</label><br>
        <input type="text" name="txtEdad" id="idEdad"><br>
        <label for="idEstadoC">Estado Civil</label><br>
        <select name="EstadoC">
            <option selected="selected" >Soltero(a)</option>
            <option>Casado(a)</option>
            <option>Viudo(a)</option>
        </select><br>
        <label for="idSexo">Sexo</label><br>
        <select name="Sexo">
            <option selected="selected">Masculino</option>
            <option>Femenino</option>
        </select><br>
        <label for="Sueldo">Sueldo</label><br>
        <input type="text" name="txtSueldo" id="idSueldo"><br>
        <input type="submit" value="Registro" name="btn"><br><br><br>

        <input type="submit" value="Ir a Estadistica" name="btn2"><br><br><br>


        <input type="submit" value="eliminar empleados" name="eli"><br><br><br>
    </form>
    </div>


</body>
</html>