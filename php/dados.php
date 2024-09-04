<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados do Pacientes</title>
    <link rel="stylesheet" href="../css/style.css" integrity="" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
<center>
        <div class='topnav'>
			<a href='listar.php'>Voltar</a>
		</div>
	<br>
    <h1 style='color: #FFFFFF'>DADOS DO PACIENTES</h1>
    <section style="margin: 20px 0;">
        <div class="container">
            <table class="table table-clear">
                <thead>
                    <tr style='color: #FFFFFF'>
                        <th scope="col" style="text-align:center">PRESCRIÇÃO</th>
                        <th scope="col" style="text-align:center">MÉDICO</th>
                        <th scope="col" style="text-align:center">PACIENTE</th>
                        <th scope="col" style="text-align:center">DESCRIÇÃO</th>
                    </tr>
                </thead>
                <tbody> <?php
                require_once "conexao.php";
                $id_med = $_COOKIE["id_med"];
                $sql_query = "SELECT * FROM prescricoes WHERE id_med = '$id_med'";
                if ($result = $conn->query($sql_query)) {
                    while ($row = $result->fetch_assoc()) {
                        $id_presc = $row["id_presc"];
                        $nome_med = $row["nome_med"];
                        $nome_pac = $row["nome_pac"];
                        $descricao = $row["descricao"];
                        ?> 
                        <tr style="text-align:center;color: #FFFFFF">
                        <td> <?php echo $id_presc; ?> </td>
                        <td> <?php echo $nome_med; ?> </td>
                        <td> <?php echo $nome_pac; ?> </td>
                        <td> <?php echo $descricao; ?> </td>
                    </tr> 
                    <?php
                    }
                }
                $conn->close();
                ?> </tbody>
            </table>
        </div>
    </section>
    <div class='navbar'>
    </center>
</body>

</html>