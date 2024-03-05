<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 16</title>
    <style>
        
        #container{
            padding: 80px;
            font-family: helvetica;
        }
    
    </style>
</head>

<body>

<div id="container">
  
<h1>ARRAY FOREACH $_SERVER</h1>

<p></p>



<ul>
<?php 
    

    
   echo "<ul>";
    
        foreach($_SERVER as $key => $valor){
            echo "<li>\$_SERVER['$key'] = $valor</li>";
        }
    
    echo "</ul>";  
    echo "<p> el document-root es ". $_SERVER['DOCUMENT_ROOT']  ."</p>";

?>
</ul>


</div>
    
</body>
</html>




