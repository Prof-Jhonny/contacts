<?php
extract($_POST);
extract($_FILES);
require('connect.php');
$email = $usuario . "@" . $servidor;
var_dump($foto);
if ($foto['tmp_name'] != "" && $foto['error'] == 0) {
    echo "passei1";
    $foto = $_FILES['foto'];
    if ($foto_anterior == "") {
        $foto_anterior = "imgs/" . md5(time()) . ".jpg";
        echo "passei2";
    }
    move_uploaded_file($foto['tmp_name'], $foto_anterior);
}
if (mysqli_query($con, "UPDATE `tb_usuarios` SET `nome` = '$nome', `sexo` = '$sexo', `telefone` = '$telefone', `email` = '$email',`nascimento` = '$nascimento', `foto` = '$foto_anterior' WHERE `codigo` = '$codigo';")) {
    $msg = "<div class=alertaGreen>Alterado com sucesso!!!</div>";
} else {
    $msg = "<div class=alertaRed>Erro ao alterar!</div>";
}
@session_start();
$_SESSION['msg'] = $msg;
echo $con->error;
header("location:listar.php");
