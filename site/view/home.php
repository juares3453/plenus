<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<title>Plenus</title>

	<link rel="stylesheet" type="text/css" href="assets/css/menu.css">
	<link rel="stylesheet" type="text/css" href="assets/css/footer.css">
	<link rel="stylesheet" type="text/css" href="assets/css/home.css">
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />

	<script src="assets/bootstrap/js/bootstrap.js"></script>
</head>
<body>

	<?php include 'menu.php'; ?>

	<div class="row" id="general-content">

		<div class="container-fluid" id="img-fundo-top">
			<div id="bottom-content">
				<div class="row" >
					<div class="col-lg-4 col-md-4 col-sm-1"></div>
					<div class="col-lg-7 col-md-7 col-sm-12">
						<div class="card" id="card">
							<div class="card-body">
								<h5 class="card-title">PLENUS GESTÃO DE TALENTOS</h5>
								<p class="card-text">Constituída em 17 de maio de 2020, com o propósito de
									prestar serviço diferenciado, tem como foco atender as empresas com agilidade,
									desenvolvendo e qualificando o mercado de trabalho, através da contratação de
								profissionas efetivos, treinamento e consultoria em Recursos Humanos.</p>
								<div class="row">
									<div class="col-lg-9 col-md-1 col-sm-1">
									</div>
									<div class="col-lg-3 col-md-11 col-sm-11">
										<button type="submit" class="btn btn-custom-card">
											<span class="btn-icon-card"><i class="fa fa-plus"></i></span>
											Saiba mais
										</button>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-2"></div>
			</div>
		</div>

		<form>
			<div class="container-fluid" id="img-fundo-center">
				<div class="row" id="center-content">
					<div class="col-lg-12">
						<h1 id="titulo-fundo-center">Encontre sua vaga de emprego</h1>
					</div>
					<div class="col-lg-12">
						<div class="search-container">
							<input type="text" placeholder="Digite um cargo do seu interesse">
							<button type="submit" class="search-button"><i class="fa fa-search"> Buscar</i></button>
						</div>
					</div>
					<div class="container-img-fundo-center">
						<img src="assets/img/fundo-1.png" alt="Image">
					</div>

				</div>
			</div>
		</form>

		<div class="container-content-card-full">
			<div class="container-content-cards">
				<div class="card card-left">
					<p>Vagas de emprego para todos os perfis</p>
				</div>
				<div class="card card-center">
					<p>Grandes empresas estão aqui na Plenus</p>
				</div>
				<div class="card card-right">
					<p>Oportunidades para sua carreira</p>
				</div>
			</div>
		</div>

		<div class="container-fluid" id="content-bottom-bar">
			<div class="row">
				<div class="col-2 img-arrow-bottom"></div>
				<div class="col-10 background-content-bottom">
					<p>Clique aqui e cadastre seu currículo</p>
				</div>
			</div>
		</div>


	</div>

	<?php include 'footer.php'; ?>

	<script>

		window.onload = function() {
			var element = document.getElementById("card");
			element.scrollIntoView({ behavior: 'smooth', block: 'center', inline: 'nearest'});
		};

	</script>
</body>
</html>