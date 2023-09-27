<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
        Ingrese su nombre <br>
        <input type="text" name="name"><br>
        Seleccione sus ingresos <br>
        <select name="select" id="">
            <option value="0">1-1000</option>
            <option value="1">1001-3000</option>
            <option value="2">mas de 3000</option>
        </select>
        <input type="submit">

    </form>
</body>

</html>


<?php
$name = $_POST["name"];
echo $name ."<br>";


if(isset($_POST["select"])){
        $option = $_POST["select"];

switch($option){
    case "0":
        echo "Los ingresos son de 1-100";
        break;
    case "1":
        echo "Los ingresos son de 1001-3000";
        break;
    case "2":
        echo "Los ingresos son  mayores de 3000 debe pagar impuestos";
        break;
        default:
        echo "No ha seleccionado ningun elemento";
}
}

?>