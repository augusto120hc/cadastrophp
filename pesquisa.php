<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Pesquisa</title>
</head>
<body>





<div id="search-container">
  <form class="form-pesquisa" action="pesquisa.php" method="POST">
  <input type="search" id="search-input" name="busca" placeholder="Digite sua pesquisa..." autofocus>
  <button id="search-button">Pesquisar</button>
  </form>
</div>

  <table class="tabela">
  <thead>
  <tr>
  <th>ID</th>
    <th>Nome</th>
    <th>Endereço</th>
    <th>Telefone</th>
    <th>Email</th>
    <th>Data de Nascimento</th>
    <th>Opções</th>
  </tr>
</thead>

<tbody>
<?php
$pesquisa = $_POST['busca'] ?? '';
// if(isset($_POST['busca'])){
//   $pesquisa = $_POST['busca'];
// }else {
//   $pesquisa = '';
// }
include "conexao.php";
// pesquisar o que for digitado
$sql = "SELECT * FROM pessoas WHERE nome LIKE '%$pesquisa%'";
$dados = mysqli_query($conexao, $sql);

  while ($linha = mysqli_fetch_assoc($dados)){
    $id_pessoa = $linha['id_pessoa'];
    $nome = $linha['nome'];
    $endereco = $linha['endereco'];
    $telefone = $linha['telefone'];
    $email = $linha['email'];
    $nasc = $linha['nasc'];
    $nasc = mostra_data($nasc);

    echo "
    <tr>
    <td>$id_pessoa</td>
    <td>$nome</td>
    <td>$endereco</td>
    <td>$telefone</td>
    <td>$email</td>
    <td>$nasc</td>

    <td><a href='cadastro_edit.php?id=$id_pessoa' class='editar'>Editar</a>
        <a href='#' class='excluir'>Excluir</a>
    </td>
    </tr>
    ";
  }
  ?>
</tbody>

  </table>
  <button class="btnvoltar"><a href="cadastro.php"> Voltar para o início</a></button>
</body>
</html>