<?php
// Ejercicio 1: Generar las tablas de multiplicar del 4 y 6 :)
echo "Tabla de multiplicar del 4:\n";
for ($i = 1; $i <= 10; $i++) {
    echo "4 x $i = " . (4 * $i) . "\n";
}

echo "\nTabla de multiplicar del 6:\n";
for ($i = 1; $i <= 10; $i++) {
    echo "6 x $i = " . (6 * $i) . "\n";
}

// Ejercicio 2: Calcular el factorial de un número
$variable69 = 8;
$factorial = 1;
for ($i = 1; $i <= $variable69; $i++) {
    $factorial *= $i;
}
echo "\nFactorial de $variable69:\n";
echo "El factorial es: $factorial\n";

// Ejercicio 3: Verificar si un número es primo
$variable22 = 14;
$esPrimo = true;
for ($i = 2; $i <= sqrt($variable22); $i++) {
    if ($variable22 % $i == 0) {
        $esPrimo = false;
        break;
    }
}
echo "\n$variable22 es " . ($esPrimo ? "primo\n" : "no primo\n");

// Ejercicio 4: Verificar si un número es par
$variable33 = 12; 
echo "\n$variable33 es " . (($variable33 % 2 == 0) ? "par\n" : "impar\n");

// Ejercicio 5: Mostrar la tabla de multiplicar de un número
$variable49 = 11; 
echo "\nTabla de multiplicar del $variable49:\n";
for ($i = 1; $i <= 10; $i++) {
    echo "$variable49 x $i = " . ($variable49 * $i) . "\n";
}
?>
