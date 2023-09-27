<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
        <h3>Horas maximas de vuelo 1800</h3>
        <input type="number" name="horas">Ingrese el numero de horas del piloto <br><br>
        <input type="submit">

    </form>
</body>

</html>

<?php
$horasVuelo = 1650;
$maxHoras = 1800;

if (isset($_POST["horas"])){
    $horasTotales = $_POST["horas"];
    $horasMin = ($horasTotales + $horasVuelo);
    if($horasMin > $maxHoras){
        echo "Alerta el piloto ha sobrepasado las horas de vuelo";
    }else{
        $horasFaltantes = $maxHoras - $horasMin ;
        echo "Le faltan $horasFaltantes  horas para llegar al maximo de Horas permitidas";
    }
    
}

?>