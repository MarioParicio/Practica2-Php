<?php

// Asignación de diferentes tipos de valores a variables.
$entero = 125; // Valor entero
$octal = 074; // Valor octal válido (el valor original 0874 es inválido porque 8 no es un dígito octal)
$hexadecimal = 0xAbC12; // Valor hexadecimal
$binario = 0b1100; // Valor binario
$cadena1 = "Esto es una cadena de caracteres"; // Cadena de caracteres con comillas dobles
$cadena2 = 'Esto es otra cadena de caracteres'; // Cadena de caracteres con comillas simples
$flotante = 1.23432230003322014000002234101; // Número flotante
$cientifico = 1234E-2; // Notación científica
$nulo = null; // Valor nulo
$booleanoTrue = true; // Valor booleano true
$booleanoFalse = false; // Valor booleano false

// Asignación de una cadena multilínea utilizando la sintaxis heredoc.
$cadenaMultilinea = <<<EOT
Esto es una cadena
multilínea
y termina aquí
EOT;

// Visualización de las variables.
print "Entero: $entero<br>";
print "Octal (valor octal válido): $octal<br>";
print "Hexadecimal: $hexadecimal<br>";
print "Binario: $binario<br>";
print "Cadena 1: $cadena1<br>";
print "Cadena 2: $cadena2<br>";
print "Cadena multilínea: $cadenaMultilinea<br>";
print "Flotante: $flotante<br>";
print "Notación científica: $cientifico<br>";
print "Nulo: ";
var_dump($nulo);
print "<br>";
print "Booleano True: ";
var_dump($booleanoTrue);
print "<br>";
print "Booleano False: ";
var_dump($booleanoFalse);

// Redirecciona al index después de 5 segundos.
header("Refresh:5; url=index.php");

?>
