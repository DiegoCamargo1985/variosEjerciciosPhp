<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
        Ingresa el dia de la semana <br>
        <input type="text" name="name"><br><br>
        <input type="submit">
    </form>

</body>

</html>


<?php
if(isset($_POST["name"])){
    $dia = $_POST["name"];

    $dias =[];
    var_dump($dias);

}





?>