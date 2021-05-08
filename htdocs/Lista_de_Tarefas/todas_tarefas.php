<?php

	// Toda vez que a página todas_tarefas.php for acessada o método $ação é setado com 'recuperar'
	$acao = 'recuperar';
	require "./tarefa_controller.php";

?>

<html>
	<head>
		<meta charset="UTF-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>App Lista Tarefas</title>
		
		<!-- JavaScript -->
		<script type="text/javascript" src="js/script.js"></script>	
		<!-- Stylesheet -->
		<link rel="stylesheet" href="css/style.css">
		<!-- Bootstrap 4.6 -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	</head>

	<body>
		<header>
			<nav class="navbar navbar-expand-md navbar-dark bg-dark">
				<div class="container">
					<a class="navbar-brand text-light" href="#">
						<img src="img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="logo">
						<span class="text-light">
							App Lista de Tarefas
						</span>
					</a>

					<button class="navbar-toggler" data-toggle="collapse" data-target="#main-target">
						<i class="fas fa-bars text-light"></i>
					</button>

					<div class="collapse navbar-collapse" id="main-target">
						<ul class="navbar-nav ml-auto">
							<li class="nav-item">
								<a href="index.php" class="nav-link">Tarefas pendentes</a>
							</li>
							<li class="nav-item">
								<a href="nova_tarefa.php" class="nav-link">Nova tarefa</a>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link active">Todas tarefas</a>
							</li>
						</ul>
					</div>	
				</div>
			</nav>
		</header>

		<div class="container app">
			<div class="row">
				<div class="col-sm-12">
					<div class="container pagina">
						<div class="row">
							<div class="col">
								<h4>Todas tarefas</h4>
								<hr />

								<?
									// Percorre os registros recuperados em tarefa.service.php no método recuperar
									foreach($lista_tarefas as $key => $value) {
								?>
										<div class="row mb-3 d-flex align-items-center">
											<div class="col-sm-9" id="tarefa_<?=$value->id?>">
												<?= $value->tarefa . " ($value->status)"?>
											</div>
											<div class="col-sm-3 mt-2 d-flex justify-content-between">
												<i class="fas fa-trash-alt fa-lg text-danger" onclick="remover(<?=$value->id?>, 'todas_tarefas')"></i>

												<?
													if($value->status != 'realizado') {
												?>
													<i class="fas fa-edit fa-lg text-info" onclick="editar(<?=$value->id?>, '<?= $value->tarefa?>', 'todas_tarefas')"></i>
													<i class="fas fa-check-square fa-lg text-success" onclick="marcarRealizada(<?=$value->id?>, 'todas_tarefas')"></i>
												<?
													}
												?>

											</div>
										</div>
								<? 
									} 
								?>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>					

		<!-- Bootstrap 4.6 -->
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
		<!-- Fontawesome -->
		<script src="https://kit.fontawesome.com/b1b6dbddd2.js" crossorigin="anonymous"></script>
	</body>
</html>