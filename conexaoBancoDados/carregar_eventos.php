<?php

/*
 * O seguinte codigo retorna para o cliente a lista de eventos 
 * armazenados no servidor. Essa e uma requisicao do tipo GET. 
 * Devem ser enviados os parâmetro de limit e offset para 
 * realização da paginação de dados no cliente.
 * A resposta e no formato JSON.
 */

// conexão com bd
require_once('conexao_db.php');

require_once('Carregar/carregar_endereco_evento.php');

require_once('Carregar/carregar_intuito.php');
require_once('Carregar/carregar_classificacao.php');

require_once('Carregar/carregar_intervalo.php');
// array for JSON resposta
$resposta = array();

// verifica se o usuário conseguiu autenticar
if($db_con) {
	
	// Primeiro, verifica-se se todos os parametros foram enviados pelo cliente.
	// limit - quantidade de eventos a ser entregues
	// offset - indica a partir de qual evento começa a lista
	$limit = 20;
	if (true) {

		// Realiza uma consulta ao BD e obtem todos os eventos.
		$consulta = $db_con->prepare("SELECT * FROM evento LIMIT " . $limit);

		if($consulta->execute()) {
			// Caso existam eventos no BD, eles sao armazenados na 
			// chave "eventos". O valor dessa chave e formado por um 
			// array onde cada elemento e um evento.
			$resposta["eventos"] = array();
			$resposta["sucesso"] = 1;

			if ($consulta->rowCount() > 0) {
				while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
					// Para cada evento, sao retornados somente o 
					// pid (id do evento), o nome do evento e o preço. Nao ha necessidade 
					// de retornar nesse momento todos os campos dos eventos 
					// pois a app cliente, inicialmente, so precisa do nome e preço do mesmo para 
					// exibir na lista de eventos. O campo id e usado pela app cliente 
					// para buscar os detalhes de um evento especifico quando o usuario 
					// o seleciona. Esse tipo de estrategia poupa banda de rede, uma vez 
					// os detalhes de um evento somente serao transferidos ao cliente 
					// em caso de real interesse.
					$evento = array();
					
					$evento["id"] = $linha["id"];


					$evento["idade_publico"] = carregar_intervalo($db_con, $linha["fk_idade_publico_id"]);

					$evento["classificacao"] = carregar_classificacao($db_con, $linha["fk_classificacao_id"]);
					$evento["nome"] = $linha["nome"];
					$evento["preco"] = number_format($linha["preco"], 2, ',', '');
					$evento["data"] = $linha["data"];
					$evento["horario_fim"] = $linha["horario_fim"];
					$evento["horario_inicio"] = $linha["horario_inicio"];
					$evento["intuito"] = carregar_intuito($db_con, $linha["fk_intuito_id"]);
					$evento["endereco"] = carregar_endereco($db_con, $linha["fk_endereco_id"]);
					$evento["foto"] = $linha["foto"];

					// Adiciona o evento no array de eventos.
					array_push($resposta["eventos"], $evento);
				}
			}
		}
		else {
			// Caso ocorra falha no BD, o cliente 
			// recebe a chave "sucesso" com valor 0. A chave "erro" indica o 
			// motivo da falha.
			$resposta["sucesso"] = 0;
			$resposta["erro"] = "Erro no BD: " . $consulta->$error;
		}
	}
	else {
		// Se a requisicao foi feita incorretamente, ou seja, os parametros 
		// nao foram enviados corretamente para o servidor, o cliente 
		// recebe a chave "sucesso" com valor 0. A chave "erro" indica o 
		// motivo da falha.
		$resposta["sucesso"] = 0;
		$resposta["erro"] = "Campo requerido não preenchido";
	}
}
else {
	// senha ou usuario nao confere
	$resposta["sucesso"] = 0;
	$resposta["erro"] = "usuario ou senha não confere";
}

// fecha conexão com o bd
$db_con = null;

// Converte a resposta para o formato JSON.
return json_encode($resposta);
?>