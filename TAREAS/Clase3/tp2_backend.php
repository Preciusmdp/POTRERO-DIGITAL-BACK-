<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Tarea Clase 3</h1>

    <?php

    /* 1. Crear una variable n y validar que sea un número positivo. */
    $variable1= 10;
    if ($variable1>0){
        echo "La variable1 es un numero positivo porque es mayor a 0";
        echo "<br>";
    }
    else {
        echo "La variable1 es un numero Negativo";
        echo "<br>";
    } # Resultado: es positivo

    $variable2= -10;
    if ($variable2>0){
        echo "La variable2 es un numero positivo porque es mayor a 0";
        echo "<br>";
    }
    else {
        echo "La variable2 es un numero Negativo";
        echo "<br>";
    } # Resultado: es negativo

    echo "<br>";
    
#--------------------------------------------------------------------------------------------------

    /*2. Crear una variable n y validar que sea un número mayor a 1 y menor a 10.*/
     $variable3=12;
     if($variable3>1 & $variable3<10){
        echo "La variable3 cumple ambas condiciones";
        echo "<br>";
     }
     else {
        echo "La variable3 no cumple las condiciones";
        echo "<br>";
     } # Resultado: cumple La condicion

     $variable4=2;
     if($variable4>1 & $variable4<10){
        echo "La variable4 cumple ambas condiciones";
        echo "<br>";
     }
     else {
        echo "La variable4 no cumple las condiciones";
        echo "<br>";
     } # Resultado: No cumple La condicion

     echo "<br>";
#---------------------------------------------------------------------------------------------------

     /* 3. Crear una variable n y validar que sea un número mayor a 10 o menor a 2. */

     $variable5=1;
     if($variable5<2 || $variable5>10){
        echo "La variable5 cumple una de las dos condiciones";
        echo "<br>";
     }
     else {
        echo "La variable5 no cumple las condiciones";
        echo "<br>";
     } # Resultado: cumple La condicion

     $variable6=8;
     if($variable6<2 || $variable6>10){
        echo "La variable6 cumple una de las dos condiciones";
        echo "<br>";
     }
     else {
        echo "La variable6 no cumple las condiciones";
        echo "<br>";
     } # Resultado: No cumple La condicion

     echo "<br>";
#---------------------------------------------------------------------------------------------------


     /*4. Crear dos variables, una con nombre numero1 y otra con el nombre de numero2. 
     * Si numero1 es mayor a numero2, mostrar por pantalla, la suma y la resta. 
     * Si numero2 es mayor a numero1, mostrar por pantalla la multiplicación, la división entera y el resto de la división. 
     * Si numero1 y numero2 son iguales, mostrar el siguiente mensaje “Los números ingresados son iguales” */

     $numero1=80;
     $numero2=15;
     
     $sumar= $numero1 + $numero2;
     $restar= $numero1 - $numero2;

     $multiplicar = $numero2*$numero1;
     $division= $numero2/$numero1;
     $restoDeLaDivision= $numero2%$numero1;


     if($numero1>$numero2){
        echo $sumar." Es la suma de num1 y num2." ;
        echo "<br>";
        echo $restar." Es la resta de num1 y num2." ;
        echo "<br>";
     } # Resultado 
     elseif ($numero1<$numero2){
        echo $multiplicar." Es la multiplicacion entre num2 y num1." ;
        echo "<br>";
        echo $division." Es la division entre num2 y num1." ;
        echo "<br>";
        echo $restoDeLaDivision." Es el resto de la  division entre num2 y num1." ;
        echo "<br>";
     } 
     else {
        echo "Los numeros son iguales";
     }
     echo "<br>";


     $numero3=15;
     $numero4=80;
     
     $sumar2= $numero3 + $numero4;
     $restar2= $numero3 - $numero4;

     $multiplicar2 = $numero4*$numero3;
     $division2= $numero4/$numero3;
     $restoDeLaDivision2= $numero4%$numero3;


     if($numero3>$numero4){
        echo $sumar2." Es la suma de num1 y num2." ;
        echo "<br>";
        echo $restar2." Es la resta de num1 y num2." ;
        echo "<br>";
     }  
     elseif ($numero3<$numero4){
        echo $multiplicar2." Es la multiplicacion entre num2 y num1." ;
        echo "<br>";
        echo $division2." Es la division entre num2 y num1." ;
        echo "<br>";
        echo $restoDeLaDivision2." Es el resto de la  division entre num2 y num1." ;
        echo "<br>";
     } # Resultado
     else {
        echo "Los numeros son iguales";
     }
     echo "<br>";


     $numero5=150;
     $numero6=150;
     
     $sumar3= $numero5 + $numero6;
     $restar3= $numero5 - $numero6;

     $multiplicar3 = $numero6*$numero5;
     $division3= $numero6/$numero5;
     $restoDeLaDivision3= $numero6%$numero5;


     if($numero5>$numero6){
        echo $sumar3." Es la suma de num1 y num2." ;
        echo "<br>";
        echo $restar3." Es la resta de num1 y num2." ;
        echo "<br>";
     }  
     elseif ($numero5<$numero6){
        echo $multiplicar3." Es la multiplicacion entre num2 y num1." ;
        echo "<br>";
        echo $division3." Es la division entre num2 y num1." ;
        echo "<br>";
        echo $restoDeLaDivision3." Es el resto de la  division entre num2 y num1." ;
        echo "<br>";
     } 
     else {
        echo "Los numeros son iguales";
     }# Resultado


    ?>
</body>
</html>