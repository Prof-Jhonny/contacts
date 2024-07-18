<?php
$texto = $_GET['texto'];

require('connect.php');
$contatos = mysqli_query($con, "Select * from `tb_contatos` where `nome` like '%$texto%' or `apelidos` like '%$texto%'");
echo "<div class=contatos>";
while ($contato = mysqli_fetch_array($contatos)) {
    echo "<div>";
    echo "<div class=\"container-img\"><img src=$contato[foto]?time=" . time() . "></div>";
    echo "<p>Código: $contato[codigo]</p>";
    echo "<p>Nome:$contato[nome]</p>";
    echo "<p>Email:$contato[email]</p>";
    echo "<p>Telefone:$contato[telefone]</p>";
    echo "<div class=\"metade\">
            <a href=alterar_contato.php?codigo=$contato[codigo]>Alterar</a>
    </div>
    <div class=\"metade\">";
    @session_start();
    if (isset($_SESSION['logado']) && $_SESSION['logado'] == true) {
        echo "<a href=javascript:conf_excluir($contato[codigo])>Excluir</a>";
    }
    echo "</div>";
    echo "</div>";
}
echo "</div>";
