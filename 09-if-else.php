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
  
<h1>IF-ELSE</h1>


<?php 
    
    $USUARIO="Nerea";
    $CLAVE="area";
    //importante mayúscula de las variables
    echo "<p>Usuario es $USUARIO </p>";
    echo "<p>Clave es $CLAVE </p>";
    
    if($USUARIO == "Nerea"){
        echo "<p> Bienvenida Nerea </p>";
    }else{
        echo "<p> Los datos no son correctos!!! </p>";
    }
    
    if(($USUARIO=="Nerea") and ($CLAVE=="area")){ //true
        echo "<p> Bienvenida Nerea, la clave es correcta </p>";   
    }else{
        echo "<p> Los datos no son correctos </p>";
    }
    
    if(($USUARIO=="Nerea") or ($CLAVE=="casa")){ //true
        echo "<p> Bienvenida Nerea, la clave NO es correcta </p>";   
    }else{
        echo "<p> Los datos no son correctos </p>";
    }
    
?>





<section>

<?php if ($USUARIO == "Nerea"){ ?>

<article>
    <h2>Hola Nerea</h2>
</article>

<?php }else{ ?>

<article>
    <h2>No eres Nerea</h2>
</article>

<?php } ?>

</section>


</div>
    
</body>
</html>




