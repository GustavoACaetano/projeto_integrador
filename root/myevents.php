<!DOCTYPE html>
<html lang="pt-BR">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/x-icon" href="logos/icon.png">
	<title>Time In</title>

	<link rel="stylesheet" href="css/base.css">

	<link rel="stylesheet" href="css/myevents.css">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

	<script src="js/meuseventos.js" type="module"></script>

	<script src="js/base.js" type="module" defer></script>

	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.5/dist/sweetalert2.all.min.js"></script>

	<script src="https://code.jquery.com/jquery-3.6.0.min.js" defer></script>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"
		defer></script>

</head>

<body>
	<!-- Header com a navbar -->
	<header>
		<?php include('header.php') ?>
	</header> <!-- Fechando header -->

	<div class="col-12" id="seletorevento">
		<div class="col-6 selected" id="inscrito">
			<h3>Eventos Inscritos</h3>
		</div>	

		<div class="col-6 not-selected" id="criado">
			<h3>Eventos Criados</h3>
		</div>
	</div>

	<p class="text-center semevento" id="seminscrito">Você não está inscrito em nenhum evento!</p>
	<p class="text-center semevento" id="semcriado">Você não criou nenhum evento!</p>

	<!-- Section que carrega todas as div eventos -->
	<section class="conteudo col-11 m-auto">
		<div id="naoAchou" class="fs-4 msg_erro">Nenhum resultado para "" foi encontrado!</div>

		<!-- Div primeiro evento -->
		<div class="evento mt-3 mt-sm-4 primeiro" id="divaulaZico">

			<!-- Div onde ficará todas as informações  -->
			<div class="informacoes">
				<div class="row">
					<img src="img/6.png" alt="Aula do Zico" class="imgEventos img-fluid col-12  col-lg-5">

					<!-- Div desc que contem todas as descrições do evento -->
					<div class="desc col-12 col-lg-7">

						<!-- Parágrafo com título do evento -->
						<p class="pTitulo"><b>Aula do Zico</b></p>

						<!-- Div que contem data e hora -->
						<div class="data">
							<svg class="iconedata" xmlns="http://www.w3.org/2000/svg" height="1em"
								viewBox="0 0 448 512">
								<path
									d="M128 0c17.7 0 32 14.3 32 32V64H288V32c0-17.7 14.3-32 32-32s32 14.3 32 32V64h48c26.5 0 48 21.5 48 48v48H0V112C0 85.5 21.5 64 48 64H96V32c0-17.7 14.3-32 32-32zM0 192H448V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V192zm64 80v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H80c-8.8 0-16 7.2-16 16zm128 0v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H208c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H336zM64 400v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H80c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H208zm112 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H336c-8.8 0-16 7.2-16 16z" />
							</svg>
							<p>16/08/23 12:00 - 14:00</p>
						</div>

						<!-- Parágrafo com endereço do evento -->
						<p class="ende">
							<svg class="iconeloc" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512">
								<path
									d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
							</svg>
							R. Nelcy Lopes Vieira, 1000 - Jardim Limoeiro, Serra - ES, 29164-018
						</p>
						<!-- Div com o intuito-->
						<div class="intuito d-none d-lg-block">
							<p><b>Intuito:</b> Para toda Família</p>
						</div>

						<!-- Div com o público-->
						<div class="publico d-none d-lg-block">
							<p><b>Público-alvo:</b> Entre 5 e 10 anos</p>
						</div>
						<!-- Div com botão para inscrever-se e parágrafo dizendo o valor do evento-->
						<div class="btn_des">
							<p><b>R$:</b> 97,00</p>
						</div>

						<!-- Button para o usuário se inscrever -->
						<button class="inscricao sb-list " id="aulaZico"><span>Cancelar inscrição</span></button>



						<!-- Fim da div desc -->
					</div>
				</div>

				<!--- Fim da div informacoes -->
			</div>

			<!-- Fim da div evento primeiro -->
		</div>

		<!-- Div do segundo evento -->
		<div class="evento mt-3 mt-sm-4 segundo" id="divtreinoBlack">

			<div class="informacoes">
				<div class="row">
					<img src="img/7.png" alt="Treino Black Knights" class="imgEventos img-fluid col-12  col-lg-5">

					<!-- Div desc que contem todas as descrições do evento -->
					<div class="desc col-12 col-lg-7">

						<!-- Parágrafo com título do evento -->
						<p class="pTitulo"><b>Treino Black Knights</b></p>

						<!-- Div que contem data e hora -->
						<div class="data">
							<svg class="iconedata" xmlns="http://www.w3.org/2000/svg" height="1em"
								viewBox="0 0 448 512">
								<path
									d="M128 0c17.7 0 32 14.3 32 32V64H288V32c0-17.7 14.3-32 32-32s32 14.3 32 32V64h48c26.5 0 48 21.5 48 48v48H0V112C0 85.5 21.5 64 48 64H96V32c0-17.7 14.3-32 32-32zM0 192H448V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V192zm64 80v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H80c-8.8 0-16 7.2-16 16zm128 0v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H208c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H336zM64 400v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H80c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H208zm112 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H336c-8.8 0-16 7.2-16 16z" />
							</svg>
							<p>26/05/23 10:00 - 12:00</p>
						</div>

						<!-- Parágrafo com endereço do evento -->
						<p class="ende">
							<svg class="iconeloc" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512">
								<path
									d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
							</svg>
							R. Ana Viêira Mafra, s/n - Mata da Praia, Vitória - ES, 29066-010
						</p>

						<!-- Div com o intuito-->
						<div class="intuito d-none d-lg-block">
							<p><b>Intuito:</b> Treino para Amadores</p>
						</div>

						<!-- Div com o público-->
						<div class="publico d-none d-lg-block">
							<p><b>Público-alvo:</b> Entre 18 e 35 anos</p>
						</div>

						<!-- Div com botão para inscrever-se e parágrafo dizendo o valor do evento-->
						<div class="btn_des">
							<p><b>R$:</b> Gratuito</p>
						</div>

						<button class="inscricao sb-list " id="treinoBlack"><span>Cancelar inscrição</span></button>



						<!-- Fim da div desc -->
					</div>
				</div>
				<!-- Fim da div informacoes -->
			</div>

			<!-- Fim da div evento segundo -->
		</div>

		<!-- Div do terceiro evento -->
		<div class="evento mt-3 mt-sm-4 terceiro" id="divdesafioNatacao">

			<div class="informacoes">
				<div class="row">
					<img src="img/10.png" alt="Desafio de Natação" class="imgEventos img-fluid col-12  col-lg-5">

					<!-- Div desc que contem todas as descrições do evento -->
					<div class="desc col-12 col-lg-7">

						<!-- Parágrafo com título do evento -->
						<p class="pTitulo"><b>Desafio de Natação</b></p>

						<!-- Div que contem data e hora -->
						<div class="data">
							<svg class="iconedata" xmlns="http://www.w3.org/2000/svg" height="1em"
								viewBox="0 0 448 512">
								<path
									d="M128 0c17.7 0 32 14.3 32 32V64H288V32c0-17.7 14.3-32 32-32s32 14.3 32 32V64h48c26.5 0 48 21.5 48 48v48H0V112C0 85.5 21.5 64 48 64H96V32c0-17.7 14.3-32 32-32zM0 192H448V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V192zm64 80v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H80c-8.8 0-16 7.2-16 16zm128 0v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H208c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H336zM64 400v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H80c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H208zm112 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H336c-8.8 0-16 7.2-16 16z" />
							</svg>
							<p>12/07/23 08:00</p>
						</div>

						<!-- Parágrafo com endereço do evento -->
						<p class="ende">
							<svg class="iconeloc" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512">
								<path
									d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
							</svg>
							Rodovia ES-010, Km 35 - Santa Cruz, Aracruz - ES, 29199-548
						</p>

						<!-- Div com o intuito-->
						<div class="intuito d-none d-lg-block">
							<p><b>Intuito:</b> Para toda Família</p>
						</div>

						<!-- Div com o público-->
						<div class="publico d-none d-lg-block">
							<p><b>Público-alvo:</b> Acima de 2 anos</p>
						</div>

						<!-- Div com botão para inscrever-se e parágrafo dizendo o valor do evento-->
						<div class="btn_des">
							<p><b>R$:</b> Gratuito</p>
						</div>

						<button class="inscricao  sb-list" id="desafioNatacao"><span>Cancelar inscrição</span></button>



						<!-- Fim da div desc -->
					</div>
				</div>
				<!--- Fim da div informacoes -->
			</div>

			<!-- Fim da div evento terceiro-->
		</div>

		<!-- Div do quarto evento -->
		<div class="evento mt-3 mt-sm-4 quarto" id="divmarDourado">

			<div class="informacoes">
				<div class="row">
					<img src="img/11.png" alt="Mar Dourado Beach Tennis" class="imgEventos img-fluid col-12  col-lg-5">

					<!-- Div desc que contem todas as descrições do evento -->
					<div class="desc col-12 col-lg-7">

						<!-- Parágrafo com título do evento -->
						<p class="pTitulo"><b>Mar Dourado Beach Tennis</b></p>

						<!-- Div que contem data e hora -->
						<div class="data">
							<svg class="iconedata" xmlns="http://www.w3.org/2000/svg" height="1em"
								viewBox="0 0 448 512">
								<path
									d="M128 0c17.7 0 32 14.3 32 32V64H288V32c0-17.7 14.3-32 32-32s32 14.3 32 32V64h48c26.5 0 48 21.5 48 48v48H0V112C0 85.5 21.5 64 48 64H96V32c0-17.7 14.3-32 32-32zM0 192H448V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V192zm64 80v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H80c-8.8 0-16 7.2-16 16zm128 0v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H208c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H336zM64 400v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H80c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H208zm112 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H336c-8.8 0-16 7.2-16 16z" />
							</svg>
							<p>12/09/23 11:00</p>
						</div>

						<!-- Parágrafo com endereço do evento -->
						<p class="ende">
							<svg class="iconeloc" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512">
								<path
									d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
							</svg>
							Av. Est. José Júlio de Souza - Praia de Itaparica, Vila Velha - ES, 29103-865
						</p>

						<!-- Div com o intuito-->
						<div class="intuito d-none d-lg-block">
							<p><b>Intuito:</b> Para toda Família</p>
						</div>

						<!-- Div com o público-->
						<div class="publico d-none d-lg-block">
							<p><b>Público-alvo:</b> Acima de 12 anos</p>
						</div>

						<!-- Div com botão para inscrever-se e parágrafo dizendo o valor do evento-->
						<div class="btn_des">
							<p><b>R$:</b> 10,00</p>
						</div>

						<button class="inscricao  sb-list" id="marDourado"><span>Cancelar inscrição</span></button>



						<!-- Fim da div desc -->
					</div>
				</div>
				<!-- Fim da div informacoes -->
			</div>

		</div><!-- Fim da div evento quarto -->

		<!-- Div do quinto evento -->
		<div class="evento mt-3 mt-sm-4 quinto" id="divcorridaPenha">

			<div class="informacoes">
				<div class="row">
					<img src="img/9.png" alt="10ª Corrida da Penha" class="imgEventos img-fluid col-12  col-lg-5">

					<div class="desc col-12 col-lg-7"><!-- Div desc que contem todas as descrições do evento -->

						<p class="pTitulo"><b>10ª Corrida da Penha</b></p><!-- Parágrafo com título do evento -->

						<div class="data">
							<svg class="iconedata" xmlns="http://www.w3.org/2000/svg" height="1em"
								viewBox="0 0 448 512">
								<path
									d="M128 0c17.7 0 32 14.3 32 32V64H288V32c0-17.7 14.3-32 32-32s32 14.3 32 32V64h48c26.5 0 48 21.5 48 48v48H0V112C0 85.5 21.5 64 48 64H96V32c0-17.7 14.3-32 32-32zM0 192H448V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V192zm64 80v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H80c-8.8 0-16 7.2-16 16zm128 0v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H208c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H336zM64 400v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H80c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H208zm112 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H336c-8.8 0-16 7.2-16 16z" />
							</svg>
							<p>09/04/23 07:30</p>
						</div>

						<!-- Parágrafo com endereço do evento -->
						<p class="ende">
							<svg class="iconeloc" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512">
								<path
									d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
							</svg>
							Av. Estudante José Júlio de Souza - Av. Antônio Gil Veloso - Rua Antônio Ataíde - Parque da
							Prainha
						</p>

						<!-- Div com o intuito-->
						<div class="intuito d-none d-lg-block">
							<p><b>Intuito:</b> Para profissionais</p>
						</div>

						<!-- Div com o público-->
						<div class="publico d-none d-lg-block">
							<p><b>Público-alvo:</b> Acima de 6 anos</p>
						</div>

						<!-- Div com botão para inscrever-se e parágrafo dizendo o valor do evento-->
						<div class="btn_des">
							<p><b>R$:</b> Gratuito</p>
						</div>

						<button class="inscricao  sb-list" id="corridaPenha"><span>Cancelar inscrição</span></button>



						<!-- Fim da div desc -->
					</div>
				</div>
				<!-- Fim da div informacoes -->
			</div>

			<!--Fim da div evento quinto-->
		</div>

		<!-- Div do sexto evento -->
		<div class="evento mt-3 mt-sm-4 sexto" id="divetapeRio">

			<div class="informacoes">
				<div class="row">
					<img src="img/8.png" alt="L'Étape Rio de Janeiro" class="imgEventos img-fluid col-12  col-lg-5">

					<div class="desc col-12 col-lg-7"><!-- Div desc que contem todas as descrições do evento -->

						<p class="pTitulo"><b>L'Étape Rio de Janeiro</b></p><!-- Parágrafo com título do evento -->

						<div class="data">
							<svg class="iconedata" xmlns="http://www.w3.org/2000/svg" height="1em"
								viewBox="0 0 448 512">
								<path
									d="M128 0c17.7 0 32 14.3 32 32V64H288V32c0-17.7 14.3-32 32-32s32 14.3 32 32V64h48c26.5 0 48 21.5 48 48v48H0V112C0 85.5 21.5 64 48 64H96V32c0-17.7 14.3-32 32-32zM0 192H448V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V192zm64 80v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H80c-8.8 0-16 7.2-16 16zm128 0v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H208c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H336zM64 400v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H80c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H208zm112 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H336c-8.8 0-16 7.2-16 16z" />
							</svg>
							<p>30/06/23 12:00</p>
						</div>

						<!-- Parágrafo com endereço do evento -->
						<p class="ende">
							<svg class="iconeloc" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512">
								<path
									d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
							</svg>
							Avenida Infante Dom Henrique - Marina da Glória, Rio de Janeiro, RJ, Brasil
						</p>

						<!-- Div com o intuito-->
						<div class="intuito d-none d-lg-block">
							<p><b>Intuito:</b> Para profissionais</p>
						</div>

						<!-- Div com o público-->
						<div class="publico d-none d-lg-block">
							<p><b>Público-alvo:</b> Acima de 18 anos</p>
						</div>

						<div class="btn_des">
							<!-- Div com botão para inscrever-se e parágrafo dizendo o valor do evento-->
							<p><b>R$:</b> 130,00</p>
						</div>

						<button class="inscricao  sb-list" id="etapeRio"><span>Cancelar inscrição</span></button>

					</div>

					<!-- Fim da div desc -->
				</div>
			</div>
			<!-- Fim da div informacoes -->
		</div>

		<!-- Fim da div evento sexto -->
		</div>

		<!-- Div do setimo evento -->
		<div class="evento mt-3 mt-sm-4 setimo" id="divsurfItaparica">

			<div class="informacoes">
				<div class="row">
					<img src="img/12.png" alt="Surf - Praia de Itaparica" class="imgEventos img-fluid col-12  col-lg-5">

					<div class="desc col-12 col-lg-7"><!-- Div desc que contem todas as descrições do evento -->

						<p class="pTitulo"><b>Surf - Praia de Itaparica</b></p><!-- Parágrafo com título do evento -->

						<div class="data">
							<svg class="iconedata" xmlns="http://www.w3.org/2000/svg" height="1em"
								viewBox="0 0 448 512">
								<path
									d="M128 0c17.7 0 32 14.3 32 32V64H288V32c0-17.7 14.3-32 32-32s32 14.3 32 32V64h48c26.5 0 48 21.5 48 48v48H0V112C0 85.5 21.5 64 48 64H96V32c0-17.7 14.3-32 32-32zM0 192H448V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V192zm64 80v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H80c-8.8 0-16 7.2-16 16zm128 0v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H208c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H336zM64 400v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H80c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H208zm112 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H336c-8.8 0-16 7.2-16 16z" />
							</svg>
							<p>05/07/23 18:00</p>
						</div>

						<!-- Parágrafo com endereço do evento -->
						<p class="ende">
							<svg class="iconeloc" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512">
								<path
									d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
							</svg>
							Praça Cristóvão Jaques, 189-273 - Santa Helena, Vitória - ES, 29055-070
						</p>

						<!-- Div com o intuito-->
						<div class="intuito d-none d-lg-block">
							<p><b>Intuito:</b> Treino para amadores</p>
						</div>

						<!-- Div com o público-->
						<div class="publico d-none d-lg-block">
							<p><b>Público-alvo:</b> Acima de 16 anos</p>
						</div>

						<div class="btn_des">
							<!-- Div com botão para inscrever-se e parágrafo dizendo o valor do evento-->
							<p><b>R$:</b> Gratuito</p>
						</div>


						<button class="inscricao  sb-list" id="surfItaparica"><span>Cancelar inscrição</span></button>

						<!-- Fim da div desc -->
					</div>
				</div>
				<!-- Fim da div informacoes -->
			</div>

			<!-- Fim da div evento setimo -->
		</div>

		<!-- Div do setimo evento -->
		<div class="evento mt-3 mt-sm-4 oitavo" id="divbasqueteCaue">

			<div class="informacoes">
				<div class="row">
					<img src="img/13.png" alt="Basquete - Praça do Cauê" class="imgEventos img-fluid col-12  col-lg-5">

					<div class="desc col-12 col-lg-7"><!-- Div desc que contem todas as descrições do evento -->

						<p class="pTitulo"><b>Basquete - Praça do Cauê</b></p><!-- Parágrafo com título do evento -->

						<div class="data">
							<svg class="iconedata" xmlns="http://www.w3.org/2000/svg" height="1em"
								viewBox="0 0 448 512">
								<path
									d="M128 0c17.7 0 32 14.3 32 32V64H288V32c0-17.7 14.3-32 32-32s32 14.3 32 32V64h48c26.5 0 48 21.5 48 48v48H0V112C0 85.5 21.5 64 48 64H96V32c0-17.7 14.3-32 32-32zM0 192H448V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V192zm64 80v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H80c-8.8 0-16 7.2-16 16zm128 0v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H208c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H336zM64 400v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H80c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H208zm112 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H336c-8.8 0-16 7.2-16 16z" />
							</svg>
							<p>09/09/23 07:30</p>
						</div>

						<!-- Parágrafo com endereço do evento -->
						<p class="ende">
							<svg class="iconeloc" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512">
								<path
									d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
							</svg>
							Arena Jacaraípe. Av. Abido Saad, n° 714, Estância Monazítica Município da Serra / ES.
						</p>
						<!-- Div com o intuito-->
						<div class="intuito d-none d-lg-block">
							<p><b>Intuito:</b> Para profissionais</p>
						</div>

						<!-- Div com o público-->
						<div class="publico d-none d-lg-block">
							<p><b>Público-alvo:</b> Acima de 18 anos</p>
						</div>

						<div class="btn_des">
							<!-- Div com botão para inscrever-se e parágrafo dizendo o valor do evento-->
							<p><b>R$:</b> Gratuito</p>
						</div>

						<button class="inscricao  sb-list" id="basqueteCaue"><span>Cancelar inscrição</span></button>



						<!-- Fim da div desc -->
					</div>
				</div>
				<!-- Fim da div informacoes -->
			</div>

			<!-- Fim da div evento oitavo -->
		</div>
		<!-- Div do nove evento -->
		<div class="evento mt-3 mt-sm-4 nove" id="divmotocrossArena">

			<div class="informacoes">
				<div class="row">
					<img src="img/14.png" alt="Motocross - Arena Capixaba de Verão"
					class="imgEventos img-fluid col-12  col-lg-5">

				<div class="desc col-12 col-lg-7"><!-- Div desc que contem todas as descrições do evento -->

					<p class="pTitulo"><b>Motocross - Arena Capixaba de Verão</b></p>
					<!-- Parágrafo com título do evento -->

					<div class="data">
						<svg class="iconedata" xmlns="http://www.w3.org/2000/svg" height="1em"
							viewBox="0 0 448 512">
							<path
								d="M128 0c17.7 0 32 14.3 32 32V64H288V32c0-17.7 14.3-32 32-32s32 14.3 32 32V64h48c26.5 0 48 21.5 48 48v48H0V112C0 85.5 21.5 64 48 64H96V32c0-17.7 14.3-32 32-32zM0 192H448V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V192zm64 80v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H80c-8.8 0-16 7.2-16 16zm128 0v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H208c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H336zM64 400v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H80c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H208zm112 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H336c-8.8 0-16 7.2-16 16z" />
						</svg>
						<p>09/09/23 07:30</p>
					</div>

					<!-- Parágrafo com endereço do evento -->
					<p class="ende">
						<svg class="iconeloc" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512">
							<path
								d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z" />
						</svg>
						Arena Jacaraípe. Av. Abido Saad, n° 714, Estância Monazítica Município da Serra / ES.
					</p>
					<!-- Div com o intuito-->
					<div class="intuito d-none d-lg-block">
						<p><b>Intuito:</b> Para profissionais</p>
					</div>

					<!-- Div com o público-->
					<div class="publico d-none d-lg-block">
						<p><b>Público-alvo:</b> Acima de 18 anos</p>
					</div>



					<!-- Div com botão para inscrever-se e parágrafo dizendo o valor do evento-->
					<div class="btn_des">
						<p><b>R$:</b> 15,90</p>
					</div>


						<button class="inscricao sb-list" id="motocrossArena"><span>Cancelar inscrição</span></button>



						<!-- Fim da div desc -->
					</div>
				</div>
				<!-- Fim da div informacoes -->
			</div>

			<!--Fim da div evento nove-->
		</div>

		<!--- Fim da Section -->
	</section>

	<footer>
		<?php include('footer.php') ?>
	</footer>
</body>

</html>