<html>
	<head>
		<meta charset="UTF-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>App Lista Tarefas</title>
		
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
								<a href="#" class="nav-link active">Nova tarefa</a>
							</li>
							<li class="nav-item">
								<a href="todas_tarefas.php" class="nav-link">Todas tarefas</a>
							</li>
						</ul>
					</div>	
				</div>
			</nav>
		</header>

		<?
			if(isset($_GET['inclusao']) && $_GET['inclusao'] == 1) {
		?>
			<div class="bg-success pt-2 text-white d-flex justify-content-center">
				<h5>Tarefa inserida com sucesso!</h5>
			</div>
		<? 
			} 
		?>

		<div class="container app">
			<div class="row">
				<div class="col-md">
					<div class="container pagina">
						<div class="row">
							<div class="col">
								<h4>Nova tarefa</h4>
								<hr />

								<form method="post" action="tarefa_controller.php">
									<div class="form-group">
										<label>Descrição da tarefa:</label>
										<input type="text" class="form-control" name="tarefa" placeholder="Exemplo: Lavar o carro">
									</div>

									<button class="btn btn-primary">Cadastrar</button>
								</form>
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