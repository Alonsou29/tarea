<?php 

session_start();

function solo_letras($cadena){
    $permitidos = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ ";
    for ($i=0; $i<strlen($cadena); $i++){
    if (strpos($permitidos, substr($cadena,$i,1))===false){
    return false;}
    } 
    return true;} 


    
if (!isset($_SESSION['empleados'])) {
    $_SESSION['empleados'] = [];
    }

if(isset($_POST['btn2'])){
    header("Location: consulta.php");
}

if(isset($_POST['btn']) && !empty($_POST['txtNombre']) && !empty($_POST['txtApellido'])&& !empty($_POST['txtEdad']) && !empty($_POST['txtSueldo'])){
    if (is_numeric($_POST['txtEdad']) && is_numeric($_POST['txtSueldo'])){
        if($_POST['txtEdad'] > 17){
        if (solo_letras($_POST['txtNombre']) && solo_letras($_POST['txtApellido'])){
            if (count($_SESSION['empleados']) >= 5) {
                echo "<script>alert('No se pueden registrar más de 5 empleados.');</script>";
            }else{
                $empleado = [
                    'nombre' => $_POST['txtNombre'],
                    'apellido' => $_POST['txtApellido'],
                    'edad' => (int)$_POST['txtEdad'],
                    'estado_civil' => $_POST['EstadoC'],
                    'sexo' => $_POST['Sexo'],
                    'sueldo' => $_POST['txtSueldo'],
                ];
        
                $_SESSION['empleados'][] = $empleado;
        
                echo "<script>alert('Empleado registrado exitosamente');</script>";

            }
        }else{echo "<script>alert('Nombre y Apellido no pueden llevar numeros!');</script>";}
    }else{echo "<script>alert('No pueden ser menores de edad');</script>";}
    }else{echo "<script>alert('sueldo y edad son campos numericos!');</script>";}
}else{echo "<script>alert('Llene todos los campos');</script>";}

if(isset($_POST['eli'])){
    session_destroy();
}


?>