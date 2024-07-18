<?php include('includes/header.php');  ?>
<script src="includes/functions.js"></script>


<body>

    <?php include('menu.php');  ?>
    <?php
    @session_start();
    if (isset($_SESSION['msg'])) {
        echo "<div id=alerta>";
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
        echo "</div>";
    }
    require('connect.php');
    $contatos = mysqli_query($con, "Select * from `tb_contatos`");
    echo "<div class=contatos>";

    while ($contato = mysqli_fetch_array($contatos)) {
        echo "<div>";


        echo "<div class=\"container-img\"><img src=$contato[foto]></div>";
        echo "<p>Código: $contato[codigo]</p>";
        echo "<p>Nome:$contato[nome]</p>";
        echo "<p>Email:$contato[email]</p>";
        echo "<p>Telefone:$contato[telefone]</p>";
        echo "<div class=\"metade\"><a href=alterar_contato.php?codigo=$contato[codigo]>Alterar</a></div>
                        <div class=\"metade\">";
        @session_start();
        if (isset($_SESSION['logado']) && $_SESSION['logado'] == true) {
            echo "<a href=javascript:conf_excluir($contato[codigo])>Excluir</a>";
        }
        echo "</div>";
        echo "<a href=\"exibir_contato.php?codigo=$contato[codigo]\" style=\"text-decoration:none\">";
        echo "Mais Info+";
        echo "</a>";
        echo "</div>";
    }
    echo "</div>";
    /*
    $contatos = mysqli_query($con, "Select * from `tb_contatos`");
    echo "<select name='pessoa'>";
    while ($contato = mysqli_fetch_array($contatos)) {
        echo "<option value=\"$contato[nome]\"";
        if ($contato['nome'] == 'Tafnes') {
            echo " selected";
        }
        echo ">$contato[nome]</option>";
    }
    echo "</select>";

    */
    ?>

    <script>
        $('#alerta').click(function(e) {
            $('#alerta').fadeOut(500);

        });
    </script>
</body>

</html>