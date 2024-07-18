<?php include('includes/header.php');  ?>
<script src="includes/functions.js"></script>

<script>
    function pesquisar(texto) {
        if (texto != "") {
            $.ajax({
                type: "get",
                url: "pesquisar.act.php?texto=" + texto,
                success: function(response) {
                    $('#resposta').html(response);
                }
            });
        }
        console.log(texto);
    }
</script>

<body>
    <?php include('menu.php');  ?>
    <div class="barraPesquisa">
        Pesquisar:<input type="text" name="" id="txtPesquisar" onkeyup="pesquisar(this.value)">
    </div>
    <div id="resposta">

    </div>
    <?php
    @session_start();
    if (isset($_SESSION['msg'])) {
        echo "<div id=alerta>";
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
        echo "</div>";
    }

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
    if (isset($_GET['nome']) && $_GET['nome'] != '') {
        echo "<script>pesquisar(\"$_GET[nome]\");document.querySelector(#txtPesquisar)</script>";
    }
    ?>

    <script>
        $('#alerta').click(function(e) {
            $('#alerta').fadeOut(500);

        });
    </script>
</body>

</html>