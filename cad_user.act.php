<?php
extract($_POST);
$email = $usuario . "@" . $servidor;
require('connect.php');
if (isset($_FILES['foto'])) {
    $foto = $_FILES['foto'];
    $url = "imgs/" . md5(time()) . ".jpg";
    move_uploaded_file($foto['tmp_name'], $url);
}
$senha = md5($senha);
$busca = mysqli_query($con, "Select * from `tb_usuarios` where `email` = '$email';");
var_dump($busca);
if ($busca->num_rows != 0) {
    $msg = "Email já utilizado!";
    $destino = "location:cad_user.php";
} else {
    if (mysqli_query($con, "INSERT INTO `tb_usuarios` 
(`codigo`, `nome`, `telefone`, `email`, `senha`, `foto`) VALUES 
(NULL, '$nome', '$telefone', '$email', '$senha','$url');")) {
        $msg = "<div class=alertaGreen>Incluído com sucesso!!!</div>";
        $destino = "location:listar.php";
    } else {
        $msg = "<div class=alertaRed>Erro ao incluir!</div>";
        $destino = "location:cad_user.php";
    }
    //header("location:listar.php");
}
@session_start();
$_SESSION['msg'] = $msg;
header($destino);
