<?php
$Nome=$_POST["Nome"];
$Endereco=$_POST["Endereco"];
$Telefone=$_POST["Telefone"];
echo "Seu nome é:$Nome <br> Seu endereco é:$Endereço <br> Seu telefone é:$Telefone <br>";

$servidor="localhost";
$user="root";
$senha="";
$banco="agenda";
$conexao=mysqli_connect($servidor, $user, $senha, $banco);
if(!$conexao){
    echo "erro de conexão!";
}

if($conexao=true){
    echo "Tudo certo";
}
?>