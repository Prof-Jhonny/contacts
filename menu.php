<div class="menu">
    <ul>
        <li class="dropdown">
            <span class="dropbtn hover-underline-animation">
                <span class="material-symbols-outlined">add_box</span>
                Novo
            </span>
            <div class="dropdown-content">
                <a href="cad_contato.php">Contato</a>
                <a href="cad_user.php">Usuário</a>
            </div>
        </li>

        <li class="dropdown">
            <span class="dropbtn hover-underline-animation">
                <span class="material-symbols-outlined">home_storage</span>
                Listar
            </span>
            <div class="dropdown-content">
                <a href="listar.php">Contatos</a>
                <a href="listar_usuarios.php">Usuários</a>
                <a href="pesquisar.php">Pesquisar</a>
            </div>
        </li>
        <!-- <a href="cad_contato.php" class="hover-underline-animation">
            <li>Incluir</li>
        </a>
        <a href="cad_user.php" class="hover-underline-animation">
            <li>Novo Usuário</li>
        </a> -->

        <?php
        @session_start();
        if (isset($_SESSION['logado']) && $_SESSION['logado'] == true) {
        ?>

            <li class="dropdown">
                <span class="dropbtn hover-underline-animation">
                    <span class="material-symbols-outlined">perm_identity</span>
                    <?php echo "$_SESSION[nome]"; ?>
                </span>
                <div class="dropdown-content">
                    <a href="alterar_usuario.php?codigo=<?php echo $_SESSION['codigo']; ?>">Alterar</a>
                    <a href="logoff.php">Sair</a>
                </div>
            </li>


        <?php
        } else {
            echo "<a href=login.php class=\"hover-underline-animation\"><li>Entrar</li></a>";
        }
        ?>

    </ul>
</div>