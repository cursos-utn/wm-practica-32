<?php

/*
Realizar un programa que:
    
    Permita ingresar en formulario un número desde y un número hasta, números a generar
    Envíe ambos números por método GET a otra página que:
    Verifique que los números enviados sean efectivamente números sino corte la ejecución y muestre mensaje de error.
    Verifique que el número desde < número hasta. Si no cumple la condición, cortar la ejecución y mostrar mensaje de error
        Verifique que la cantidad de números distintos a generar sea menor a la cantidad de números que se pueden generar
        según el rango (número hasta - número desde) Genere la cantidad de números solicitados, de forma aleatoria y que se
        encuentren entre los números que se enviaron Todos los números deben ser distintos Al finalizar el proceso deberá
        mostrar todos los números generados
*/

$numero_desde = $_GET['numero_desde'];
$numero_hasta = $_GET['numero_hasta'];
$numeros_a_generar = $_GET['numeros_a_generar'];

if (!is_numeric($numero_desde) || !is_numeric($numero_hasta)) {
    echo "El numero desde o el numero hasta no son numericos";
    die();
}
if ($numero_desde>=$numero_hasta) {
    echo "El numero desde es mayor o igual al numero hasta";
    die();
}
if ($numero_hasta - $numero_desde < $numeros_a_generar) {
    echo "La cantidad de números a generar es menor al rango de números que ingreso";
    die();
}

// Si llego hasta aca es porque paso todas las validaciones

$numeros_generados = array();
// Hago un bucle hasta que la cantidad de numeros generados sea igual a los numeros_a_generar
while (count($numeros_generados) < $numeros_a_generar) { 
    // Genero un numero aleatorio entre numero_desde a numero_hasta
    $nuevo_numero = mt_rand($numero_desde, $numero_hasta);
    // Verifico si el numero generado YA existia en el vector
    $existe = array_search($nuevo_numero, $numeros_generados);
    if ($existe===FALSE) { // No estaba en el vector
        // Lo agrego al vector
        array_push($numeros_generados, $nuevo_numero);
    }
}
// Aca numeros_generados tiene el vector con los numeros que se generaron

print_r( $numeros_generados);

?>