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

    echo "1. Almacenar en un array los 10 primeros números pares y mostrar en pantalla uno debajo del otro. =  ";
    print "<pre>\n";

    $numerosPares=[
        "2",
        "4",
        "6",
        "8",
        "10",
        "12",
        "14",
        "16",
        "18",
        "20"
    ];

    print_r($numerosPares); 
    print "<pre>\n";

    print ($numerosPares[0]);
    print "<pre>\n";
    print ($numerosPares[1]);
    print "<pre>\n";
    print ($numerosPares[2]);
    print "<pre>\n";
    print ($numerosPares[3]);
    print "<pre>\n";
    print ($numerosPares[4]);
    print "<pre>\n";
    print ($numerosPares[5]);
    print "<pre>\n";
    print ($numerosPares[6]);
    print "<pre>\n";
    print ($numerosPares[7]);
    print "<pre>\n";
    print ($numerosPares[8]);
    print "<pre>\n";
    print ($numerosPares[9]);
    print "<pre>\n";

    #---------------------------------------------------------
    echo "2. Crear un array e introducir los siguientes valores: Pedro, Ana, 34 y 1, sin asignar el índice de la
    matriz. Mostrar el esquema del array con print_r(). =  ";
    print "<pre>\n";
    
    $listaMezclada=[
        "Pedro",
        "Ana",
        34,
        1,
    ];

    print_r($listaMezclada); 
    print "<pre>\n";

    #---------------------------------------------------------
    echo "3. Crear un array asociativo e introducir los siguientes valores:
    Nombre: Pedro
    Apellido: Torres
    Dirección: Av. Mayor 3703
    Teléfono: 1122334455 =  ";
    print "<pre>\n";
    
    $listaAsociativa=[
        'Nombre' => "Pedro",
        'Apellido' => "Torres",
        'Dirección' => "Av. Mayor 3703",
        'Teléfono' => 1122334455,
    ];

    print_r($listaAsociativa); 
    print "<pre>\n";

    #---------------------------------------------------------
    echo "4. Crear un array introduciendo las ciudades: Madrid, Barcelona, Londres, New York, Los Ángeles y
    Chicago, sin asignar índices al array. A continuación, muestra el contenido del array.
    Ejemplo: La ciudad con el índice 0 tiene el nombre Madrid =  ";
    print "<pre>\n";
    
    $ciudades1=[
        "Madrid",
        "Barcelona",
        "Londres",
        "New York",
        "Los Angeles",
        "Chicago",
    ];

    print ("La ciudad con el índice 0 tiene el nombre $ciudades1[0]."); 
    print "<pre>\n";
    print ("La ciudad con el índice 1 tiene el nombre $ciudades1[1]."); 
    print "<pre>\n";
    print ("La ciudad con el índice 2 tiene el nombre $ciudades1[2]."); 
    print "<pre>\n";
    print ("La ciudad con el índice 3 tiene el nombre $ciudades1[3]."); 
    print "<pre>\n";
    print ("La ciudad con el índice 4 tiene el nombre $ciudades1[4]."); 
    print "<pre>\n";
    print ("La ciudad con el índice 5 tiene el nombre $ciudades1[5]."); 
    print "<pre>\n";

    #---------------------------------------------------------
    echo "5. Repite el ejercicio anterior pero ahora se ha de crear índices, MD para Madrid, BCL para Barcelona,
    LD para Londres, NY para New York, LA para Los Ángeles y CCG para Chicago.
    Ejemplo: El índice de Madrid es MD.=  ";
    print "<pre>\n";
    
    $ciudades2=[
        'Madrid' => "MD",
        "Barcelona" => "BCL",
        "Londres" => "LD",
        "NewYork" => "NY",
        "LosAngeles" => "LA",
        "Chicago" => "CCG",
    ];

    print ("El índice de Madrid es $ciudades2[Madrid]"); 
    print "<pre>\n";
    print ("El índice de Barcelona es $ciudades2[Barcelona]."); 
    print "<pre>\n";
    print ("El índice de Londres es $ciudades2[Londres]."); 
    print "<pre>\n";
    print ("El índice de New York es $ciudades2[NewYork]."); 
    print "<pre>\n";
    print ("El índice de Los Angeles es $ciudades2[LosAngeles]."); 
    print "<pre>\n";
    print ("El índice de Chicago es $ciudades2[Chicago]."); 
    print "<pre>\n";
    
    #PROFE: Cuando intente utilizar la palabra del indice "Los Angeles" no me toma el nombre al llamarlo desde el print por eso los puse juntos, al mismo tiempo me pasa
    print "-----------------------------------------";
    print "<pre>\n";
   


    echo "Ejercicio 1 (Resolucion usando foreach) ";
    print "<pre>\n";

    foreach($numerosPares as $numPar) {
        print "$numPar";
        print "<pre>\n";
    }

    echo "Ejercicio 4 (Resolucion usando foreach) ";
    print "<pre>\n";
    $indice = 0;
    foreach($ciudades1 as $ciud1) {
        print "La ciudad con el índice $indice tiene el nombre $ciud1";
        $indice ++;
        print "<pre>\n";
    }

    #intente resolver usar el foreach para hacer el ejercicio 5 pero no entiendo como puedo llamar al nombre del indice. no se como hacer para que aparezca el nombre del indice 


    ?>
</body>
</html>