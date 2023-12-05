<?php
/*
Esse arquivo que CONSULTA todos os eventos criados pelo usuario logado
*/

require_once('conexao_db.php');
// array for JSON resposta
$resposta = array();
$resposta["eventos"] = array();
$email = $_GET["logado"];
if(isset($_GET["limit"]) && isset($_GET["offset"])){
    $consultaEmail = $db_con->prepare("SELECT * FROM usuario WHERE email=$email");
    $consultaEmail->execute();
    $linhaUsuario = $consultaEmail->fetch(PDO::FETCH_ASSOC);
    $id_logado = intval($linhaUsuario['id']);
    
    $consulta = $db_con->prepare("SELECT * FROM evento WHERE fk_usuario_id =$id_logado LIMIT " . $_GET["limit"] . " OFFSET " . $_GET["offset"]);
    $consulta->execute();
    if ($consulta->rowCount() > 0) {
        while($linha = $consulta->fetch(PDO::FETCH_ASSOC)){
            $evento = array();
            $evento["id"] = $linha['id'];
            
            $evento["nome"] = $linha["nome"];
            $evento["preco"] = number_format($linha["preco"], 2, ',', '');
            $evento["data"] = $linha["data"];
            $evento["horario_fim"] = $linha["horario_fim"];
            $evento["horario_inicio"] = $linha["horario_inicio"];
            $evento["foto"] = $linha["foto"];
            // Adiciona o evento no array de eventos.
            array_push($resposta["eventos"], $evento);
        }
    }
}else {
	// Se a requisicao foi feita incorretamente, ou seja, os parametros 
	// nao foram enviados corretamente para o servidor, o cliente 
	// recebe a chave "sucesso" com valor 0. A chave "erro" indica o 
	// motivo da falha.
	$resposta["sucesso"] = 0;
	$resposta["erro"] = "Campo requerido não preenchido";
}
return json_encode($resposta);
$db_con = null;
?>
