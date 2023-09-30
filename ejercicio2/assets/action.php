<?php 

session_start();


function sololetras($cadena){
    $permitidos = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ ";
    for ($i=0; $i<strlen($cadena); $i++){
    if (strpos($permitidos, substr($cadena,$i,1))===false){
    return false;}
    } 
    return true;} 


if (!isset($_SESSION['ALUMNOS'])){
    $_SESSION['alumnos']=[];
}

if(isset($_POST['btn20'])){
    header("Location: estadistica.php");
}

if(isset($_POST['btn1'])){
    if(!empty($_POST['txtCedula']) && !empty($_POST['txtNombre']) && !empty($_POST['txtFisica']) && !empty($_POST['txtMatematicas']) && !empty($_POST['txtProgramacion'])){
        if(is_numeric($_POST['txtFisica']) && is_numeric($_POST['txtMatematicas']) && is_numeric($_POST['txtProgramacion']) && is_numeric($_POST['txtCedula'])){
            if(sololetras($_POST['txtNombre'])){
                if($_POST['txtFisica'] < 21 && $_POST['txtMatematicas'] <21 && $_POST['txtProgramacion'] < 21 ){
                    if($_POST['txtFisica'] > 0 && $_POST['txtMatematicas'] > 0 && $_POST['txtProgramacion'] > 0 ){
                        $alumnoss=[
                            'Cedula' => $_POST['txtCedula'],
                            'Nombre' => $_POST['txtNombre'],
                            'Fisica' => $_POST['txtFisica'],
                            'Matematicas' => $_POST['txtMatematicas'],
                            'Programacion' => $_POST['txtProgramacion']
                        ];

                        $_SESSION['alumnos'][] = $alumnoss;

                        echo "<script>alert('Carga exitosa!');</script>";
                    }else{echo "<script>alert('Las notas no pueden ser menor a 0');</script>";}
                }else{echo "<script>alert('Las notas no pueden ser mayor a 20');</script>";}
            }
        }else{echo "<script>alert('Las materias y la cedula solo pueden tener numeros!');</script>";}
    }else{echo "<script>alert('Llene todos los campos!');</script>";}
}



?>