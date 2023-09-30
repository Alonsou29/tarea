<?php
include_once('assets/action.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Tarea #2</title>
</head>
<body>
<div class="col-sm-6 d-flex justify-content-center">    
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <h3>Registro</h3><br>
        <label for="idCedula">Cedula</label><br>
        <input type="text" name="txtCedula" id="idCedula"><br>
        <label for="idNombre">Nombre</label><br>
        <input type="text" name="txtNombre" id="idNombre"><br><br>
        <h4>MATERIAS</h4><br>
        <label for="programacion">PROGRAMACION: </label>
        <input type="text" name="txtProgramacion" id="idProgramacion" width=5><br><br>
        <label for="matematicas">MATEMATICAS: </label>
        <input type="text" name="txtMatematicas" id="idMatematicas"><br><br>
        <label for="fisica">FISICA: </label>
        <input type="text" name="txtFisica" id="idFisica"><br><br>
        <input type="submit" value="Cargar" name="btn1"><br><br>
        <input type="submit" value="Ir a Estadistica" name="btn20">
    </form>
</div>
</body>
</html>