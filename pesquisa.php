<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Pesquisa</title>

  <style>
    /* Estilos para o modal */
    .modal {
      display: none;
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      background-color: rgba(0, 0, 0, 0.5);
      width: 80%;
      max-width: 600px;
      padding: 20px;
      border-radius: 5px;
      color: white;
      z-index: 1000;
    }

    .modal-content {
      background-color: #333;
      padding: 20px;
      border-radius: 5px;
    }

    .close {
      float: right;
      color: white;
      font-size: 20px;
      cursor: pointer;
    }

    .close:hover {
      color: red;
    }

    .btn-confirmar {
      background-color: green;
      color: white;
      border: none;
      padding: 10px 20px;
      cursor: pointer;
      margin-right: 10px;
      border-radius: 5px;
    }

    .btn-cancelar {
      background-color: red;
      color: white;
      border: none;
      padding: 10px 20px;
      cursor: pointer;
      border-radius: 5px;
    }
  </style>

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
    if (isset($_POST['busca'])) {
      include "conexao.php";
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
          <td>
            <a href='cadastro_edit.php?id=$id_pessoa' class='editar'>Editar</a>
            <a href='#' class='excluir' onclick=\"exibirModal($id_pessoa, '$nome')\">Excluir</a>
          </td>
        </tr>";
      }
    }
    ?>
  </tbody>
</table>

<!-- Modal -->
<div id="modal" class="modal">
  <form action="excluir_script.php" method="POST">
    <div class="modal-content">
      <span class="close" onclick="fecharModal()">&times;</span>
      <p>Deseja realmente excluir este registro?</p>
      <b id="nome_pessoa">Nome da pessoa</b><br><br>
      <input type="hidden" name="id" id="cod_pessoa" value="">
      <input type="hidden" name="nome" id="nome_pessoa_1" value="">
      <input type="submit" class="btn-confirmar" value="Sim">
      <button class="btn-cancelar" onclick="fecharModal()">Não</button>
    </div>
  </form>
</div>

<script>
function exibirModal(id, nome) {
  var modal = document.getElementById('modal');
  modal.style.display = 'block';
  document.getElementById('nome_pessoa').innerHTML = nome;
  document.getElementById('nome_pessoa_1').value = nome;
  document.getElementById('cod_pessoa').value = id;
}

function fecharModal() {
  var modal = document.getElementById('modal');
  modal.style.display = 'none';
}
</script>

<button class="btnvoltar"><a href="cadastro.php"> Voltar para o início</a></button>

</body>
</html>
