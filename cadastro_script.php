<?php
include "conexao.php";
$nome = $_POST['nome'];
$endereco = $_POST['endereco'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$nasc = $_POST['nasc'];

$conn = "INSERT INTO pessoas (nome, endereco, telefone, email, nasc) VALUES ('$nome', '$endereco', '$telefone', '$email', '$nasc')";

if(mysqli_query($conexao, $conn))
  echo "Cadastrou certo";
else{
  echo "Não cadastrou";
}
?>
