<?php
require_once('conexao_db.php');

function pegarEndereco($endereco){
  $consulta_endereco = $db_con->prepare("SELECT * FROM endereco WHERE id = " . $endereco);
  $consulta_endereco->execute();
  $linha_endereco = $consulta_endereco->fetch(PDO::FETCH_ASSOC);
  return $linha_endereco["descricao"];
}
?>
