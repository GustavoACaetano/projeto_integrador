<?php
require_once('conexao_db.php');

// array de resposta
$resposta = array();

// Verifica se o parametro id foi enviado na requisicao
if (isset($_GET["id"]) && isset($_GET["nome"]) && isset($_GET["email"]) && isset($_GET["data"]) && isset($_GET["telefone"]) && isset($_get["caminho_foto"])) {
	
	// Aqui sao obtidos os parametros
	$id = $_GET['id'];
	$nome = trim($_GET["nome"]);
	$email = trim($_GET["email"]);
	$data = trim($_GET["data"]);
	$telefone = trim($_GET["telefone"]);
	$caminho_foto = trim($_GET["caminho_foto"]);
	// Ver a parada da foto com o gustavo e daniel
	
	// Obtem do BD os detalhes do produto com id especificado na requisicao GET
	$consulta = $db_con->prepare("UPDATE usuario set nome = " . $nome . ", email = " . $email . ", data = " . $data . ", telefone = " . $telefone . " WHERE id = " . $id);

	if ($consulta->execute()) {
		$resposta["sucesso"] = 1;
	} else {
		// Caso ocorra falha no BD, o cliente 
		// recebe a chave "sucesso" com valor 0. A chave "erro" indica o 
		// motivo da falha.
		$resposta["sucesso"] = 0;
		$resposta["erro"] = "Erro no BD: " . $consulta->$error;
	}
} else {
	// Se a requisicao foi feita incorretamente, ou seja, os parametros 
	// nao foram enviados corretamente para o servidor, o cliente 
	// recebe a chave "sucesso" com valor 0. A chave "erro" indica o 
	// motivo da falha.
	$resposta["sucesso"] = 0;
	$resposta["erro"] = "Campo requerido não preenchido";
}

// Fecha a conexao com o BD
$db_con = null;

// Converte a resposta para o formato JSON.
echo json_encode($resposta);
?>
