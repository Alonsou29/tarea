<?php 
session_start();

$alumnos3 = [];

$alumnos3 = $_SESSION['alumnos'];

foreach($alumnos3 as $item){echo $item['Cedula'];}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Estadisticas</title>
</head>
<body>
<h2>REGISTRO DE ESTUDIANTES Y NOTAS</h2><br>
<div>
    <form method="post">
        <table class="table table-bordered table table-hover table-responsive">
            <thead>
                <tr>
                    <th>Cedula</th>
                    <th>Nombre</th>
                    <th>Fisica</th>
                    <th>Matematicas</th>
                    <th>Programacion</th>
                    <th>Promedio</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($alumnos3 as $alum) {
                echo "<tr>";
                echo "<td>" . $alum['Cedula'] . "</td>";
                echo "<td>" . $alum['Nombre'] . "</td>";
                echo "<td>" . $alum['Fisica'] . "</td>";
                echo "<td>" . $alum['Matematicas'] . "</td>";
                echo "<td>" . $alum['Programacion'] . "</td>";
                echo "</tr>";}
                ?>
            </tbody>
        </table>
    </form>
</div>   
</body>
</html>