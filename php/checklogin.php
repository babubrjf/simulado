<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHECKING</title>
    <link rel="icon" href="../img/icon.png" type="image/icon type">
</head> <?php

$usuario = $_POST["usuario"];
$senha = $_POST["senha"];
$connect = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connect,"saep_db");
$verifica = mysqli_query($connect, "SELECT * FROM medicos WHERE usuario = '$usuario' AND senha = '$senha'")
    or die("Erro ao selecionar");
    if (mysqli_num_rows($verifica)<=0){
        echo "<script>alert('USUÁRIO OU SENHA INCORRETOS!');history.back();</script>";
        header("refresh:2;url=index.php");
        die();
    }else{
        $query_select = "SELECT id_med, nome_med, usuario FROM medicos WHERE usuario = '$usuario'";
        $select = mysqli_query($connect,$query_select);
        $array = mysqli_fetch_array($select);
        @$id_medarray = $array["id_med"];
        @$usuarioarray = $array["usuario"];
        @$nome_medarray = $array["nome_med"];
        setcookie("usuario",$usuarioarray);
        setcookie("nome_med",$nome_medarray);
        setcookie("id_med",$id_medarray);
        header("Location:index.php");
    }