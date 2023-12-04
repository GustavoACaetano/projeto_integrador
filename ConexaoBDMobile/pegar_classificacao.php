<?php
require_once('conexao_db.php');

function pegarClassificacao($classificacao){
  $consulta_classificacao = $db_con->prepare("SELECT nome FROM classificacao WHERE id = " . $classificacao);
  $consulta_classificacao->execute();
  $linha_classificacao = $consulta_classificacao->fetch(PDO::FETCH_ASSOC);
  return $linha_classificacao["nome"];
}

?>
