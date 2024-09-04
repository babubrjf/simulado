<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CADASTRANDO</title>
</head> 
<?php require "conexao.php";
	@$idcookie = $_COOKIE["id_med"];
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id_med = $_COOKIE["id_med"];
        $nome_pac = $_POST["nome_pac"];
        $nome_pac = strtoupper($nome_pac);
        $cpf = $_POST["cpf"];

        $connect = mysqli_connect("localhost","root","");
        $db = mysqli_select_db($connect,"saep_db");

        $query_select = "SELECT cpf FROM pacientes WHERE cpf = '$cpf'";
        $select = mysqli_query($connect,$query_select);
        $array = mysqli_fetch_array($select);
        @$cpfarray = $array["cpf"];
        if($cpfarray == $cpf){
            echo"<script>alert('O CPF INSERIDO JÁ ESTÁ CADASTRADO!');history.back();</script>";            
        }

        elseif($cpf != "" && $nome_pac != "" && $id_med != ""){
        $sql = "INSERT INTO pacientes (id_med, nome_pac, cpf) VALUES ('$id_med', '$nome_pac', '$cpf')";}
    
        if ($conn->query($sql) === TRUE) {
            echo"<script>alert('PACIENTE CADASTRADO COM SUCESSO!');history.go(-2);</script>";
        }else{
            echo"<script>alert('ERRO AO CADASTRAR PACIENTE');history.back();</script>" . $conn->error;
        }
        }else{
            echo"<script>alert('TODOS OS CAMPOS DEVEM SER PREENCHIDOS');history.back();</script>";
        }
$conn->close();