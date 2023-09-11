<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tp1_backend</title>
</head>
<body>
<?php
    //EJERCICIO 1/
    $saludo = "Hola mundo";
    echo $saludo . "<br>";
    
    //EJERCICIO 2//
    $a = 20;
    $b = 6;

    echo ($a + $b) . "<br>";
    echo ($a - $b) . "<br>";
    echo ($a * $b) . "<br>";
    echo ($a / $b) . "<br>";
         echo ($a % $b) . "<br>";

    //EJERCICIO 3//
    $gradosCelcius = 20;

    $gradosFahrenheit = ($gradosCelcius * 9/5) + 32;

    echo "Los grados Fahrenheit son:" . $gradosFahrenheit . "<br>"; 

    //EJERCICIO 4//
    $base = 18;
    $altura = 12;

    $perimetro = 2 * ($base + $altura);
    $area = $base * $altura;

    echo "El perimetro es:" . $perimetro . "<br>";
    echo "El area es:" . $area . "<br>";

    //EJERCICIO 5//
    $radio = 30;
    $radioAlCuadrado = pow($radio, 2);

    $area2 = pi() * $radioAlCuadrado; 

    echo "El area es:" . $area2 . "<br>"; 
    ?>
</body>
</html>