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
    <div class="container m-5">
        <form action="cad_user.act.php" method="post" enctype="multipart/form-data">

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Nome</span>
                <input type="text" class="form-control" placeholder="Nome Completo" aria-label="Username" aria-describedby="basic-addon1" name="nome">
            </div>


            <div class="input-group mb-3">
                <div class="input-group-text w-50">
                    <input class="form-check-input mt-0" type="radio" value="m" name="sexo" id="radioSexoM">
                    <label for="radioSexoM">
                        <span class="input-group-text m-2" id="basic-addon1">Masculino</span>
                    </label>

                    <input class="form-check-input mt-0" type="radio" value="f" name="sexo" id="radioSexoF">
                    <label for="radioSexoF">
                        <span class="input-group-text m-2" id="basic-addon1">Feminino</span>
                    </label>
                </div>
            </div>




            <div class="input-group mb-3">
                <span class="input-group-text">Email</span>
                <input type="text" class="form-control" placeholder="Nome de usuário" aria-label="Username" name="usuario">
                <span class="input-group-text">@</span>
                <input type="text" class="form-control" placeholder="Servidor" aria-label="Server" name="servidor">
            </div>


            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Telefone</span>
                <input type="text" class="form-control" placeholder="Telefone Pessoal" aria-label="Cellphone" aria-describedby="basic-addon1" name="telefone" id="txtTelefone">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Senha</span>
                <input type="text" class="form-control" placeholder="senha pessoal" aria-label="Cellphone" aria-describedby="basic-addon1" name="senha" id="txtTelefone">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text">Observações/Apelidos</span>
                <textarea class="form-control" aria-label="With textarea"></textarea>
            </div>

            <div class="input-group mb-3">
                <label class="input-group-text" for="inputGroupFile01">Upload</label>
                <input type="file" class="form-control" id="inputGroupFile01" name="foto">
            </div>

            <div class="d-flex flex-column bd-highlight mb-3">
                <button type="submit" class="btn btn-info">Cadastrar</button>
            </div>

        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="libs/jquery-3.6.1.min.js"></script>
    <script src="libs/jQuery-Mask-Plugin-master/src/jquery.mask.js"></script>
    <script>
        $('#txtTelefone').mask("(99)99999-9999");
    </script>
</body>

</html>