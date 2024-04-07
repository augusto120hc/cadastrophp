<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css">
  <title>Alterado</title>
</head>
<body>
  
<?php
include "conexao.php";
$id = $_POST['id'];
$nome = $_POST['nome'];
$endereco = $_POST['endereco'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$nasc = $_POST['nasc'];

// $conn = "INSERT INTO pessoas (nome, endereco, telefone, email, nasc) VALUES ('$nome', '$endereco', '$telefone', '$email', '$nasc')";


$conn = "UPDATE pessoas set nome = '$nome', endereco = '$endereco', telefone = '$telefone', email = '$email', nasc = '$nasc' WHERE id_pessoa = $id";

if(mysqli_query($conexao, $conn))
  echo "<p class='suces'><b>$nome</b> Alterado com sucesso!</p>";
else{
  echo "<p class='erro'>$nome Não alterado!  </p>";
}
?>

</body>
</html>