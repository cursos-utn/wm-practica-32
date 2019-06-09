<?php

$parte_1_1 = $_POST['parte_1_1'];
$parte_1_2 = $_POST['parte_1_2'];
$parte_1_3 = $_POST['parte_1_3'];

$parte_2_1 = $_POST['parte_2_1'];
$parte_2_2 = $_POST['parte_2_2'];
$parte_2_3 = $_POST['parte_2_3'];

$parte_3_1 = $_POST['parte_3_1'];
$parte_3_2 = $_POST['parte_3_2'];
$parte_3_3 = $_POST['parte_3_3'];

$parte_4_1 = $_POST['parte_4_1'];
$parte_4_2 = $_POST['parte_4_2'];
$parte_4_3 = $_POST['parte_4_3'];

$cantidad_frases = $_POST['cantidad_frases'];

// Valido que haya cargado todos los campos (que cada campo != '')
if ($parte_1_1!='' && $parte_1_2 != '' && $parte_1_3 != '' && $parte_2_1 != '' && $parte_2_2 != '' && $parte_2_3 != '' && $parte_3_1 != '' && $parte_3_2 != '' && $parte_3_3 != '' && $parte_4_1 != '' && $parte_4_2 != '' && $parte_4_3 != '' ) {
    // Ingreso todos los datos (por else es cuando falta algun dato)
    // Verifico que cantidad_frases >0
    if ($cantidad_frases>0) { // Es correcto
        $vector_parte1 = array($parte_1_1, $parte_1_2, $parte_1_3);
        $vector_parte2 = array($parte_2_1, $parte_2_2, $parte_2_3);
        $vector_parte3 = array($parte_3_1, $parte_3_2, $parte_3_3);
        $vector_parte4 = array($parte_4_1, $parte_4_2, $parte_4_3);
        $frases_ya_usadas = array();

        while(count($frases_ya_usadas) < $cantidad_frases) {
            $frase = $vector_parte1[mt_rand(0, 2)] . ' ' . $vector_parte2[mt_rand(0, 2)] . ' ' . $vector_parte3[mt_rand(0, 2)] . ' ' . $vector_parte4[mt_rand(0, 2)];
            $existe = array_search( $frase, $frases_ya_usadas);
            if ($existe===FALSE) { // La frase no existia
                echo $frase;
                array_push($frases_ya_usadas, $frase);
                echo "<br>";
            }
        }
    } else { // La cantidad de frases es 0 o menos
        echo "La cantidad de frases debe ser mayor a 0";
    }
} else { // Falta algun dato
    echo "Debe ingresar todos los datos del formulario";
}


?>