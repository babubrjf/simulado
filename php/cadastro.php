<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Novo Cadastro</title>
	<link rel="stylesheet" href="../css/style.css" integrity="" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
	<center>
		<div class='topnav'>
				<a href='index.php'>Início</a>
				<a class='active' href='cadastro.php'>Cadastrar Paciente</a>
				<a href='listar.php'>Meus Pacientes</a>
				<a href='logout.php' onclick="return confirm('Deseja deslogar do sistema?')">Sair</a>
		</div>
		<br>
		<h1 style='color: #ddd'>CADASTRAR PACIENTE DE <?php @$ncookie = $_COOKIE["nome_med"]; echo "$ncookie"; ?></h1>
		<div class='section'>
			<div class='container'>
				<div class='row full-height justify-content-center'>
					<div class='col-12 text-center align-self-center py-5'>
						<div class='section pb-5 pt-5 pt-sm-2 text-center'>
							<label for='reg-log'></label>
							<div class='card-3d-wrap mx-auto'>
								<div class='card-3d-wrapper'>
									<div>
										<div class='center-wrap'>
											<form method='post' action='cadastrar.php'>
												<div class='section text-center'>
													<div class='form-group'>
														<input type='text' class='form-style'
															placeholder='Nome e Sobrenome' name='nome_pac' id='nome_pac'
															required>
														<i class='input-icon uil uil-at'></i>
													</div>
													<br>
													<br>
													<br>
													<br>
													<br>
													<button type='submit' class='btn mt-4'>CADASTRAR</button>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class='navbar'>
	<center>
</body>

</html>