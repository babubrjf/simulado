<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Nova Solicitação</title>
	<link rel="stylesheet" href="../css/style.css" integrity="" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
	<?php
		require 'conexao.php';
		$id_pac = $_GET["id_pac"];
			$query_select = "SELECT * FROM pacientes WHERE id_pac = '$id_pac'";
			$select = mysqli_query($conn,$query_select);
			$array = mysqli_fetch_assoc($select);
			if ($result = $conn -> query($query_select)) {
				while ($row = $result -> fetch_assoc()) { 
					$id_pac = $row['id_pac'];
					$nome_pac = $row['nome_pac'];
				}
			}
		?>
	<center>
	<div class='topnav'>
			<a href='listar.php'>Voltar</a>
	</div>
		<form method="POST" enctype="multipart/form-data" action='prescrever.php'>
		<br>
		<label style="color:#ffffff" class='form-group' for="nome_pac">NOME DO PACIENTE:</label>
			<input type="text" id="nome_pac" name="nome_pac" value="<?php echo $nome_pac; ?>" required>
			<div>
				<label>
					<h2 style="color:#ffffff">Descrição:</h2>
				</label>
				<textarea name="descricao" id="descricao" cols="85" rows="30" placeholder="(MÁX 1000 CARACTERES)" required></textarea>
			</div>

			<br>

			<button type='submit' class='btn mt-4'>finalizar</button><br><br>
		</form>
		<?php
		$conn->close();
		?>

		<div class='navbar'></div>
		<center>
</body>

</html>