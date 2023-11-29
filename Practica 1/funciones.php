<?php
function duplicarYDevolverMayor(&$varReferencia, $varValor) {
    $varReferencia *= 2;
    $varValor *= 2;
    return $varReferencia > $varValor ? $varReferencia : $varValor;
}

// Creamos dos valores en variables
$a = 10;
$b = 20;

// Visualizamos sus valores originales
echo "Valores originales: a = $a, b = $b<br>";

// Invocamos a la función y visualizamos el resultado
$mayor = duplicarYDevolverMayor($a, $b);
echo "La función devuelve el valor mayor: $mayor<br>";

// Visualizamos los valores después de la llamada a la función
// $a se ha pasado por referencia, por lo tanto, su valor se habrá duplicado
// $b se ha pasado por valor, su valor no cambiará fuera de la función
echo "Valores después de duplicar: a = $a, b = $b<br>";

// Consideramos el caso de una variable global dentro de la función
function pruebaGlobal(&$varReferencia, $varValor) {
    global $globalVar; // Definimos una variable global dentro de la función
    $globalVar = $varValor;

    // Duplicamos los valores como antes
    $varReferencia *= 2;
    $varValor *= 2;
    return $varReferencia > $varValor ? $varReferencia : $varValor;
}

// Invocamos a la función pruebaGlobal
$globalVar = 0;
$mayorGlobal = pruebaGlobal($a, $b);
echo "La función con variable global devuelve el valor mayor: $mayorGlobal<br>";
echo "Valores después de la función global: a = $a, b = $b, globalVar = $globalVar<br>";

// Redirección al índice después de mostrar los valores
header("Refresh:5; url=index.php");
?>
