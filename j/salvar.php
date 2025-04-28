<?php
include("conexao.php");
$nome=$_POST["Nome"];
$endereco=$_POST["Endereco"];
$fone=$_POST["Telefone"];
$sql="INSERT INTO Agenda.Contatos (nome, endereco, telefone)
VALUES ('$nome', '$endereco', '$fone')";
if (mysqli_query($conexao, $sql)){
    echo "contato salvo!";
}else "erro ao salvar".mysqli_error($conexao);
?>