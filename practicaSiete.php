<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
<input type="text" name="name" placeholder="Ingresa Nombre"><br>
<input type="text" name="direccion" placeholder="Ingresa Direccion"><br><br>
<input type="checkbox" name="claseUno" value="Jamon y Queso"> Jamon y Queso
<input type="text" name="cantidadUno" placeholder="Cantidad" value=" "><br>
<input type="checkbox" name="claseDos" value="Napolitana"> Napolitana
<input type="text" name="cantidadDos" placeholder="Cantidad" value=" "><br>
<input type="checkbox" name="claseTres" value="Mozzarela"> Mozzarela
<input type="text" name="cantidadTres" placeholder="Cantidad" value=" "><br><br>
<input type="submit" value="Confirmar">
</form>
    
</body>
</html>

<?php
$file="datos.txt";

if(isset($_POST["name"])&& $_POST["direccion"]!=" "&& $_POST["claseUno"]&& $_POST["claseDos"]&& $_POST["claseTres"]&& $_POST["cantidadUno"]&& $_POST["cantidadDos"]&& $_POST["cantidadTres"]){
$name = $_POST["name"];
$adress = $_POST["direccion"];
$jyq = $_POST["claseUno"];
$cantidadUno = $_POST["cantidadUno"];
$Napo = $_POST["claseDos"];
$cantidadDos = $_POST["cantidadDos"];
$mozza = $_POST["claseTres"];
$cantidadTres = $_POST["cantidadTres"];

$fp =fopen($file, "r+"); //abrir archivo de texto 
$old = fread($fp, filesize($file)+1);//lee el archivo que se abrio previamente
$entry ="<p><b>$name</b>.<br>$adress.<br>$jyq:$cantidadUno.<br>$Napo:$cantidadDos.<br>$mozza:$cantidadTres.</p>\n";
rewind($fp); // coloca el cursor al inicio del archivo
fputs($fp, "$entry \n $old"); //ingresa la informacion al archivo
fclose($fp);


header('location: practicaSiete.php');

}
readfile($file);

?>