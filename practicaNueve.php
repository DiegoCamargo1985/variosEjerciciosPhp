<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
        <input type="text" name="name1">Ingresa tu Nombre <br>
        <input type="password" name="psw1">Ingresa tu Password <br><br>
        <input type="text" name="name2">Ingresa tu Nombre <br>
        <input type="password" name="psw2">Ingresa tu Password <br><br>
        <input type="text" name="name3">Ingresa tu Nombre <br>
        <input type="password" name="psw3">Ingresa tu Password <br><br>
        <input type="text" name="name4">Ingresa tu Nombre <br>
        <input type="password" name="psw4">Ingresa tu Password <br><br>
        <input type="text" name="name5">Ingresa tu Nombre <br>
        <input type="password" name="psw5">Ingresa tu Password <br><br>
        <input type="submit">
    </form>
</body>

</html>
<?php
$array=[];
if(isset($_POST["name1"])&& $_POST["name2"]&& $_POST["name3"]&& $_POST["name4"]&& $_POST["name5"]&& $_POST["psw1"]&& $_POST["psw2"]&& $_POST["psw3"]&& $_POST["psw4"]&& $_POST["psw5"]){
$name1 =$_POST["name1"];
$name2 =$_POST["name2"];
$name3 =$_POST["name3"];
$name4 =$_POST["name4"];
$name5 =$_POST["name5"];
$psw1 = $_POST["psw1"];
$psw2 = $_POST["psw2"];
$psw3 = $_POST["psw3"];
$psw4 = $_POST["psw4"];
$psw5 = $_POST["psw5"];
   

    for($i=0;$i<6;$i++){
       $array[$name1] =$psw1; 
       $array[$name2] =$psw2; 
       $array[$name3] =$psw3; 
       $array[$name4] =$psw4; 
       $array[$name5] =$psw5; 
    }
} 
foreach($array as $nombre => $password){
    
    if($nombre == "diego" && $password == 1234){
        echo "Diego Ingresa a ". '<a href="./google.com">Google</a>'."<br>";
    }elseif ($nombre == "maria" && $password == 1234) {
        echo "Maria Ingresa a ".'<a href="./instagram.com">Instagram</a>'."<br>";
    }elseif ($nombre == "luis" && $password == 1234) {
        echo "Luis Ingresa a ". '<a href="./facebook.com">Facebook</a>'."<br>";
    }elseif ($nombre == "jose" && $password == 1234) {
        echo "Jose Ingresa a ".'<a href="./twitter.com">Twitter</a>'."<br>";
    }elseif ($nombre == "blanca" && $password == 1234) {
        echo "Blanca Ingresa a ".'<a href="./gmail.com">Gmail</a>'."<br>";
    }
}


?>