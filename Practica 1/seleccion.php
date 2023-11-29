<?php
$edad = rand(1, 150); // Genera una edad aleatoria entre 1 y 150

switch (true) {
    case ($edad >= 0 && $edad <= 11):
        print "Niño";
        break;
    case ($edad >= 12 && $edad <= 17):
        print "Adolescente";
        break;
    case ($edad >= 18 && $edad <= 35):
        print "Joven";
        break;
    case ($edad >= 36 && $edad <= 65):
        print "Adulto";
        break;
    case ($edad >= 66 && $edad <= 110):
        print "Jubilado";
        break;
    default:
        print "Edad no contemplada en nuestra encuesta";
}

header("Refresh:2; url=index.php");
?>
