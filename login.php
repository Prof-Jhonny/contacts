<?php
include('includes/header.php');

?>
<style>
    .alertaRed,
    alertaGreen {
        padding: 20px;
        margin: 20px;
        font-size: 45px;
    }

    .alertaRed {
        border: solid 6px red;
    }

    .alertaGreen {
        border: solid 6px greenyellow;
    }

    .gradient-custom-2 {
        /* fallback for old browsers */
        background: #fccb90;

        /* Chrome 10-25, Safari 5.1-6 */
        background: -webkit-linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);

        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);
    }

    @media (min-width: 768px) {
        .gradient-form {
            height: 100vh !important;
        }
    }

    @media (min-width: 769px) {
        .gradient-custom-2 {
            border-top-right-radius: .3rem;
            border-bottom-right-radius: .3rem;
        }
    }

    #square {
        margin: 0 auto;
        width: 600px;
        padding: 20px;
    }

    #insideSquare {
        padding: 60px 90px;
    }
</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <?php include('menu.php'); ?>
    <?php
    @session_start();
    if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
    ?>
    <section id="square" class="h-100 gradient-form" style="background-color: #eee;">

        <div id="insideSquare" class="gradient-custom-2">
            <form method="POST" action="login.act.php">
                <p>Preencha as informações:</p>

                <div class="form-outline mb-4">
                    <input type="email" id="form2Example11" class="form-control" placeholder="Email" name="email" />
                    <label class="form-label" for="form2Example11">Email</label>
                </div>
                <div class="form-outline mb-4">
                    <input type="password" id="form2Example22" class="form-control" name="senha" />
                    <label class="form-label" for="form2Example22">Senha</label>
                </div>
                <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3 w-100" type="submit">Entrar</button>
                <div class="text-center pt-1 mb-5 pb-1">
                    <a class="text-muted" href="#!">Esqueceu a senha?</a>
                </div>
                <div class="d-flex align-items-center justify-content-center pb-4">
                    <p class="mb-0 me-2">Não tem uma conta?</p>
                    <button type="button" class="btn" style="color:white;">Criar nova</button>
                </div>
            </form>
        </div>b
    </section>
</body>

</html>