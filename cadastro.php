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
    <h2>Cadastro de pessoa</h2>
   <div class="form">
    <form action="cadastro_script.php" method="POST">
      <div>
      <label for="nome">Nome</label><br>
      <input class="input-edit" type="text" name="nome" id="nome" maxlength="50"><br>
      </div>

      <div>
      <label for="endereco">Endereço</label><br>
      <input class="input-edit" type="text" name="endereco" id="endereco" maxlength="100"><br>
      </div>

      <div>
      <label for="telefone">Telefone</label><br>
      <input class="input-edit" type="text" name="telefone" id="telefone">
      </div>

      <div>
      <label for="email">Email</label><br>
      <input class="input-edit" type="email" name="email" id="email">
      </div>

      <div>
      <label for="nasc">Data de Nascimento</label><br>
      <input class="input-edit" type="date" name="nasc" id="nasc">
      </div><br>

      <div class="">
      <input class="input-edit input-sub" type="submit"></input>
      </div><br>
      
      
    </form>
  
       <button class="btnvoltarcad"><a href="index.php"> Voltar para o início</a></button>
    </div>

  </div>
</body>
</html>
