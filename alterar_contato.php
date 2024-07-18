<?php require('sec.php'); ?>
<?php include_once('includes/header.php'); ?>

<body>
    <?php include('menu.php'); ?>
    <?php
    @session_start();
    if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
    ?>

    <?php
    require('connect.php');
    $codigo = $_GET['codigo'];
    $contato = mysqli_query($con, "Select * from `tb_contatos` where `codigo` = '$codigo'");
    $contato = mysqli_fetch_array($contato);
    $email = explode('@', $contato['email']);
    ?>

    <div class="container m-5 text-center">
        <form action="alterar.act.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="foto_anterior" value="<?php echo $contato['foto']; ?>">
            <input type="hidden" name="codigo" value="<?php echo $contato['codigo']; ?>">
            <div class="d-flex flex-column bd-highlight mb-3 btn-info">Cadastrar novo contato</div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Nome</span>
                <input type="text" value="<?php echo $contato['nome']; ?>" class="form-control" placeholder="Nome Completo" aria-label="Username" aria-describedby="basic-addon1" name="nome">
            </div>


            <div class="input-group mb-3 d-flex justify-content-center">
                <div class="input-group-text w-100 d-flex justify-content-center">
                    <input class="form-check-input mt-0" type="radio" value="m" name="sexo" id="radioSexoM" <?php if ($contato['sexo'] == 'm') {
                                                                                                                echo "checked";
                                                                                                            } ?>>
                    <label for="radioSexoM">
                        <span class="input-group-text m-2" id="basic-addon1">Masculino</span>
                    </label>

                    <input class="form-check-input mt-0" type="radio" value="f" name="sexo" id="radioSexoF" <?php if ($contato['sexo'] == 'f') {
                                                                                                                echo "checked";
                                                                                                            } ?>>
                    <label for="radioSexoF">
                        <span class="input-group-text m-2" id="basic-addon1">Feminino</span>
                    </label>
                </div>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">Email</span>
                <input type="text" class="form-control" value="<?php echo $email[0]; ?>" placeholder="Nome de usuário" aria-label="Username" name="usuario">
                <span class="input-group-text">@</span>
                <input type="text" class="form-control" value="<?php echo $email[1]; ?>" placeholder="Servidor" aria-label="Server" name="servidor">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Telefone</span>
                <input type="text" class="form-control" value="<?php echo $contato['telefone']; ?>" placeholder="Telefone Pessoal" aria-label="Cellphone" aria-describedby="basic-addon1" name="telefone" id="txtTelefone">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Data de Nascimento</span>
                <input type="date" value="<?php echo $contato['nascimento']; ?>" class="form-control" placeholder="Nascimento" aria-label="Cellphone" aria-describedby="basic-addon1" name="nascimento" id="dtNascimento">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">Observações/Apelidos</span>
                <textarea class="form-control" aria-label="With textarea" name="apelidos"><?php echo $contato['apelidos']; ?></textarea>
            </div>

            <div class="input-group mb-3">
                <label class="input-group-text" for="inputGroupFile01">Upload</label>
                <input type="file" class="form-control" id="inputGroupFile01" name="foto" onchange="previewFile(this);">
                <div class="container-img-incluir">
                    <img src="<?php echo $contato['foto']; ?>" alt="Foto Atual" title="Foto Atual">
                </div>
                <div class="container-img-incluir">
                    <img src="" alt="" id="previewImg">
                </div>

            </div>

            <div class="d-flex flex-column bd-highlight mb-3">
                <button type="submit" class="btn btn-info">Alterar</button>
            </div>
            <div class="d-flex flex-column bd-highlight mb-3">
                <a href="listar.php">Voltar</a>
            </div>

        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="libs/jquery-3.6.1.min.js"></script>
    <script src="libs/jQuery-Mask-Plugin-master/src/jquery.mask.js"></script>
    <script>
        $('#txtTelefone').mask("(99)99999-9999");

        function previewFile(input) {
            $("#previewImg").fadeOut(0);
            var file = $("input[type=file]").get(0).files[0];

            if (file) {
                var reader = new FileReader();

                reader.onload = function() {
                    $("#previewImg").attr("src", reader.result);
                }

                reader.readAsDataURL(file);
            }
            $("#previewImg").fadeIn(800);
        }
    </script>
</body>

</html>