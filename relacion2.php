
<?php

echo "Usando bucle for: ";
for ($i = 0; $i <= 100; $i += 5) {
    echo $i . " ";
}

?>

<?php
echo "Usando bucle while: ";
$i = 0;
while ($i <= 100) {
    echo $i . " ";
    $i += 5;
}
?>

<?php
echo "Usando bucle do-while: ";
$i = 0;
do {
    echo $i . " ";
    $i += 5;
} while ($i <= 100);
?>


//---------------------------------------------------//

<?php

$num = readline("Introduce un numero: ");

echo "Tabla de multiplicar del $num:\n";
for ($i = 1; $i <= 10; $i++) {
    echo "$num x $i = " . ($num * $i) . "\n";
}
?>


//---------------------------------------------------//

<?php

$num = readline("Introduce un numero: ");

$num_digitos = strlen((string)$num);

echo "El número $num tiene $num_digitos dígitos.\n";
?>


//---------------------------------------------------//

<?php

$n = readline("Introduce la cantidad de terminos que quieres: ");

$termino1 = 0;
$termino2 = 1;

echo "Serie de Fibonacci:\n";
for ($i = 1; $i <= $n; $i++) {
    echo "$termino1 ";

    $temp = $termino1 + $termino2;
    $termino1 = $termino2;
    $termino2 = $temp;
}
?>


//---------------------------------------------------//

<?php

$numeros = array();
for ($i = 0; $i < 20; $i++) {
    $numeros[$i] = rand(0, 100);
}

$cuadrados = array_map(function ($numero) {
    return $numero ** 2;
}, $numeros);

$cubos = array_map(function ($numero) {
    return $numero ** 3;
}, $numeros);

?>


//---------------------------------------------------//

<?php

$numeroAleatorio = [];
for ($i = 0; $i < 15; $i++) {
    $numeroAleatorio[] = rand(1, 100);
}

echo "Array original:\n";
print_r($numeroAleatorio);

$ultimoElemento = array_pop($numeroAleatorio);
array_unshift($numeroAleatorio, $ultimoElemento);

echo "\nArray rotado:\n";
print_r($numeroAleatorio);

?>
