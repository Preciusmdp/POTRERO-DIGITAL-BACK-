<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tarea Clase 2 (Back end)</h1>
    <?php 
        /*
        Crear un archivo “tp1_backend.php” y realizar los siguientes ejercicios:
        1. Imprima por pantalla: “Hola mundo”.
        2. Cargue en una variable la cadena de caracteres “Hola mundo” y luego la imprima por pantalla.
        3. Crear dos variables enteras y mostrar por pantalla, la suma, la resta, la multiplicación, la división
        entera y el resto de la división entera.
        4. Realizar la transformación de grados Celsius a Fahrenheit, para el valor 20°C y luego lo imprima por
        pantalla.
        5. Implementar algoritmos que permitan:
        a) Calcular el perímetro y el área de un rectángulo, dado que su base es 18cm y su altura 12cm.
        b) Calcular el perímetro y el área de un círculo dado que su radio es de 30cm.*/ 

        //1
        echo "Ejercicio 1: ";
        echo "<br>";

        echo "Hola Mundo ";
        echo "<br>";
        echo "<br>";

        //2
        echo "Ejercicio 2: ";
        echo "<br>";
        
        $saludoInicial ="Hola Mundo desde variable";
        echo $saludoInicial;
        echo "<br>";
        echo "<br>";

        //3 
        echo "Ejercicio 3: ";
        echo "<br>";

        $numero1 = 200;
        $numero2 = 25;
        $suma = $numero1+$numero2;
        $resta = $numero1-$numero2;
        $multiplicacion = $numero1*$numero2;
        $division = $numero1/$numero2;
        $resto = $numero1%$numero2;
        echo $suma. " Suma (200+25)";
        echo "<br>";
        echo $resta. " Resta (200-25)";
        echo "<br>";
        echo $multiplicacion. " Multiplicacion (200*25)";
        echo "<br>";
        echo $division. " division (200/25)";
        echo "<br>";
        echo $resto. " Resto (200%25)";
        echo "<br>";
        echo "<br>";

        //4
        echo "Ejercicio 4: ";
        echo "<br>";

        $valor = 20;
        $convertirAFar = $valor*1.8+32;
        echo $convertirAFar. " Conversion a farenheit de 20°";
        echo "<br>";
        echo "<br>";

        //5.A.
        echo "Ejercicio 5 A: ";
        echo "<br>";

        $areaCuadrado = 18*12;
        $perimetroCuadrado = (18*2)+(12*2);
        echo $areaCuadrado. " Area del cuadrado de lados 18 y 12";
        echo "<br>";
        echo $perimetroCuadrado. " Perimetro del cuadrado de lados 18 y 12";
        echo "<br>";
        echo "<br>";

        //5.B.* //me ayude con internet pk no podia resolver la escritura con pi ni con el cuadrado
        echo "Ejercicio 5 B: ";
        echo "<br>";

        $perimetroCirculo = 2*pi()*30;
        $areaCirculo = pi()* pow(30, 2);
        echo $areaCirculo. " Area del circulo con radio de 30cm";
        echo "<br>";
        echo $perimetroCirculo. " Perimetro del circulo con radio de 30cm";

 
    ?>



</body>
</html>