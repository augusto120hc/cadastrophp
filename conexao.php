<?php
$conexao = mysqli_connect("localhost", "root", "", "grud");
if(!$conexao){
  echo "Erro ao conectar";
}else{
  // echo "Conectou";
}


function mostra_data($data){
  $d = explode('-', $data);
  $escreve = $d[2] ."/" . $d[1]  . "/" . $d[0];
  return $escreve;
}
?>
