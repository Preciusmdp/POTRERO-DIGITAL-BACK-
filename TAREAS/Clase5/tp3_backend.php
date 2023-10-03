<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Tarea Clase 5</h1>
    <?php
    
    /* 1. Mostrar los números del 1 al 100.*/

    echo "Mostrar los números del 1 al 100 =  ";

    $i1 = 1;

    while ($i1 < 101) {
        print " $i1 ";
        $i1++;
    }
    echo "<br>";
    echo "<br>";

    
    
    /* 2. Mostrar los números del 100 al 1.*/
    
    echo "Mostrar los números del 100 al 1 = ";

    $i2 = 100;

    while ($i2 > 0) {
        print " $i2 ";
        $i2--;  
    }

    echo "<br>";
    echo "<br>";

    
    
    /* 3. Mostrar los números pares del 1 al 100.*/

    echo "Mostrar los números pares del 1 al 100 = ";

    $i3 = 2;

    do {
        print " $i3 ";
        $i3 = $i3 + 2;
    }
        while ($i3 < 101);

    echo "<br>";
    echo "<br>";


    /* 4. Mostrar los números impares del 1 al 100.*/

    echo "Mostrar los números impares del 1 al 100 = ";

    $i4 = 1;

    do {
        print " $i4 ";
        $i4 = $i4 + 2;
    }
        while ($i4 < 100);

    echo "<br>";
    echo "<br>";


    /* 5. Mostrar la suma de los números de 1 a 20.*/

    echo "Mostrar los suma de los numeros del 1 al 20 = ";

    $suma = 0 ;

    for($i5=1; $i5 <= 20; $i5++){
        $suma += $i5 ;
        print"$suma ";
    }

    echo "<br>";
    echo "<br>";

    /* 6. Mostrar la suma de números pares de 1 a 20.*/

    echo "Mostrar los suma de los numeros pares del 1 al 20 = ";

    $suma2 = 0 ;

    for($i6=2; $i6 <= 20; $i6+=2){
        $suma2 += $i6;
        print"$suma2 ";
    }

    echo "<br>";
    echo "<br>";

    ?>
</body>
</html>