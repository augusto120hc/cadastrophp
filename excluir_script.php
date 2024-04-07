<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Excluir Registro</title>
</head>
<body>
  
<?php
include "conexao.php";
// Verifica se o ID foi enviado através do formulário
if(isset($_POST['id'])){
  $id = $_POST['id'];
  $nome = $_POST['nome'];

  // Define a consulta SQL para excluir o registro
  $conn = "DELETE from pessoas WHERE id_pessoa = $id";

  // Executa a consulta e verifica se foi bem-sucedida
  if(mysqli_query($conexao, $conn))
    echo "$nome Excluído com sucesso!";
  else
    echo "$nome Não excluído!";
} else {
  echo "ID não fornecido.";
}
?>
<a href="index.php">Voltar</a>


</body>
</html>