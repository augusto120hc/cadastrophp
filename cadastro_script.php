<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Cadastrado</title>
</head>
<body>
  
<?php
include "conexao.php";
$nome = $_POST['nome'];
$endereco = $_POST['endereco'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$nasc = $_POST['nasc'];

$conn = "INSERT INTO pessoas (nome, endereco, telefone, email, nasc) VALUES ('$nome', '$endereco', '$telefone', '$email', '$nasc')";

if(mysqli_query($conexao, $conn))
  echo "<p class='suces'><b>$nome </b>Cadastrado com sucesso!</p>";
else{
  echo "<p class='erro'>$nome Erro ao cadastrar!  </p>";
}
?>
<button class="btnvoltarcad"><a href="cadastro.php"> Voltar para cadastro</a></button>
</body>
</html>