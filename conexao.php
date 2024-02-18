<?php 
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $dbname = "registro";
    
    $conexao = mysqli_connect($servidor, $usuario, $senha, $dbname);

    if(!$conexao){
        die("Houve um erro: ");
    }

?>