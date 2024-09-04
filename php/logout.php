<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Saindo...</title>
</head>

<?php
    @$usuariocookie = $_COOKIE["usuario"];
    @$id_medcookie = $_COOKIE["id_med"];
    if(isset($usuariocookie)){
        unset($usuariocookie);
        setcookie("usuario","",-1);
        unset($id_medcookie);
        setcookie("id","",-1);
        header("refresh:1;url=index.php");
    }
?>
<script>alert('Deslogado! Pressione OK para voltar a tela de login');refresh:0.5;</script>