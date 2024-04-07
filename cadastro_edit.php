<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link  rel="stylesheet" href="style.css">
  <title>Alterar Cadastro</title>
</head>
<body>

<?php
include "conexao.php";
$id = $_GET['id'] ?? '';
$sql = "SELECT * FROM pessoas WHERE id_pessoa = $id";
$dados = mysqli_query($conexao, $sql);
$linha = mysqli_fetch_assoc($dados);
?>
  <div class="container">
   <div class="form">
<h2>Alterar Cadastro</h2>
    
    <form action="edit_script.php" method="POST" class="form-edit">
      <div>
      <label for="nome">Nome</label><br>
      <input class="input-edit" type="text" name="nome" id="nome" maxlength="50" required value="<?php echo $linha['nome']; ?>"><br>
      </div>

      <div>
      <label for="endereco">Endereço</label><br>
      <input class="input-edit" type="text" name="endereco" id="endereco" maxlength="100" value="<?php echo $linha['endereco'];?>"><br>
      </div>

      <div>
      <label for="telefone">Telefone</label><br>
      <input class="input-edit" type="text" name="telefone" id="telefone" value="<?php echo $linha ['telefone']; ?>">
      </div>

      <div>
      <label for="email">Email</label><br>
      <input class="input-edit" type="email" name="email" id="email" value="<?php echo $linha['email']; ?>">
      </div>

      <div>
      <label for="nasc">Data de Nascimento</label><br>
      <input class="input-edit" type="date" name="nasc" id="nasc" value="<?php echo $linha['nasc']; ?>">
      </div><br>

      <div class="">
      <input class="input-edit salvar" type="submit" value="Salvar Alterações"></input>
      <input type="hidden" name="id" value="<?php echo $linha['id_pessoa']; ?>">
      </div><br>
      
      
    </form>
    <a href="index.php" class="btn-voltar">Voltar para o Início</a>
       <br>
    </div>

  </div>
</body>
</html>
