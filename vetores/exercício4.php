<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Calculadora de Parcelas</title>
</head>
<body>
    <h2>Calculadora de Parcelas</h2>
    <form method="post">
        <label>Valor da Dívida (R$): </label>
        <input type="number" step="0.01" name="divida" required><br><br>

        <label>Juros (%): </label>
        <input type="number" step="0.01" name="juros" required><br><br>

        <label>Número de Parcelas: </label>
        <input type="number" name="parcelas" required><br><br>

        <input type="submit" value="Calcular">
    </form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $divida = floatval($_POST['divida']);
    $juros = floatval($_POST['juros']);
    $parcelas = intval($_POST['parcelas']);

    if ($divida <= 0 || $juros < 0 || $parcelas <= 0) {
        echo "<p>Por favor, insira valores válidos.</p>";
    } else {

        $montante = $divida + ($divida * ($juros/100));
        
        $valorParcela = $montante / $parcelas;
    

        echo "<h3>Resultados</h3>";
        echo "Montante total a pagar: R$ " . number_format($montante, 2, ',', '.') . "<br>";
        echo "Número de parcelas: $parcelas<br>";
        echo "Valor de cada parcela: R$ " . number_format($valorParcela, 2, ',', '.') . "<br>";
        echo "Média das parcelas: R$ " . number_format($valorParcela, 2, ',', '.') . "<br>";

        echo "<h4>Detalhes das parcelas:</h4>";
        echo "<ul>";
        for ($i = 1; $i <= $parcelas; $i++) {
            echo "<li>Parcela $i: R$ " . number_format($valorParcela, 2, ',', '.') . "</li>";
        }
        echo "</ul>";
    }
}
?>

</body>
</html>
