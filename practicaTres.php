<?php
$name = $_POST["name"];
$result = 0;

if(isset($_POST["futbol"])=="1"){
    $result = $result+1;
}
if(isset($_POST["basket"])=="1"){
    $result = $result+1;
}
if(isset($_POST["tennis"])=="1"){
    $result = $result+1;
}
if(isset($_POST["Volleyball"])=="1"){
    $result = $result+1;
}

echo "El usuario $name practica $result deportes";
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Practica Tres</h3>
    <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="POST">
        <input type="text" name="name">Ingrese Nombre <br><br>
        <label for="">Escoje tus deportes</label><br>
        <input type="checkbox" name="futbol" value="1">Futbol
        <input type="checkbox" name="basket" value="1">Basket
        <input type="checkbox" name="tennis" value="1">Tennis
        <input type="checkbox" name="Volleyball" value="1">Volleyball <br>
        <input type="submit">
    </form>
</body>

</html>