<?php
define("EDAD", 19);
print "Tengo " . EDAD . " años. ";
print "Me quedan " . (100 - EDAD) . " años para cumplir 100.";

header("Refresh:2; url=index.php");
?>
