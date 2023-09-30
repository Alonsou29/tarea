<?php 
session_start();

$empleados=[];

$empleados=$_SESSION['empleados'] ;

function mujeres($empleadoss){
    return $empleadoss['sexo'] === 'Femenino';
}

function hombrescasados($empleadoss){
    return $empleadoss['sexo'] === 'Masculino' && $empleadoss['sueldo']>2500 && $empleadoss['estado_civil']==='Casado(a)';
}
function viudas($empleadoss){
    return $empleadoss['sexo'] === 'Femenino' && $empleadoss['sueldo']>1000 && $empleadoss['estado_civil']==='Viudo(a)';
}
function edadhombresp($empleadoss) {
    $edadT = 0;
    $HombresT = 0;

    foreach ($empleadoss as $empleado) {
        if ($empleado['sexo'] === 'Masculino') {
            $edadT += $empleado['edad'];
            $HombresT++;
        }
    }

    $promedioHombre = ($HombresT > 0) ? ($edadT / $HombresT) : 0;

    return $promedioHombre;
}


$MujeresT = count(array_filter($empleados, 'mujeres'));
$HombresCasadosSalarioMax = count(array_filter($empleados, 'hombrescasados'));
$MujeresViudas= count(array_filter($empleados, 'viudas'));
$edadpromedioh= edadhombresp($empleados);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Consulta</title>
</head>
<body>
    <div class="col-sm-6 d-flex justify-content-center">
        <form method="post">
            <label for="idEstadoC">Empleados del sexo Femenino: <?php echo $MujeresT; ?></label><br>
            <br>
            <label for="idEstadoC">Hombres que ganan mas de 2500bs: <?php echo $HombresCasadosSalarioMax; ?> </label><br>
            <br>
            <label for="idEstadoC">Mujeres viudas que ganan mas de 1000bs: <?php echo $MujeresViudas; ?> </label><br>
            <br>
            <label for="idEstadoC">Edad promedio de los hombres: <?php echo round($edadpromedioh);?></label><br>
            <br>
            <a href="registro.php">Regresar</a>
        </form>
    </div>
</body>
</html>