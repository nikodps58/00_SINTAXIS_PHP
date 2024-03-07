<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 01</title>
    <style>
        
        #container{
            padding: 80px;
            font-family: helvetica;
        }
    
    </style>
</head>

<body>

<div id="container">
  
<h1><?php

use function PHPSTORM_META\type;

 echo "Formato fecha"; ?></h1>


<p>date - Dar formato a la fecha/hora local</p>

<?php
    
    //function date();
    // mirar php.net
    
    
    // función para zona horaria, a partir de php 5.1
    date_default_timezone_set("Europe/Madrid");
    
    //mostrar hora
    echo date("H:i:s");
    
    //fecha, día-mes-año
    echo "<p>Hoy es ".date("d-m-Y")."</p>";
    // año-mes-día
    echo "<p>Hoy es ".date("Y-m-d")."</p>";  

?>

    <script>
        let quetabla;
        quetabla= prompt("Que tabla de multiplicar quieres?");
        
    </script> 

<?php

    //$tabla=5;
    $tabla ="<script>document.write(quetabla)</script>";
    echo $tabla;
    $tabla=intval($tabla);
    echo "<p> Tabla de multiplicar del $tabla a lo bruto <br> </p>";
    echo "<p> $tabla * 1 = ".($tabla*1)."</p>";
    echo "<p> $tabla * 2 = ".($tabla*2)."</p>";
    echo "<p> $tabla * 3 = ".($tabla*3)."</p>";
    echo "<p> $tabla * 4 = ".($tabla*4)."</p>";
    echo "<p> $tabla * 5 = ".($tabla*5)."</p>";
    echo "<p> $tabla * 6 = ".($tabla*6)."</p>";
    echo "<p> $tabla * 7 = ".($tabla*7)."</p>";
    echo "<p> $tabla * 8 = ".($tabla*8)."</p>";
    echo "<p> $tabla * 9 = ".($tabla*9)."</p>";
    echo "<p> $tabla * 10 = ".($tabla*10)."</p>";

    echo "<h1> Tabla de multiplicar del $tabla con un FOR <br> </h1>";
    for($x=1; $x<=10; $x++){
        echo "<p> $tabla * $x = ".($tabla*$x)."</p>";
    };
?>

</div>
    
</body>
</html>