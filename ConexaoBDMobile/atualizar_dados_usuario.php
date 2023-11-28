<?php
require_once('conexao_db.php');

// array de resposta
$resposta = array();

// Verifica se o parametro id foi enviado na requisicao
if (isset($_GET["id"]) && isset($_GET["nome"]) && isset($_GET["email"]) && isset($_GET["data"]) && isset($_GET["telefone"])) {
	
	// Aqui sao obtidos os parametros
	$id = $_GET['id'];
	$nome = trim($_GET["nome"]);
	$email = trim($_GET["email"]);
	$data = trim($_GET["data"]);
	$telefone = trim($_GET["telefone"]);
	//$caminho_foto = trim($_GET["caminho_foto"]);
	if ($_FILES["caminho_foto"]["size"] > 0){
	        $client_id = "6d2b5be8400b2b3";
	        $filename = $_FILES['foto']['tmp_name'];
	        
	        $image_data = file_get_contents($filename);
	        $image_data_base64 = base64_encode($image_data);
	        
	        $api_url = 'https://api.imgur.com/3/image.json';
	        
	        $headers = [
	            'Authorization: Client-ID ' . $client_id,
	            'Content-Type: application/x-www-form-urlencoded'
	        ];
	        
	        $postData = http_build_query(['image' => $image_data_base64]);
	        
	        $options = [
	            'http' => [
	                'header' => implode("\r\n", $headers),
	                'method' => 'POST',
	                'content' => $postData
	            ]
	        ];
	        
	        $context = stream_context_create($options);
	        $result = file_get_contents($api_url, false, $context);
	        
	        if ($result === FALSE) {
	        	echo "Erro ao enviar arquivo para o Imgur";
	        } else {
	        	$response = json_decode($result, true);
	        	$foto = $response['data']['link'];
	        }

	        $consulta = $db_con->prepare("UPDATE usuario set nome='$nome', telefone='$telefone', data_nascimento='$data_nascimento', fk_intuito_id='$intuito', foto='$foto' WHERE email='$email'");
	        $resposta["sucesso"] = 1;
	        $consulta->execute();
	} else {
		$consulta = $db_con->prepare("UPDATE usuario set nome='$nome', telefone='$telefone', data_nascimento='$data_nascimento', fk_intuito_id='$intuito' WHERE email='$email'");
		$resposta["sucesso"] = 1;
		$consulta->execute();
	}
	
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
