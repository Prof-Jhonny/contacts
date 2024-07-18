<?php
extract($_POST);
$email = $usuario . "@" . $servidor;
require('connect.php');
$url = "";
if (isset($_FILES['foto'])) {
    $foto = $_FILES['foto'];
    $url = "imgs/" . md5(time()) . ".jpg";
    move_uploaded_file($foto['tmp_name'], $url);
}
if (mysqli_query($con, "INSERT INTO `tb_contatos` 
(`codigo`, `nome`,`sexo`, `email`, `telefone`, `nascimento`,`foto`,`apelidos`) VALUES 
(NULL, '$nome', '$sexo', '$email', '$telefone', '$nascimento','$url','$apelidos');")) {
    $msg = "<div class=alertaGreen>Incluído com sucesso!!!</div>";
} else {
    $msg = "<div class=alertaRed>Erro ao incluir!</div>";
}
@session_start();
$_SESSION['msg'] = $msg;
header("location:pesquisar.php?nome=$nome");
