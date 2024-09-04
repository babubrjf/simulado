<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Pacientes</title>
    <link rel="stylesheet" href="../css/style.css" integrity="" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
<center>
    <div class='topnav'>
            <a href='index.php'>Início</a>
            <a href='cadastro.php'>Cadastrar Paciente</a>
            <a class='active' href='listar.php'>Meus Pacientes</a>
            <a href='logout.php' onclick="return confirm('Deseja deslogar do sistema?')">Sair</a>
    </div>
	<br>
    <h1 style='color: #FFFFFF'>PACIENTES DE <?php @$ncookie = $_COOKIE["nome_med"]; echo "$ncookie"; ?> </h1>
    <section style="margin: 20px 0;">
        <div class="container">
            <table class="table table-clear">
                <thead>
                    <tr style='color: #FFFFFF'>
                        <th scope="col" style="text-align:center">CÓDIGO</th>
                        <th scope="col" style="text-align:center">NOME</th>
                        <th scope="col" colspan="2" style="text-align:center">AÇÕES</th>
                    </tr>
                </thead>
                <tbody> <?php
                require_once "conexao.php";
                $id_med = $_COOKIE["id_med"];
                $sql_query = "SELECT * FROM pacientes WHERE id_med = '$id_med'";
                if ($result = $conn->query($sql_query)) {
                    while ($row = $result->fetch_assoc()) {
                        $id_pac = $row["id_pac"];
                        $nome_pac = $row["nome_pac"];
                        $atendido = $row["atendido"]
                        ?> 
                        <tr style="text-align:center;color: #FFFFFF">
                        <td> <?php echo $id_pac; ?> </td>
                        <td> <?php echo $nome_pac; ?> </td>
                        <td><a style="text-decoration:none" href="prescricao.php?id_pac=<?php echo $id_pac; ?>" class="btn">prescrição</a></td>
                        <td><a style="text-decoration:none" href="excluir.php?id_pac=<?php echo $id_pac; ?>" onclick="return confirm(`Tem certeza que deseja deletar este registro?`)" class="deletebtn">Excluir</a></td>
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