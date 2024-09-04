<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Início</title>
</head>

<body>
	<?php
	require 'conexao.php';
	@$cookie = $_COOKIE["usuario"];
	@$ncookie = $_COOKIE["nome_med"];
	@$idcookie = $_COOKIE["id_med"];
  	if (isset($cookie)) {
		$query_select = "SELECT usuario, nome_med, tipo FROM medicos WHERE usuario = '$cookie'";
        $select = mysqli_query($conn,$query_select);
        $array = mysqli_fetch_assoc($select);
		if ($array["tipo"] === 'medico'){
			require '../html/medico.html';
			echo "<center><br><br><br><br><br><br><br><br>
			<h1 style='color: #ddd'>Bem-vindo, $ncookie !</h1>
			<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			<div class='navbar'>
			</div></center>";
		}
  	}else{
    	require '../html/login.html';
	}
	?>	
</body>

</html>