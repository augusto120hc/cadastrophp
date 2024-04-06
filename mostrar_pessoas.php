<?php
include "conexao.php";
$select_pessoa = mysqli_query($conexao, "SELECT * FROM pessoas");
while($p = mysqli_fetch_assoc($select_pessoa)){
  echo "{$p['nome']} - <br> {$p['endereco']}";
}

?>

