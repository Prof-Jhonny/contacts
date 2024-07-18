<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $senha      =   "joao";
    $senha_hs   =   md5($senha);
    echo "<p>Senha = $senha Hash: $senha_hs";

    $senha      =   "Joao";
    $senha_hs   =   md5($senha);
    echo "<p>Senha = $senha Hash: $senha_hs";

    $senha      =   "raphinhanevida";
    $senha_hs   =   md5($senha);
    echo "<p>Senha = $senha Hash: $senha_hs";


    // $x = 0;
    // while ($x <= 10) {
    //     echo "<p>O valor de x é $x</p>";
    //     $x++;
    // }

    $x = 4;
    echo $x ** 2;

    ?>
</body>

</html>