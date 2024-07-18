<?php require('sec.php'); ?>
<?php include_once('includes/header.php'); ?>

<body>
    <?php include('menu.php'); ?>
    <?php
    require('connect.php');
    $codigo = $_GET['codigo'];
    $contato = mysqli_query($con, "Select * from `tb_contatos` where `codigo` = '$codigo'");
    $contato = mysqli_fetch_array($contato);
    ?>
    <div class="contatos">
        <div>
            <img src="<?php echo $contato['foto']; ?>" alt="">
            <form action="alterar.act.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="foto_anterior" value="<?php echo $contato['foto']; ?>">
                <input type="hidden" name="codigo" value="<?php echo $contato['codigo']; ?>">
                <p>Nome: <input type="text" name="nome" value="<?php echo $contato['nome']; ?>"></p>
                <p>Sexo</p>
                <p>Masculino<input type="radio" name="sexo" value="m" <?php
                                                                        if ($contato['sexo'] == 'm') {
                                                                            echo "checked";
                                                                        }
                                                                        ?>></p>
                <p>Feminino<input type="radio" name="sexo" value="f" <?php
                                                                        if ($contato['sexo'] == 'f') {
                                                                            echo "checked";
                                                                        }
                                                                        ?>></p>
                <p>Email: <input type="text" name="email" value="<?php echo $contato['email']; ?>"></p>
                <p>Telefone: <input type="text" name="telefone" value="<?php echo $contato['telefone']; ?>"></p>
                <p>Idade: <input type="number" name="idade" value="<?php echo $contato['idade']; ?>"></p>
                <p>Foto: <input type="file" name="foto" id=""></p>
                <p>
                    <a href="listar.php">Voltar</a>
                    <input type="submit" value="Alterar">
                </p>
            </form>
        </div>
    </div>
</body>

</html>