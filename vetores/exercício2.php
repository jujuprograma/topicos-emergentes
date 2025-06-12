<?php
// a)
$v1 = array("Ferrari", "McLaren", "Red Bull", "BMW", "BAR");
echo "<h3>Vetor v1</h3>";
foreach ($v1 as $chave => $valor) {
    echo "Chave: $chave | Valor: $valor<br>";
}

// b)
$v2 = array('a' => 8, 'b' => 9, 'd' => 6, 'c' => 2, 'e' => 5);
echo "<h3>Vetor v2</h3>";
foreach ($v2 as $chave => $valor) {
    echo "Chave: $chave | Valor: $valor<br>";
}

// c)
$v3 = array(
    "rg" => "00.000.00- -X",
    "cpf" => "000.000.000- -00",
    "cartao de credito" => 12345
);
echo "<h3>Vetor v3</h3>";
foreach ($v3 as $chave => $valor) {
    echo "Chave: $chave | Valor: $valor<br>";
}

// d)
$chamada = array(
    "aluno1" => "alberto",
    "aluno3" => "bianca",
    "aluno5" => "carlos",
    "aluno24" => "maria"
);
echo "<h3>Vetor chamada</h3>";
foreach ($chamada as $chave => $valor) {
    echo "Chave: $chave | Valor: $valor<br>";
}
?>
