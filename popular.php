<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Popular</title>
</head>
<body>
    <form method="post">
        <input type="submit" value="Incluir" name="bt-incluir">
    </form>

    <?php

require_once('Faker-main/src/autoload.php');



    
    class Contato {
        public $name;
        public $email;
        public $telefone;
        public $image;

        function set_name($nome){
            $this->name = $nome;
        }
        function set_email($email){
            $this->email = $email;
        }
        function set_telefone($telefone){
            $this->telefone = $telefone;
        }

        function set_image($src){
            $this->image = $src;
        }

    }

    if(isset($_POST['bt-incluir'])){
        $faker = Faker\Factory::create();
        $contato = new Contato;
        $contato->name = $faker->name();
        var_dump($contato);

    }


    ?>
</body>
</html>