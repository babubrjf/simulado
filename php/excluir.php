<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EXCLUINDO</title>
  <link rel="icon" href="../img/icon.png" type="image/icon type">
</head>
<?php
  require_once "conexao.php";
  $id_pac = $_GET["id_pac"];
  $query = "DELETE FROM pacientes WHERE id_pac = '$id_pac'";
  if (mysqli_query($conn, $query)) {
    echo"<script>alert('PACIENTE EXCLUÍDO COM SUCESSO!');refresh:0.5;</script>";
    header("Refresh:1; url=listar.php");
  } else {
    echo"<script>alert('ERRO AO EXCLUIR REGISTRO!');history.back();</script>";
  }
?>