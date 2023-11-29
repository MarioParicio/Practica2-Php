<?php
$suma = 0;
for ($i = 1; $i <= 100; $i++) {
    $suma += $i * 2; // Suma el doble del contador, es decir, números pares
}
print "La suma de los primeros 100 números pares es: $suma";

header("Refresh:2; url=index.php");
?>
