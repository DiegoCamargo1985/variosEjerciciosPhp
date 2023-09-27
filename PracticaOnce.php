<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
        Su mensaje debe contener 150 caracteres maximo <br><br>
        <input type="text" name="texto" placeholder="Ingrese su mensaje de texto"><br><br>
        <input type="submit">
    </form>
</body>

</html>

<?php
if(isset($_POST["texto"])){
    $comentario = $_POST["texto"];
$caracteres = strlen($comentario);
    echo "<br>" . $comentario ."<br>";
    
    if($caracteres > 150){
        echo "<br>"."La longitud máxima de los comentarios es de 150, tu comentario en
        cambio tiene $caracteres caracteres.";
    }
}

?>