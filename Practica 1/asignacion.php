<?php
$a = 9; // constante entera
print "Valor constante entero: $a<br>";

$a = 6 + 7; // expresión aritmética
print "Resultado de expresión aritmética: $a<br>";

$a = rand(1, 7); // invocación a función
print "Número aleatorio entre 1 y 7: $a<br>";

$a = "cadena"; // constante string
print "Cadena de texto: $a<br>";

$a = 0xAB; // valor hexadecimal
print "Valor hexadecimal: $a<br>";

$a = 0b1100; // valor binario
print "Valor binario: $a<br>";

$a = "PHP " . PHP_VERSION; // expresión de cadena
print "Expresión de cadena: $a<br>";

$a = print("Print es una función y retorna: "); // función print
print "$a<br>";

header("Refresh:5; url=index.php");
?>
