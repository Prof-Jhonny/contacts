<?php
require('connect.php');
$codigo = $_GET['codigo'];
if (mysqli_query($con, "Delete from `tb_contatos` where `codigo` = '$codigo'")) {
    $msg = "Cadastro excluído.";
} else {
    $msg = "Erro ao excluir.";
}
@session_start();
$_SESSION['msg'] = $msg;
header("location:" . $_SERVER['HTTP_REFERER']);
