<!DOCTYPE html>
<html lang="pt-BR">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/x-icon" href="../logos/icon.png">
	<title>Time In</title>
	<link rel="stylesheet" href="../css/base.css">

	<link rel="stylesheet" href="../css/eventos.css">

	<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.5/dist/sweetalert2.min.css" rel="stylesheet">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.5/dist/sweetalert2.all.min.js" defer></script>

	<script src="https://code.jquery.com/jquery-3.6.0.min.js" defer></script>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous" defer></script>

	<script src="../js/base.js" type="module" defer></script>

</head>

<?php
session_start();
?>

<body>
	<!-- Header com a navbar -->
	<header>
		<?php include('../header.php') ?>
	</header>

	<div class="d-none d-md-block">
		<!-- Botao de voltar -->
		<button class="cssbuttons-io-button "> Voltar
			<!-- Div com icone para voltar -->
			<div class="icon">
				<svg height="177px" width="177px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 483.284 483.284" xml:space="preserve" fill="#000000" stroke="#000000">
					<g id="SVGRepo_bgCarrier" stroke-width="0"></g>
					<g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
					<g id="SVGRepo_iconCarrier">
						<g>
							<polygon class="iconevoltar" points="483.284,221.643 88.284,221.643 88.284,153.358 0,241.644 88.284,241.644 88.284,261.643 483.284,261.643 ">
							</polygon>
							<polygon class="iconevoltar2" points="0,241.644 88.284,329.926 88.284,241.644 "></polygon>
						</g>
					</g>
				</svg>
			</div>
		</button>
	</div>

	<!-- Div com o conteudo ta pagina geral -->
	<div id="container" class="container col-12 m-auto mt-4">
		<div id="fundoev" class="col-11 col-md-8  col m-auto">
			<!-- Adicionando titulo -->
			<h1 id="titulo" class="text-center">Treino Black Nights</h1>
			<div id="evento" class="row">

				<div id="tabela">
					<img src="../img/7.png" id="img_evento">
				</div>

				<!-- Div geral com as informacoes do evento -->
				<div id="informacoes">

					<!-- Div com as descricoes -->
					<div id="desc">
						<p id="t_desc" class="fs-3" class="fs-4" class="fs-4" class="fs-5"><b>Descrição</b></p>
						<p id="p_desc">
							Treino de futebol americano da igreja. Não pode xingamentos! Venha se ajuntar conosco pra
							praticar este esporte tão raro aqui no Brasil
						</p>
					</div><!-- Fechando div de descricoes -->

					<!-- Div com o esporte-->
					<div class="alinhando">
						<p><b>Esporte:</b> Futebol Americano</p>
					</div>
 
					<!-- Div de localizacao -->
					<div id="localizacao"><a id="local" href="maps.php">
							<!-- Icone da localizacao -->
							<svg class="iconezin iconelocev" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512">
								<path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
							</svg>
							<p>
								<!-- localizacao do evento-->
								R. Ana Viêira Mafra, s/n - Mata da Praia, Vitória - ES, 29066-010
							</p>
						</a>
					</div>

					<!-- Div com a data -->
					<div id="data">
						<svg class="iconezin iconedataev" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
							<path d="M128 0c17.7 0 32 14.3 32 32V64H288V32c0-17.7 14.3-32 32-32s32 14.3 32 32V64h48c26.5 0 48 21.5 48 48v48H0V112C0 85.5 21.5 64 48 64H96V32c0-17.7 14.3-32 32-32zM0 192H448V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V192zm64 80v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H80c-8.8 0-16 7.2-16 16zm128 0v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H208c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H336zM64 400v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H80c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H208zm112 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H336c-8.8 0-16 7.2-16 16z" />
						</svg>
						<p id="dia">26/05/23 10:00 - 12:00</p>
					</div>

					
					<!-- Div com o publico-alvo do evento -->
					<div id="alvo">
						<p id="publi"><b>Faixa Etária: </b>Entre 18 e 35 anos</p>
					</div>

					<!-- Div com o intuito do evento -->
					<div id="intuito">
						<p id="sifrao"><b>Público alvo: </b>Treino para amadores</p>
					</div>

					<!-- Div com o numero de vagas restantes -->
					<div class="vagas">
						<div id="vagas_restam">
							<p id="t_vagasrestam"><b>Vagas restantes: </b>18</p>
						</div>

						<!-- Div com o numero de inscritos do evento -->
						<div id="num_inscritos">
							<p id="t_numinscritos"><b>Número de Inscritos: </b>0</p>
						</div>
					</div>

					<!-- Div com o organizador do evento -->
					<div id="organizador">
						<p id="t_organizador"><b>Evento organizado por: </b> Eduardo Lima Oliveira</p>
					</div>

					<!-- Div com o contato-->
					<div class="alinhando">
						<p><b>Contato:</b> (27)99986-0303</p>
					</div>
 
					<!-- Div com o custo do evento -->
					<div id="preco">
						<p id="sifrao"><b>Custo: </b>Gratuito</p>
					</div>

					<!-- Botao de inscrever-se -->
					<button class="inscrever fixo" id="treinoBlack">
					<img src="../logos/icon2.png">
						<span class="now">Agora!</span>
						<span class="play">Inscreva-se</span>
					</button>
				</div>
			</div>
		</div>
	</div>

	<footer>
		<?php include('../footer.php') ?>
	</footer>

</body>

</html>