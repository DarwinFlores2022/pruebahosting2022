<?php
$positivo = 0;
$negativo = 0;
$nulo = 0;

for ($i = 0; $i < 100; $i++) {
    $num = rand(-10, 10);

    echo $num . ', ';

    if ($num == 0) {
        $nulo++;
    } elseif ($num > 0) {
        $positivo++;
    } else {
        $negativo++;
    }
}
echo '<br>';
echo 'Cantidad de Números positivo: ' . $positivo . '<br>';
echo 'Cantidad de Números Negativos: ' . $negativo . '<br>';
echo 'Cantidad de Números Nulos: ' . $nulo . '<br>';

?>
