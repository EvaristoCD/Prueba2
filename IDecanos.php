<?php
    //Comentario de prueba para el paso 6 del IDecanos.php
    $cedula = $_POST['cedula'];
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $celular = $_POST['celular'];

    $SQL = "INSERT INTO decanos VALUES('$cedula','$nombre','$apellidos','$celular')";
    
    include("Controlador.php");
    $Con = Conectar();
    $Result = Ejercutar($Con,$SQL);
    if($Result == 1){
        print("REGISTRO INSERTADO CORRECTAMENTE");
    }else{
        print("0 REGISTROS INSERTADOS");
    }
    Desconectar($Con);
?>
