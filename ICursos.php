<?php
    $id = $_GET['id'];
    $cedula = $_GET['cedula'];
    $codigo = $_GET['codigo'];

    $SQL = "INSERT INTO cursos VALUES('$id','$cedula','$codigo')";

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