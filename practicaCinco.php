<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h4>Ingresa los datos faltantes</h4>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
        <textarea name="name" id="" cols="40" rows="14" readonly>En la ciudad de [……..], se acuerda entre la Empresa [……..] representada por el Sr. [……..] en 
su carácter de Apoderado, con domicilio en la calle [……..] y el Sr. [……..], futuro empleado 
con domicilio en [……..], celebrar el presente contrato a Plazo Fijo, de acuerdo a la normativa 
vigente de los artículos 90, 92, 93, 94, 95 y concordantes de la Ley de Contrato de Trabajo 
No. 20744</textarea><br>
        En la ciudad de
        <input type="text" name="ciudad">, se acuerda entre la Empresa
        <input type="text" name="empresa"> representada por el Sr.
        <input type="text" name="nombre"> en su caracter de Apoderado, con domicilio en la calle
        <input type="text" name="direccion"> y el Sr
        <input type="text" name="empleado">, futuro empleado con domicilio en
        <input type="text" name="direccionUno">, celebrar el presente contrato a plazo fijo, de acuerdo a la normativa
        vigente de los articulos 90, 92, 93, 94, 95 y concordantes de la Ley de contrato de Trabajo No 20744.<br>
        <input type="submit"><br><br>

    </form>

</body>

</html>

<?php
if(isset($_POST["ciudad"])&& $_POST["empresa"] && $_POST["nombre"] && $_POST["direccion"] && $_POST["empleado"] && $_POST["direccionUno"]){
    $ciudad = $_POST["ciudad"]; 
    $empresa = $_POST["empresa"];
    $nombre = $_POST["nombre"];
    $direccion = $_POST["direccion"];
    $empleado = $_POST["empleado"];
    $direccionUno = $_POST["direccionUno"];




echo "En la ciudad de $ciudad, se acuerda entre la Empresa $empresa representada por el Sr. $nombre en 
su carácter de Apoderado, con domicilio en la calle $direccion y el Sr. $empleado, futuro empleado 
con domicilio en  $direccionUno, celebrar el presente contrato a Plazo Fijo, de acuerdo a la normativa 
vigente de los artículos 90, 92, 93, 94, 95 y concordantes de la Ley de Contrato de Trabajo 
No. 20744";
}

?>