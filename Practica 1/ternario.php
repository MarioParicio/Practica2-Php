<?php
$numero = rand(1, 1000); // Número aleatorio entre 1 y 1000
print "El número $numero es " . ($numero % 2 == 0 ? "par" : "impar");

header("Refresh:2; url=index.php");
?>
