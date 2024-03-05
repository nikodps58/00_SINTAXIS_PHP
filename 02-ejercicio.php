<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio php</title>
    <style>
        .txt{
            color: orangered;
        }
        .blue{
            color: blue;
        }
    
    </style>
</head>

<body>
  
<h1 class="blue">php y js</h1>

<script>
    let nombre, apellido;
    nombre= prompt("Como te llamas?");
    apellido= prompt("Y tu apellido?");
    //document.write("Hola "+nombre+" "+apellido);
    
</script> 


<?php 
    
// variable en php se define con $ por delante 

$nom= "<script>document.write(nombre)</script>";
$app= "<script>document.write(apellido)</script>";
 
//con document.write o document.getElementById("").innerHTML
   
//echo "Hola $nom"; 
echo "<p> Hola $nom $app ¿ya esta preparado?</p>";
 
?>
    
 
</body>
</html>