
<?php


echo '
<!DOCTYPE html>
<html>
    <head>
        <title> Calculadora de velocidad  </title>
        <meta charset="utf-8">
        <style>
        body{
            background-color:aqua;
        }
        #edit{
            align-content: center;
        }
        </style>
    </head>
    <body>


<div id="edit">
    <h1>Calculadora de velocidad promedio</h1>
<h2>
<form action="calculadoraPoot.php" method="post">
   Distancia: <input type="number" name="distacia" /><br />
    Tiempo:  <input type="number" name="tiempo" /><br />
    <input type="submit" name="submit" value="Calcular" />
</h2>
</form>
</div>'

;



if (isset($_POST['distacia'])) {
 
$resultado = $_POST ["distacia"] / $_POST ["tiempo"];
echo "La velocidad promedio es:";  
echo  $resultado;
}
  
echo '
    </body>
</html>
';





?>