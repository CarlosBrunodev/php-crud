<?php
    $server = "localhost";
    $user ="";
    $pass = "";
    $bd = "cadastro";

    if( $conn = mysqli_connect($server,$user,$pass, $bd)){
       // echo" Conectado com o banco!";
    } else 
        echo "erro";

    function mensagem( $texto, $tipo){
        echo "<div class='alert alert-$tipo' role='alert'>
                $texto 
            </div>";
    }
?>