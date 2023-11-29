<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Práctica Básica con PHP</title>
</head>
<body>
<?php
// Definición de variables con nombre y apellido
$nombre = "Mario";
$apellido = "Paricio";

// Visualización con echo y print
echo "mi nombre es \"$nombre\"", " y mi apellido es \"$apellido\"<br/>";
print "mi nombre es \"$nombre\" y mi apellido es \"$apellido\"<br/>";

// Diferencias y semejanzas entre echo y print
/*
   1. Echo puede tomar múltiples argumentos, print solo uno.
   2. Echo no retorna un valor, mientras que print retorna 1.
   3. Ambos se utilizan para imprimir datos en el navegador.
   4. Echo es ligeramente más rápido que print.
   5. Los paréntesis son opcionales en ambos, ya que son constructores de lenguaje.
*/

// Sintaxis heredoc
$informe = <<<FIN
Primera línea
Segunda línea
Tercera línea
Cuarta línea
Quinta línea
FIN;
echo $informe . "<br/>";

// Pruebas con variables
$variable = "Valor inicial";
echo "Valor: $variable, Tipo: " . gettype($variable) . "<br/>";
$variable = true;  // Cambio a booleano
echo "Valor: $variable, Tipo: " . gettype($variable) . "<br/>";
$variable = 10.5;  // Cambio a float
echo "Valor: $variable, Tipo: " . gettype($variable) . "<br/>";
$variable = "Texto";  // Cambio a string
echo "Valor: $variable, Tipo: " . gettype($variable) . "<br/>";
$variable = null;  // Cambio a null
echo "Valor: $variable, Tipo: " . gettype($variable) . "<br/>";
$no_definida;  // Variable no definida
echo "Valor: $no_definida, Tipo: " . gettype($no_definida) . "<br/>";

// Visualización del código ASCII
for ($i = 64; $i <= 122; $i++) {
    printf("ASCII %d es %s<br/>", $i, chr($i));
}

// Función time y fecha actual
echo "Time: " . time() . "<br/>";  // time() retorna el tiempo actual en segundos desde el Unix Epoch (1 de enero de 1970)
echo "Fecha actual: " . date("d-m-Y") . "<br/>";  // Formato de fecha: día-mes-año

// Días, horas y minutos desde 1/1/1970
$segundos = time();
echo "Días desde 1/1/1970: " . floor($segundos / 86400) . "<br/>";
echo "Horas desde 1/1/1970: " . floor($segundos / 3600) . "<br/>";
echo "Minutos desde 1/1/1970: " . floor($segundos / 60) . "<br/>";

// Formatos de fecha en diferentes idiomas
setlocale(LC_TIME, "es_ES");
echo strftime("%A, %d de %B de %Y") . "<br/>";
setlocale(LC_TIME, "en_US");
echo strftime("%A, %d %B %Y") . "<br/>";
setlocale(LC_TIME, "fr_FR");
echo strftime("%A, %d %B %Y") . "<br/>";

// Fecha de cumpleaños y cálculo de edad
$fechaNacimiento = "2023-12-11";
$fechaActual = date("Y-m-d");
$edad = date_diff(date_create($fechaNacimiento), date_create($fechaActual));
echo "Tienes " . $edad->y . " años, " . $edad->m . " meses y " . $edad->d . " días<br/>";

// Cálculo de edad desde una fecha específica
$fechaEspecifica = strtotime("1969-10-30");
$edad = floor((time() - $fechaEspecifica) / (365*60*60*24));
echo "Tienes $edad años<br/>";

// Uso de la función getdate
$infoFecha = getdate();
print_r($infoFecha);
echo "<br/>";
$infoFecha = getdate(1);
print_r($infoFecha);
echo "<br/>";

// Explicación del código strtotime y date
echo "<hr>";
echo strtotime("now"), "<br/>";
echo  date('d-m-Y', strtotime("now")), "<br/>";
echo strtotime("27 September 1970"), "<br/>";
echo date('d-m-Y',strtotime("10 September 2000")), "<br/>";
echo strtotime("+1 day"), "<br/>";
echo date('d-m-Y',strtotime("+1 day")), "<br/>";
echo strtotime("+1 week"), "<br/>";
echo date('d-m-Y',strtotime("+1 week")), "<br/>";
echo strtotime("+1 week 2 days 4 hours 2 seconds"), "<br/>";
echo date('d-m-Y',strtotime("+1 week 2 days 4 hours 2 seconds")), "<br/>";
echo strtotime("next Thursday"), "<br/>";
echo date('d-m-Y',strtotime("next Thursday")), "<br/>";
echo strtotime("last Monday"), "<br/>";
echo date('d-m-Y',strtotime("last Monday")), "<br/>";
echo "<hr>";
?>
</body>
</html>
