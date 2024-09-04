<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ENVIANDO</title>
</head> 
<?php require "conexao.php";
	@$idcookie = $_COOKIE["id_med"];
    @$ncookie = $_COOKIE["nome_med"];
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id_med = $_COOKIE["id_med"];
        $nome_med = $_COOKIE["nome_med"];
        $nome_med = strtoupper($nome_med);
        $nome_pac = $_POST["nome_pac"];
        $nome_pac = strtoupper($nome_pac);
        $descricao = $_POST["descricao"];

        $connect = mysqli_connect("localhost","root","");
        $db = mysqli_select_db($connect,"saep_db");

        if($id_med != "" && $nome_med != "" && $nome_pac != "" && $descricao != ""){
        $sql = "INSERT INTO prescricao (id_med, nome_med, nome_pac, descricao) VALUES ('$id_med', '$nome_med', '$nome_pac', '$descricao')";}
    
        if ($conn->query($sql) === TRUE) {
            echo"<script>alert('PRESCRIÇÃO ENVIADA COM SUCESSO!');history.go(-2);</script>";
        }else{
            echo"<script>alert('ERRO AO ENVIAR PRESCRIÇÃO');history.back();</script>" . $conn->error;
        }
    }else{
        echo"<script>alert('OCORREU UM ERRO');history.back();</script>";
    }
$conn->close();