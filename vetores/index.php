<?php
$frutas = array("Maçã", "Banana", "Laranja", "Manga", "Uva");

echo "<h3> Frutas </h3>";
foreach ($frutas as $indice => $fruta) {
    echo "Índice: $indice | Fruta: $fruta<br>";
}

$frutasCores = array(
    'ma' => 'Maçã',
    'ba' => 'Banana',
    'la' => 'Laranja',
    'ma' => 'Manga',
    'uv' => 'Uva'
);

echo "<h3> Frutas e suas Cores </h3>";
foreach ($frutasCores as $abreviacao => $fruta) {
    echo "Abreviação: $abreviacao | Fruta: $fruta<br>";
}
?>
