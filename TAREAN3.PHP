<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TAREA N°3</title>
</head>
<body>
    <?php

//ejercicio N°1
    $n1=5;
    $n2=6;
    if ($n1>0) {
    echo "La variable es mayor a 0";
                }
   
    
//ejercicio N°2
    $n1=5;
    $n2=6;
    if ($n1>1 & $n2<10) {
 
        echo "<br>";
        echo "Es mayor a 1 y menor a 10";
    
                        }

//ejercicio 
    $n1=35;
    $n2=6;
    if ($n1>10 || $n2<2) {
 
        echo "<br>";
        echo "Cumple la condicion";
        echo "<br>";

                    }

//ejercicio N°4
    $num1=35;
    $num2=6;               
       if ($num1>$num2) {
        echo "La variable es mayor a la variable 2";
        echo "<br>";
        echo $num1-$num2;
        echo "<br>";
        echo $num1+$num2;
        echo "<br>";}
    
      elseif ($num1<$num2) {
        echo "la variable es menor a la variable 2";
        echo "<br>";

                    }
      
      else {
        echo "los numeros ingresados son iguales";

                    }

    ?>
</body>
</html>