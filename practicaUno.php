<?php


    $edad = $_POST["age"];
    $nombre = $_POST["name"];

    
    if($edad >18){
        echo "El usuario $nombre es Mayor de edad";
    }else{
        echo "El Usuario $nombre es Menor de edad";
    }


?>