<?php
require('connect.php');
extract($_POST);
$busca = mysqli_query($con, "Select * from `tb_usuarios` where `email` = '$email'");
$destino = "location:listar.php";
$msg = "";
if ($busca->num_rows == 1) {
    $usuario = mysqli_fetch_array($busca);
    $senha = md5($senha);
    if ($usuario['senha'] == $senha) {
        @session_start();
        echo session_create_id();
        $_SESSION['logado'] = true;
        $_SESSION['nome'] = $usuario['nome'];
        $_SESSION['codigo'] = $usuario['codigo'];
    } else {
        echo "Senha incorreta!";
        $destino = "location:login.php";
        $msg = "Erro de usuário ou senha =(";
    }
}
@session_start();
$_SESSION['msg'] = $msg;
header($destino);
//var_dump($busca);
