<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link  rel="stylesheet" href="style.css">
  <title>Cadastro</title>
</head>
<body>
  <div class="container">
   <div class="form">
    <form action="cadastro_script.php" method="POST">
      <div>
      <label for="nome">Nome</label><br>
      <input type="text" name="nome" id="nome" maxlength="50"><br>
      </div>

      <div>
      <label for="endereco">Endereço</label><br>
      <input type="text" name="endereco" id="endereco" maxlength="100"><br>
      </div>

      <div>
      <label for="telefone">Telefone</label><br>
      <input type="text" name="telefone" id="telefone">
      </div>

      <div>
      <label for="email">Email</label><br>
      <input type="email" name="email" id="email">
      </div>

      <div>
      <label for="nasc">Data de Nascimento</label><br>
      <input type="date" name="nasc" id="nasc">
      </div><br>

      <div class="">
      <input  type="submit"></input>
      </div><br>
      
      
    </form>
    <a href="index.php"><button>Voltar para o Início</button></a>
       <br>
    </div>

  </div>
</body>
</html>
