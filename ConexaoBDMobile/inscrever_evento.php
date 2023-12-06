<?php
require_once('conexao_db.php');

// array de resposta
$resposta = array();

// Verifica se o parametro id foi enviado na requisicao
if (isset($_POST["email"]) isset($_POST["id_evento"])) {
	
	$email = trim($_POST["email"]);
    $id_evento = $_POST["id_evento"];

	$filename = $_FILES['img']['tmp_name'];
	$client_id="ce5d3a656e2aa51";
	$handle = fopen($filename, "r");
	$data = fread($handle, filesize($filename));
	$pvars = array('image' => base64_encode($data));
	$timeout = 30;
	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, 'https://api.imgur.com/3/image.json');
	curl_setopt($curl, CURLOPT_TIMEOUT, $timeout);
	curl_setopt($curl, CURLOPT_HTTPHEADER, array('Authorization: Client-ID ' . $client_id));
	curl_setopt($curl, CURLOPT_POST, 1);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($curl, CURLOPT_POSTFIELDS, $pvars);
	$out = curl_exec($curl);
	curl_close ($curl);
	$pms = json_decode($out,true);
	$img_url=$pms['data']['link'];
	
	$consulta_usuario = $db_con->prepare("SELECT * from usuario where email = '$email'");
    $consulta_usuario->execute();
    $linha_usuario = $consulta_usuario->fetch(PDO::FETCH_ASSOC);
    $id_usuario = $linha_usuario["id"];
	$consulta = $db_con->prepare("INSERT INTO usuario_evento (fk_usuario_id, fk_evento_id) values ('$id_usuario', '$id_evento')");
	
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