<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
        Ingrese el Nombre de la Persona <br>
        <input type="text" name="nombre"> <br>
        <input type="radio" name="opcion" value="0">No tiene estudio<br>
        <input type="radio" name="opcion" value="1">Estudios primarios<br>
        <input type="radio" name="opcion" value="2">Estudios secundarios<br>
        <input type="submit">
    </form>
</body>

</html>



<?php

    $nombre= $_POST["nombre"];
    $valor= $_POST["opcion"];

    if($valor ==="0"){
        echo "$nombre No tiene estudio";
    }elseif($valor ==="1"){
        echo "$nombre tiene Estudios Primarios";
    }elseif($valor ==="2"){
        echo "$nombre tiene Estudios Secundarios";
    }else{
        echo "No se selecciono ninguna opcion";
    }

?>